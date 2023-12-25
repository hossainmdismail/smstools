<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InboxController extends Controller
{
    function inbox()
    {
        return view('backend.pages.inbox');
    }
}
