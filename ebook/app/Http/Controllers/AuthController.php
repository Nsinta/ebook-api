<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function me(){
        return[
            'NIS' => 3103120164,
            'Nama' => 'Niki Sinta',
            'Phone' => '0853 2698 5418'
        ];
    }
}