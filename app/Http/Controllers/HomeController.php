<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $get = Article::get();

        $data = [
            'data' => $get
        ];

        return view('artikel', $data);
    }

    public function api()
    {

   $response = Http::withoutVerifying()->get('https://api.escuelajs.co/api/v1/users');


    if($response->successful()){
        $data = $response->object();
    }else{
        $data = [
            'message' => 'gagal'
        ];
    }

        return view('api',compact('data'));
    }
}