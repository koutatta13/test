<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\FirestoreApi;
use Illuminate\Support\Facades\DB; //追加
use Illuminate\Support\Str; //追加
use Illuminate\Support\Facades\Hash; //追加

class HelloController extends Controller
{
    public function index()
    {
    //変更箇所
    $firebase = new FirestoreApi();
    $firebase->storeComment(1,1,1,"test");
    $firebase->storeComment(1,1,1,"test");
    DB::table('users')->insert([
        'name' => Str::random(10),
        'email'     => Str::random(10).'@gmail.com',
        'password'  => Hash::make('password'),
    ]);
   // FirestoreApi::storeComment($sender_id, $room_id, $comment);
      return view('test');
    }
}
