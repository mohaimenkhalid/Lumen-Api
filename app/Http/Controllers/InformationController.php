<?php

namespace App\Http\Controllers;

use App\InformationEtc;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function onAllSelect(){
        $client_review = InformationEtc::all();
        return $client_review;
    }
}
