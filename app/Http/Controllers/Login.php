<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function index($value='')
    {
        return response()->json([
            'data' => 'vay bien wn'
        ]);
    }
}
