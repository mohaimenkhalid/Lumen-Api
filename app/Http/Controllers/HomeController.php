<?php

namespace App\Http\Controllers;

use App\HomeEtc;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function onAllSelect(){
        $client_review = HomeEtc::all();
        return $client_review;
    }
}
