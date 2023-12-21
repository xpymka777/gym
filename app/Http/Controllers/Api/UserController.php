<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json(['data' => $users], Response::HTTP_OK);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json(['data' => $user], Response::HTTP_OK);
    }
    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json(['message' => 'Успешное добавление пользователя'], Response::HTTP_CREATED);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json(['message' => 'Обновление успешно завершено'], Response::HTTP_OK);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['message' => 'Выбранный объект был удалён'], Response::HTTP_NO_CONTENT);
    }
}
