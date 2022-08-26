<?php

namespace Auncly\Binoculars\Http\Controllers;

use Auncly\Binoculars\Models\Schema;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableController{
    
    public function __invoke(Request $request): JsonResponse {
        $tables = Schema::select('name', 'tbl_name')->where('type', 'table')->get();
        
        foreach($tables as $table) {
            $details = DB::select("PRAGMA table_info('{$table->name}')");
            $table->nb_columns = count($details);
        }
        
        return response()->json($tables);
    }
    
}