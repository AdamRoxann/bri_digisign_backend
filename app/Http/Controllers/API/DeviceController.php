<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Device;

class DeviceController extends Controller
{
    public function login(Request $request){
        $device = Device::where('licence_codes',$request->licence_codes)->first();
        
        if($device == null){
            return response()->json(['status'=>true,'value'=>0,'message'=>'Licence not valid']);
        }

        if($device->status == 1){
            return response()->json(['status'=>true,'value'=>0,'message'=>'Device has been used']);
        }
            
            
            
        // if(\Hash::check($request->password, $user->password)){
                // \Session::put('user', $user);
                // return redirect('/home');
                $device_login = Device::where('licence_codes',$request->licence_codes)->first();
                $device_login->status = 1;
                $device_login->last_login = now();
                $device_login->save();
                return response()->json(['status'=>true,'value'=>1,'message'=>'Licences Code Valid!', 
                    'id'=>(string)$device_login->id,
                    'device_name'=>$device_login->device_name,
                    'licence_codes'=>$device_login->licence_codes,
                    // 'api_key'=>'ebf740cda1cd777305801e6784670ff6b88e919155fe10c74d5c1954b349c694'
                ]);
            // } else {
                // \Session::flash('error', 'Username atau password salah');
                // return redirect('/login');
                // return response()->json(['status'=>true,'value'=>2,'message'=>'Username atau password salah!']);
    }
}
