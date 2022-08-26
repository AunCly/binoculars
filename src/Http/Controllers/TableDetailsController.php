<?php

namespace Auncly\Binoculars\Http\Controllers;

use Auncly\Binoculars\Models\Schema;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableDetailsController{
    
    public function __invoke(Request $request): JsonResponse {
        $datas = DB::table($request->table)->paginate(
            $request->perPage ?? 15,
            ['*'],
            'page',
            $request->currentPage ?? 1
        );
        
        return response()->json($datas);
    }
    
}