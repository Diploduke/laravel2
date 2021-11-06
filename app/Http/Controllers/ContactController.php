<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller {

//    public function submit(Request $req) {

//        return "Хорошо!";     // 01. Простой возврат для проверки работы функции.
//        dd($req);   // 02. Выводит все, удобно выбрать что-то для дальнейшей работы.
//        dd($req->input('subject'));     // 03. Вывод конкретного поля.
//        $validation = $req->validate([    // 04. Верификация через функцию validate().
//            'subject' => 'required|min:5|max:50',
//            'message' => 'required|min:15|max:500'
//        ]);

//    }

    public function submit(ContactRequest $req) {
        $contact = new Contact();
        $contact->name = $req->input('name');   // contact->name - "name" устанавливаем те же имена, как и поля в таблице БД.
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
        $contact->save();
        return redirect()->route('home')->with('success', 'Ваше сообщение было отправлено успешно!');
    }

    public function allData() {
//        dd(Contact::all());   // Вывести все (в "системном" виде).
        $contact = new Contact;
        return view('messages', ['data' => $contact->all()]);   // Получаем все данные из таблицы БД в шаблон "messages".
//        return view('messages', ['data' => [$contact->find(2)]]);   // Получаем данные только у записи таблицы с id = 2.
//        return view('messages', ['data' => [$contact->inRandomOrder()->first()]]); // Получаем первое (одно) случайное значение.
//        return view('messages', ['data' => $contact->inRandomOrder()->get()]); // Получаем все записи в случайном порядке.
//        return view('messages', ['data' => $contact->orderBy('id', 'desc')->get()]); // Получаем отсортированные записи по полю "id" (по убыванию - desc, по возрастанию - asc).
//        return view('messages', ['data' => $contact->orderBy('id', 'asc')->take(2)->get()]); // Получаем отсортированные записи по полю "id" (по возрастанию), ограничивая вывод двумя записями take(2).
//        return view('messages', ['data' => $contact->orderBy('id')->skip(1)->take(2)->get()]); // Получаем отсортированные записи по полю "id", ограничивая вывод двумя записями и пропуская одну запись (skip(1)).
//        return view('messages', ['data' => $contact->where('name', '=', 'Вася Пупкин')->get()]); // Получаем записи, в которых поле "name" имеет значение "Вася Пупкин". !!! Также возможна проерка на "не равно" ('<>'), больше (>), меньше (<) и т.д. (<=, >=...)

        //        return view('messages', ['data' => Contact::all()]);    // Получаем все данные из таблицы БД в шаблон "messages".
    }

    public function showMessage($id) {
        $contact = new Contact;
        return view('show-message', ['data' => $contact->find($id)]);
    }

    public function updateMessage($id) {
        $contact = new Contact;
        return view('update-message', ['data' => $contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req) {
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
        $contact->save();
        return redirect()->route('contact-data-showMessage', $id)->with('success', 'Информация была изменена успешно!');
    }

    public function deleteMessage($id) {
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Сообщение было удалено!');
    }

}
