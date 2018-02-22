<?php

namespace App\Services;

use App\Report;
use Illuminate\Http\Request;

class ReportService {

    public function getAll() {
        return Report::orderBy('created_at', 'asc')->get();
    }
    
    public function findById($id){
        return Report::find($id);
    }
    
    public function save(Request $request){
        $report = new Report();
        $report->title = $request->title;
        $report->content = $request->content;
        $report->save();
        
        return $report->getKey();
    }
    
    public function delete(Report $report){
        $report->delete();
    }
    
    public function update(Request $request, Report $report){
        $report->title = $request->title;
        $report->content = $request->content;
        $report->update();
    }

}
