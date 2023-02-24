<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        echo "Silahkan Email disini : <br>
           <h7><a href='mailto:bintangsholu@gmail.com'>bintangsholu@gmail.com</a></h7>";
    }
}
