<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TopController extends Controller {

    public function index() {
        echo 'Call TopController#index<br>';
        return view('top');
    }

}
