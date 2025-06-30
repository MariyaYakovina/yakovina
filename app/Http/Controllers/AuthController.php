<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class AuthController extends Controller
{
    public function auth(Request $request)
    {
        // Проверяем, есть ли пользователь с таким логином и паролем
        $user = Person::where('login', $request->login)
            ->where('password', $request->password)
            ->first();

        if ($user) {
            // Если пользователь найден, возвращаем успешный ответ
            return response()->json(['status' => 'Вы успешно выполнили вход']);
        } else {
            // Если пользователя нет, возвращаем ошибку
            return response()->json(['status' => 'Такой пользователь не существует! Перейдите на страницу регистрации.'], 400);
        }
    }
}

