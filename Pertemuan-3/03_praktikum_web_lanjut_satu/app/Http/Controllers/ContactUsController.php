<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact-us');
    }

    public function store(Request $request)
    {
        echo "Name: " . $request->name . "<br>";
        echo'email: ' . $request->email . '<br>';
        echo 'Message: ' . $request->message . '<br>';
    }
}
