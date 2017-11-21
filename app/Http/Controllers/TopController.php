<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Report;

class TopController extends Controller {

    public function index() {
//        echo 'Call TopController#index<br>';

        $reports = Report::orderBy('created_at', 'asc')->get();

        return view('top', ['reports' => $reports]);
    }

}
