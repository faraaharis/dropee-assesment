<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function show(){

        $page = Page::orderBy('created_at', 'DESC')->first();

        return view('block', [
            'page' => $page
        ]);

    }
}
