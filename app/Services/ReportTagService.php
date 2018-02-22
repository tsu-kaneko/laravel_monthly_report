<?php

namespace App\Services;

use App\ReportTag;
use Illuminate\Http\Request;

class ReportTagService {
    
    public function findByReportId(int $report_id){
        return ReportTag::find($report_id);
    }
    
    public function save(int $report_id, Request $request){
        foreach ($request->checkTags as $key => $value){

            $reportTag = new ReportTag();
            $reportTag->report_id = $report_id;
            $reportTag->tag_id = $value;

            $reportTag->save();
        }
    }
    
}

