<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
        return inertia('index/Index', [
            "message" => "Hello World!",
            'name' => 'John Doe',
            'age' => 42,
            'hobbies' => ['Skiing', 'Hiking', 'Cycling'],
            'job' => 'Software Engineer',
        ]);
    }

    public function show()
    {
        return inertia('index/Show');
    }

}
