<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $data = Data::getData(); // Ensure this returns a collection with 'mag' attribute
        
        // Uncomment this line to debug
        // return $data; // Check what is returned
        
        return view('dashboard', [
            'data' => $data // Check if $data is correctly passed
        ]);
    }
}