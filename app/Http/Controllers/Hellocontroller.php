<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hellocontroller extends Controller
{
    function index() {
        echo "Hello";
    }

    function worldMessage() {
        echo "World message";
    }
}
