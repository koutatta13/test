<?php

class FirebaseController extends Controller
{
    protected $db;

    public function __construct()
    {
        $this->db = app('firebase.firestore')->database();
    }

    public function load() {
        $collection = $this->db->collection('talk_api');

        $document = $collection->document('R4166zsxknrklBy607jH');
        $snapshot = $document->snapshot();
        $data = $snapshot->data();
        return response()->json([
            'data' => $data,
        ]);
    }
}