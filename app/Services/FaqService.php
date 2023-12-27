<?php

namespace App\Services;

use App\Models\Faq;
use App\Traits\Status;

class FaqService extends AbstractService
{
    public function __construct(Faq $faq)
    {
        $this->model = $faq;
    }

    /**
     * @param array $data
     * @return void
     */
    public function store(array $data)
    {
        $item = new Faq();

        $translationQuestions = [
            'uz' => $data['question_uz'],
            'en' => $data['question_en'],
            'ru' => $data['question_ru']
        ];
        $translationAnswers = [
            'uz' => $data['answer_uz'],
            'en' => $data['answer_en'],
            'ru' => $data['answer_ru']
        ];
        $item->status = isset($data['status']) ? Status::$status_active : Status::$status_inactive;
        $item->setTranslations('question', $translationQuestions);
        $item->setTranslations('answer', $translationAnswers);
        $item->save();
    }

    public function update(array $data, $id)
    {
        $item = $this->show($id);

        $translationQuestions = [
            'uz' => $data['question_uz'],
            'en' => $data['question_en'],
            'ru' => $data['question_ru']
        ];

        $translationAnswers = [
            'uz' => $data['answer_uz'],
            'en' => $data['answer_en'],
            'ru' => $data['answer_ru']
        ];
        $item->status = isset($data['status']) ? Status::$status_active : Status::$status_inactive;
        $item->setTranslations('question', $translationQuestions);
        $item->setTranslations('answer', $translationAnswers);
        $item->save();
        $item->update($data);
    }
}
