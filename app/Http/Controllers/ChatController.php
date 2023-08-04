<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ChatController extends Controller
{
    public function bind(Request $request)
    {
        Chat::updateOrCreate(
            ['user_id' =>  auth()->id()],
            ['client_id' =>  $request->input('client_id')]
        );
        return response()->json(['code' => 200, 'msg' => '成功']);
    }
}
