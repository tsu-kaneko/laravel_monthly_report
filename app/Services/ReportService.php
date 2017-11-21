<?php

namespace App\Services;

use \App\Report;

class ReportService {

    public function getAll() {
        return Report::orderBy('created_at', 'asc')->get();
    }
    
    public function findById($id){
        return Report::find($id);
    }

}
