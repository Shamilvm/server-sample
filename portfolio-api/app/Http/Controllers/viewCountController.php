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
    public function getCount(){
        // dd(viewCountModel::sum('view_count'));
        $ip = Request()->ip();
        $userAgent = Request()->userAgent();
        $data = viewCountModel::where('user_agent', $userAgent)
            ->where('ip_address', $ip)->first();
            // dd($data);
        if(!$data){
            $data = new viewCountModel;
        }
        $data->ip_address = $ip;
        $data->user_agent = $userAgent;
        // $data->timestamps = Carbon::now();
        ++$data->view_count;
        // dd($data->view_count);
        $data->save();
        // dd($data);

    }

}

