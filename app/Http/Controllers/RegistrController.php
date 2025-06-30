<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class RegistrController extends Controller
{
    public function registr(Request $request)
    {
        // Валидация данных
        $validator = Validator::make($request->all(), [
            'login' => 'required|unique:people,login', // Логин должен быть уникальным
            'password' => 'required', // Пароль обязателен
        ]);

        if ($validator->fails()) {
            // Логируем ошибку валидации
            Log::error('Ошибка валидации при регистрации', $validator->errors()->toArray());
            return response()->json(['status' => 'error', 'message' => 'Некорректные данные'], 400);
        }

        try {
            // Создаем нового пользователя
            Person::create([
                'login' => $request->login,
                'password' => bcrypt($request->password),  // Хешируем пароль перед сохранением
            ]);
        } catch (\Exception $e) {
            // Логируем ошибку на сервере
            Log::error('Ошибка при создании пользователя: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Не удалось создать пользователя'], 500);
        }

        return response()->json(['status' => 'yes']);
    }
}
