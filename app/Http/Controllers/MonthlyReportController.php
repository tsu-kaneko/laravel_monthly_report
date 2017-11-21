<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//use App;
use App\Services\ReportService;

class MonthlyReportController extends Controller {
    
    protected $reportService;
    
    public function __construct(ReportService $reportService) {
        $this->reportService = $reportService;
    }

    /**
     * 月報一覧
     * 
     * @return type
     */
    public function index() {
//        echo 'Call TopController#index<br>';

//        コンテナから取得する別の方法
//        $reportService = App::make(ReportService::class);
//        $reports = $reportService->getAll();

        $reports = $this->reportService->getAll();

        return view('reports.top', ['reports' => $reports]);
    }
    }

}
