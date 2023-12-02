<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CarouselCURD;
class TestController extends Controller
{
    public function index()
    {
    //変更箇所
    //FirestoreApi::storeComment($sender_id, $room_id, $comment);
      return view('test');
    }
    public function send(Request $request)
    {
      return view('send');
    }
    public function response(Request $request)
    {
      $CarouselCURD2 = new CarouselCURD;
      dump($request);
      $CarouselCURD2->CreateCarousel($request->input('startDate'),$request->input('endDate'),$request->input('alt'),$request->input('url'));
      return view('response');
    }
}
