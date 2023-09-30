<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        return view('portfolio');
    }
}
