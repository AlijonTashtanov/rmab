<?php

namespace App\Services\Api;

use App\Fields\Store\TextField;
use App\Http\Resources\Api\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthService extends AbstractService
{
    protected $model = User::class;

    //<editor-fold desc="Login">

    /**
     * @param array $data
     * @return array
     */
    public function login(array $data)
    {
        $fields = $this->getLoginFields();

        $rules = [];

        foreach ($fields as $field) {

            $rules[$field->getName()] = $field->getRules();
        }

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {

            $errors = [];

            foreach ($validator->errors()->getMessages() as $key => $value) {

                $errors[$key] = $value[0];
            }

            return [
                'status' => false,
                'message' => 'Validation error',
                'statusCode' => 403,
                'data' => $errors
            ];
        }

        $user = User::where(['signature_name' => $data['name']])
            ->where(['pinfl' => $data['pinfl']])
            ->first();

        if ($user) {

            $user = UserResource::make($user);
            $token = $user->createToken('LaravelAuthApp')->accessToken;

            return [
                'status' => true,
                'message' => 'success',
                'statusCode' => 200,
                'data' => [
                    'user' => $user,
                    'token' => $token
                ]
            ];

        } else {

            $userModel = new User();
            $userModel->name = $data['full_name'];
            $userModel->signature_name = $data['name'];
            $userModel->address = $data['address'];
            $userModel->serial_number = $data['serial_number'];
            $userModel->pinfl = $data['pinfl'];
            $userModel->password = bcrypt(rand(10000000, 99999999));
            $userModel->role = User::$role_user;


            if ($userModel->save()) {
                $user = UserResource::make($userModel);
                $token = $user->createToken('LaravelAuthApp')->accessToken;

                return [
                    'status' => true,
                    'message' => 'success',
                    'statusCode' => 200,
                    'data' => [
                        'user' => $user,
                        'token' => $token
                    ]
                ];
            }
        }


        return [
            'status' => false,
            'message' => 'Invalid e-imzo',
            'statusCode' => 401,
            'data' => null
        ];
    }

    /**
     * @return array
     */
    public function getLoginFields()
    {
        return [
            TextField::make('name')->setRules('required|max:1024'),
            TextField::make('address')->setRules('required|min:1|max:2048'),
            TextField::make('serial_number')->setRules('required|min:5|max:1024'),
            TextField::make('pinfl')->setRules('required|min:5|max:1024'),
            TextField::make('full_name')->setRules('required|min:5|max:1024'),
        ];
    }

}
