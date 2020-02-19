<?php

function responseJson($status, $message, $data = null)
{
    $response = [
        'status' => $status,
        'message' => $message,
        'data' => $data,
    ];
    return response()->json($response);
}
function setting(){
    $setting = \App\Models\Setting::find(1);
    if ($setting){
        return $setting;
    }else{
        return new\App\Models\Setting;
    }
}

