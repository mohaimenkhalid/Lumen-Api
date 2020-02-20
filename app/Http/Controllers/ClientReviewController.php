<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientReview;

class ClientReviewController extends Controller
{
    public function onAllSelect(){
        $client_review = ClientReview::all();
        return $client_review;
    }
}
