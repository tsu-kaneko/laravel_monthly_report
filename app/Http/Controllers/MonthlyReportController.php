<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\ReportService;
use Illuminate\Http\Request;
use App\Report;

class MonthlyReportController extends Controller {
    
    protected $reportService;
    
    public function __construct(ReportService $reportService) {
        $this->reportService = $reportService;
    }

    /**
     * 月報の一覧
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
     * 月報の新規登録画面に遷移
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
    
    /**
     * 月報の削除
     */
    public function destroy(Report $report){
        $this->reportService->delete($report);
        return redirect('/report');
    }
    
    /**
     * 月報の編集画面に遷移
     * 
     * @param Report $report
     * @return type
     */
    public function edit(Report $report){
        return view('reports.edit', ['report' => $report]);
    }
    
    /**
     *  月報の更新
     * 
     * @param Report $report
     * @return type
     */
    public function update(Request $request, Report $report){
        $this->reportService->update($request, $report);
        return redirect('/report/'.$report->id);
    }

}
