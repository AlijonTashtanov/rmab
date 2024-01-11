<div class="mb-3">
    <div class="form-group">
        <label for="nameInput" class="form-label">Nomi [uz]</label>
        <input type="text" class="form-control" id="nameInput" name="name_uz"
               value="{{old("name_uz") ?? $response->getTranslation('name','uz')}}">
        @error('name_uz')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="nameInput" class="form-label">Nomi [ru]</label>
        <input type="text" class="form-control" id="nameInput" name="name_ru"
               value="{{old("name_ru") ?? $response->getTranslation('name','ru')}}">
        @error('name_ru')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="nameInput" class="form-label">Nomi [en]</label>
        <input type="text" class="form-control" id="nameInput" name="name_en"
               value="{{old("name_en") ?? $response->getTranslation('name','en')}}">
        @error('name_en')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="nameInput" class="form-label">Key</label>
        <input type="text" class="form-control" id="nameInput" name="key"
               value="{{old("key") ?? $response->key}}">
        @error('key')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>

<button type="submit" class="btn btn-primary float-right">Saqlash!</button>
<br><br><br>
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Viloyat nomi</th>
                <th scope="col">Key</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Andijon viloyati</td>
                <td>andijon</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Buxoro viloyati</td>
                <td>buxoro</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Fargʻona viloyati</td>
                <td>fargona</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Jizzax viloyati</td>
                <td>jizzax</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Xorazm viloyati</td>
                <td>xorazm</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>Namangan viloyati</td>
                <td>namangan</td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>Navoiy viloyati</td>
                <td>navoiy</td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td>Qashqadaryo viloyati</td>
                <td>qashqadaryo</td>
            </tr>
            <tr>
                <th scope="row">9</th>
                <td>Qoraqalpogʻiston Respublikasi</td>
                <td>qoraqalpogiston</td>
            </tr>
            <tr>
                <th scope="row">10</th>
                <td>Samarqand viloyati</td>
                <td>samarqand</td>
            </tr>
            <tr>
                <th scope="row">11</th>
                <td>Sirdaryo viloyati</td>
                <td>sirdaryo</td>
            </tr>
            <tr>
                <th scope="row">12</th>
                <td>Surxondaryo viloyati</td>
                <td>surxondaryo</td>
            </tr>
            <tr>
                <th scope="row">13</th>
                <td>Toshkent viloyati</td>
                <td>toshkent</td>
            </tr>

            </tbody>
        </table>
    </div>
</div>
