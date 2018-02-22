<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\ReportService;
use App\Services\TagService;
use Illuminate\Http\Request;
use App\Report;
use App\Services\ReportTagService;

class MonthlyReportController extends Controller {
    
    protected $reportService;
    
    protected $tagService;
    
    protected $reportTagService;
    
    public function __construct(ReportService $reportService, 
            TagService $tagService, 
            ReportTagService $reportTagService) {
        $this->reportService = $reportService;
        $this->tagService = $tagService;
        $this->reportTagService = $reportTagService;
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
//        return view('reports.top')->with(['reports' => $reports]);  // これでも渡せる
    }

    /**
     * 月報の詳細
     * 
     * @param type $id
     * @return type
     */
    public function show($id){
        $report = $this->reportService->findById($id);
        
        $reportTags = $this->reportTagService->findByReportId($id);
        \Debugbar::info($reportTags);
        
        return view('reports.detail', ['report' => $report]);
    }
    
    /**
     * 月報の新規登録画面に遷移
     */
    public function create(){
        $tags = $this->tagService->findAll();
        return view('reports.create', ['tags' => $tags]);
    }
    
    /**
     * 
     * 月報の新規登録
     * 
     * @param Request $request
     * @return type
     */
    public function store(Request $request){
        $report_id = $this->reportService->save($request);
        $this->reportTagService->save($report_id, $request);
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
