<?php

namespace App\Http\Controllers;

use App\Models\viewCountModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class viewCountController extends Controller
{
/**
 * id
 * ipAddress
 * user_agent
 * session_id
 * view_count
 * created_at
 * 
 */
    public function addCount(){
        // dd(viewCountModel::sum('view_count'));
        $data = [];
        if($cnName = request()->candidate){
        }else{
            abort(404);
        }
        $ip = request()->ip();
        $userAgent = request()->userAgent();
        $data = viewCountModel::where('user_agent', $userAgent)
                ->where('ip_address', $ip)
                ->where('candidate_name', $cnName)
                ->first();
        // dd($data);
        if(!$data){
            $data = new viewCountModel;
            $data->ip_address = $ip;
            $data->candidate_name = $cnName;
            $data->user_agent = $userAgent;
        }
        // $data->timestamps = Carbon::now();
        $data->view_count++;
        // dd($data->view_count);
        $data->save();
        return response()->json(['success'=>true]);
        // dd($data);

    }

    public function viewCount(){
        $cnName = request()->get('candidate');
        if(!$cnName){
            return response()->json([
                "data"=>[
                    "count"=>0,
                    
                ]
                ]);
        }

        return response()->json([
            "data"=>[
                "count"=>viewCountModel::where('candidate_name', $cnName)->sum('view_count'),

            ]
            ]);
       }

}

