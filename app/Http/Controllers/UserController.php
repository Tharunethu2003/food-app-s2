<?php
namespace App\Http\Controllers;

class UserController extends Controller
{
    public function landingPage()
    {
        return view('user.landingpage'); // Your existing Blade file
    }
}
