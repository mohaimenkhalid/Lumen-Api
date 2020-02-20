<?php

namespace App\Http\Controllers;

use App\ContactTable;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function onAllSelect(){
        $client_review = ContactTable::all();
        return $client_review;
    }
}
