<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jobs;
use DB;

class C_jobs extends Controller
{
    public function index()
    {
        $jobs = Jobs::all();

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data Job',
            'data'    => $jobs  
        ], 200);
    }
    public function show($id)
    {
        $jobs = Jobs::findOrfail($id);
        if($jobs){
            return response()->json([
                'success' => true,
                'message' => 'List jobs',
                'data' => $jobs,
            ],200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Data Not Found',
                
            ],404);
        }
    }
}
