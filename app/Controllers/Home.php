<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return (
            view('templates/header', array('title' => 'Home')) .
            view('landing') .
            view('templates/footer')
        );
    }
}
