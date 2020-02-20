<?php

namespace App\Http\Controllers;

use App\ServiceTable;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function onAllSelect(){
        $client_review = ServiceTable::all();
        return $client_review;
    }
}
