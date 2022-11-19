<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skills;
use DB;

class C_skills extends Controller
{
    public function index()
    {
        //$skills = DB::table('skills')->select('id','name')->get();
        $skills = Skills::all();

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data Skill',
            'data'    => $skills  
        ], 200);
    }
    public function show($id)
    {
        $skills = Skills::findOrfail($id);
        if($skills){
            return response()->json([
                'success' => true,
                'message' => 'List Skill',
                'data' => $skills,
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
