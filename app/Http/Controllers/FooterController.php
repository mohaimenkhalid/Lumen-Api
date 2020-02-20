<?php

namespace App\Http\Controllers;

use App\FooterTable;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function onAllSelect(){
        $client_review = FooterTable::all();
        return $client_review;
    }
}
