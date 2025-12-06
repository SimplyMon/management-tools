<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {

        $persons = [
            [
                'fname' => 'Mon',
                'lname' => 'Pasag'
            ],
            [
                'fname' => 'John',
                'lname' => 'Doe'
            ],
            [
                'fname' => 'Maine',
                'lname' => 'Maria'
            ],
        ];


        return view('reports.index', ['persons' => $persons]);
    }
}
