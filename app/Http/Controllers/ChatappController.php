<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ChatappController extends BaseController
{
    function chat(){
        return view('chatapp.chat');
    }
}