<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return array(
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:15|max:500'
        );
    }

//    public function attributes() {  // Меняет только один "атрибут" (слово).
//        return [
//            'name' => 'Your name'
//        ];
//    }

    public function messages() {  // Меняет любую нужную часть сообщения об ошибке.
        return [
            'name.required' => 'Поле "Имя" является обязательным!',
            'email.required' => 'Поле "Email" является обязательным!',
            'subject.required' => 'Поле "Тема" является обязательным!',
            'message.required' => 'Поле "Сообщение" является обязательным!',
            'email.email' => 'Поле "Email" заполнено некорректно!'
        ];
    }

}
