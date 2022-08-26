<?php

namespace Auncly\Binoculars\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableStructureController{
    
    public function __invoke(Request $request): JsonResponse {
        $details = DB::select("PRAGMA table_info('{$request->table}')");
        return response()->json($details);
    }
    
}