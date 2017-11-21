<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//use App;
use App\Services\ReportService;

class TopController extends Controller {
    
    protected $reportService;
    
    public function __construct(ReportService $reportService) {
        $this->reportService = $reportService;
    }

    public function index() {
//        echo 'Call TopController#index<br>';

//        コンテナから取得する別の方法
//        $reportService = App::make(ReportService::class);
//        $reports = $reportService->getAll();

        $reports = $this->reportService->getAll();

        return view('top', ['reports' => $reports]);
    }

}
