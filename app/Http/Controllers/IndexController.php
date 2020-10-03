<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;

class IndexController extends Controller
{
    public function index()
    {
        $website = General::all()->first();

        return view('home', array(
            'website' => $website
        ));
    }
}
