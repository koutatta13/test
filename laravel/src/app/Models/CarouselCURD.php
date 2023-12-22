<?php

namespace App\Models;

use Illuminate\Support\Facades\DB; //追加
use Illuminate\Support\Str; //追加
use Illuminate\Support\Facades\Hash; //追加
use Laravel\Sanctum\HasApiTokens;
class CarouselCURD
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function CreateCarousel($startDate,$endDate,$alt,$url){
        DB::table('carousel')->insert([
            'startDate' => $startDate,
            'endDate'     => $endDate,
            'alt'  => $alt,
            'url'=> $url,
        ]);
    }
    public function Deletearousel($id){
        DB::table('carousel')->where('id', $id)->delete();        
    }
}
