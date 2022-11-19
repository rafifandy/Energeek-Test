<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidates;
use App\Models\Skillsets;
use Validator;
use DB;

class C_candidates extends Controller
{
    public function index()
    {
        $candidates = Candidates::with('skills')->get();
        return response()->json([
            'success' => true,
            'message' => 'List Data Candidate',
            'data'    => $candidates  
        ], 200);
    }

    public function show($id)
    {
        $candidates = Candidates::with('skills')->findOrfail($id);
        if($candidates){
            return response()->json([
                'success' => true,
                'message' => 'List Candidate',
                'data' => $candidates,
            ],200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Data Not Found',
                
            ],404);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'id_job'    => 'required',
            'email'     => 'required|email',
            'phone'     => 'required|numeric',
            'year'      => 'required',
            'skills'      => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        //dd($request->skills);

        //  table candidate insert
        $candidates = Candidates::create([
            'name'      => $request->name,
            'id_job'    => $request->id_job,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'year'      => $request->year,
            'created_at' => NOW(),
        ]);
        
        // table skillset insert
        $candidate_skills = Candidates::where('email',$request->email)->where('phone',$request->phone)->first();
        $ics = $candidate_skills->id;
        for ($i = 0; $i < sizeof($request->skills); $i++) {
            $skills = Skillsets::create([
                'id_candidate'  => $ics,
                'id_skill'      => $request->skills[$i],
            ]);
            if(!$skills) {
                return response()->json([
                    'success' => false,
                    'message' => 'Candidate skill create failed',
                    'data'    => $skills
                ], 409);
            }
        }

        // result check
        $hasil = Candidates::with('skills')->where('id',$ics)->get();
        if($candidates){
            return response()->json([
                'success' => true,
                'message' => 'Candidate create success',
                'data' => $hasil,
            ],200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Candidate create failed',
             ], 409);
        }
    }
}
