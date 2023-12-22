<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\FirestoreApi;
use Illuminate\Support\Facades\DB; //追加
use Illuminate\Support\Str; //追加
use Illuminate\Support\Facades\Hash; //追加
use Google\Cloud\Firestore\FirestoreClient;

class topController extends Controller
{
    protected $db;

    public function __construct()
    {
        $this->db = app('firebase.firestore')->database();
    }

    // public function loadTable() {
    //     $collection = $this->db->collection('carousel');
    //     $query = $collection->where('status', '=', false);
    //     $snapshot = $query->documents();
    //     foreach ($snapshot as $document) {
    //         dump($document->alt());
    //     }
    // }
    public function loadDoc() {
        $collection = $this->db->collection('carousel');

        $document = $collection->document('B636UbVCImV1Dj8Ng1et');
        $snapshot = $document->snapshot();
        $data = $snapshot->data();
        dump($data);
        return response()->json([
            'data' => $data,
        ]);
    }

    public function index() {
        $collection = $this->db->collection('carousel');

        //$document = $collection;
        $query = $collection->where('status', '=', false);
        $documents = $query->documents();
        $innerHTML="";
        foreach ($documents as $document) {
            if ($document->exists()) {
                $innerHTML=$innerHTML.'<div class="swiper-slide" ><img src="'.$document->data()["imgPath"].'" alt=""></div>';
                //dump($document->data()->alt);
            } else {
            }
        }
        return view('top',['carouselHTML' => $innerHTML]);
    }
}