<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//use App;
use App\Services\ReportService;
use Illuminate\Http\Request;

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

    /**
     * 月報の詳細
     * 
     * @param type $id
     * @return type
     */
    public function show($id){
        $report = $this->reportService->findById($id);
        return view('reports.detail', ['report' => $report]);
    }
    
    /**
     * 新規登録画面に遷移
     */
    public function create(){
        return view('reports.create');
    }
    
    /**
     * 
     * 月報の新規登録
     * 
     * @param Request $request
     * @return type
     */
    public function store(Request $request){
        $this->reportService->save($request);
        return redirect('/report');
    }
    
    public function destroy(){
        
    }
    
    // 編集画面に遷移
    public function edit(){
        
    }
    
    public function update(){
        
    }

}
