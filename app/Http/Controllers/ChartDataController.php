<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChartData;

class ChartDataController extends Controller
{
    public function onAllSelect(){
        $result = ChartData::all();
        return $result;
    }
}
