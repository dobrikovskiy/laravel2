<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    public function index()
    {
        return view('userform'); // Будем использовать шаблон userform.blade.php
    }

    // public function store(Request $request)
    // {
    //     $data = $request->only(['first_name', 'last_name', 'email']);
    //     return response()->json($data); // Возвращаем данные в формате JSON
    // }

    public function store(Request $request)
    {
    // Получаем данные из формы
    $data = $request->only(['first_name', 'last_name', 'email']);

    // Возвращаем шаблон welcome_user с данными
    return view('welcome_user', [
        'first_name' => $data['first_name'],
        'last_name' => $data['last_name'],
        'email' => $data['email'],
        ]);
    }
}
