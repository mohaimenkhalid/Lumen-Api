<?php

namespace App\Http\Controllers;

use App\ProjectTable;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function onAllSelect(){
        $client_review = ProjectTable::all();
        return $client_review;
    }
}
