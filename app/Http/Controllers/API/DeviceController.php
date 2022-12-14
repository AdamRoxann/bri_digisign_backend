<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Device;
use App\User;
use App\Board;
use App\Kurs;
use App\InterestRate;
use App\SukuBungaGiro;
use App\KursMaster;
use App\InterestRateMaster;
use App\SukuBungaGiroMaster;
use Illuminate\Support\Str;

class DeviceController extends Controller
{
    public function login(Request $request){
        $users = User::where('username',$request->username)->first();
        // $device = Device::where('licence_codes',$request->licence_codes)->first();
        
        if($users == null){
            return response()->json(['status'=>true,'value'=>0,'message'=>'Username not found']);
        }
        // if($device->status == 1){
        //     return response()->json(['status'=>true,'value'=>0,'message'=>'Device has been used']);
        // }
            
            
            
            if(\Hash::check($request->password, $users->password)){
                // \Session::put('user', $user);
                // return redirect('/home');
                $device = Device::where('device_code',$request->device_code)->first();
                if($device == null){
                    $setInactive = Device::where('device_code','<>',$request->device_code)->where('user_id', $users->id)->update(['status' => 0], ['updated_at'=>NOW()]);

                    $regist_device = new Device();
                    $regist_device->user_id = $users->id;
                    $regist_device->device_name = $request->device_code;
                    $regist_device->device_code = $request->device_code;
                    $regist_device->licence_codes = Str::random(100);
                    $regist_device->status = 1;
                    $regist_device->registered_at = NOW();
                    $regist_device->last_login = NOW();
                    $regist_device->save();

                    $regist_board = new Board();
                    $regist_board->device_id = $regist_device->id;
                    $regist_board->board_name = 'default';
                    $regist_board->orientation = 'landscape';
                    $regist_board->scroll_text = 'PT Bank Rakyat Indonesia, Tbk. adalah salah satu bank terbesar dan tertua milik BUMN di Indonesia.';
                    $regist_board->status = 1;
                    $regist_board->save();

                    $kursmaster = KursMaster::all();
                    
                    foreach($kursmaster as $kurs){
                        $defaultKurs = new Kurs();
                        $defaultKurs->board_id = $regist_board->id;
                        $defaultKurs->flag_icon = $kurs->flag_icon;
                        $defaultKurs->kurs_name = $kurs->kurs_name;
                        $defaultKurs->sell_price = $kurs->sell_price;
                        $defaultKurs->buy_price = $kurs->buy_price;
                        $defaultKurs->status = $kurs->status;
                        $defaultKurs->save();
                    }

                    $interestRateMaster = InterestRateMaster::all();

                    foreach($interestRateMaster as $interestRate){
                        $defaultKurs = new InterestRate();
                        $defaultKurs->board_id = $regist_board->id;
                        $defaultKurs->deposito_month = $interestRate->deposito_month;
                        $defaultKurs->interest_rate = $interestRate->interest_rate;
                        $defaultKurs->status = $interestRate->status;
                        $defaultKurs->save();
                    }

                    $sukuBungaGiroMaster = SukuBungaGiroMaster::all();

                    foreach($sukuBungaGiroMaster as $sukuBungaGiro){
                        $defaultKurs = new SukuBungaGiro();
                        $defaultKurs->board_id = $regist_board->id;
                        $defaultKurs->start = $sukuBungaGiro->start;
                        $defaultKurs->end = $sukuBungaGiro->end;
                        $defaultKurs->percent = $sukuBungaGiro->percent;
                        $defaultKurs->status = $sukuBungaGiro->status;
                        $defaultKurs->save();
                    }

                //     return response()->json(['status'=>true,'value'=>1, 
                //     'id'=>(string)$board->id,
                //     'device_id'=>(string)$board->device_id,
                //     'board_name'=>$board->board_name,
                //     'orientation'=>$board->orientation,
                //     'scroll_text'=>$board->scroll_text,
                //     // 'api_key'=>'ebf740cda1cd777305801e6784670ff6b88e919155fe10c74d5c1954b349c694'
                // ]);

                    return response()->json(['status'=>true,'value'=>1,'message'=>'Licences Code Valid!', 
                        'id'=>(string)$regist_device->id,
                        'device_name'=>$regist_device->device_name,
                        'licence_codes'=>$regist_device->licence_codes,
                        // 'api_key'=>'ebf740cda1cd777305801e6784670ff6b88e919155fe10c74d5c1954b349c694'
                    ]);
                    // return response()->json(['status'=>true,'value'=>0,'message'=>'Username not found']);
                } else {
                    $device->status = 1;
                    $device->last_login = now();
                    $device->save();
                    return response()->json(['status'=>true,'value'=>1,'message'=>'Licences Code Valid!', 
                        'id'=>(string)$device->id,
                        'device_name'=>$device->device_name,
                        'licence_codes'=>$device->licence_codes,
                        // 'api_key'=>'ebf740cda1cd777305801e6784670ff6b88e919155fe10c74d5c1954b349c694'
                    ]);
                }
            } else {
                \Session::flash('error', 'Username atau password salah');
                // return redirect('/login');
                return response()->json(['status'=>true,'value'=>2,'message'=>'Username atau password salah!']);
            }
    }

    // public function login(Request $request){
    //     $device = Device::where('licence_codes',$request->licence_codes)->first();
        
    //     if($device == null){
    //         return response()->json(['status'=>true,'value'=>0,'message'=>'Licence not valid']);
    //     }

    //     if($device->status == 1){
    //         return response()->json(['status'=>true,'value'=>0,'message'=>'Device has been used']);
    //     }
            
            
            
    //     // if(\Hash::check($request->password, $user->password)){
    //             // \Session::put('user', $user);
    //             // return redirect('/home');
    //             $device_login = Device::where('licence_codes',$request->licence_codes)->first();
    //             $device_login->status = 1;
    //             $device_login->last_login = now();
    //             $device_login->save();
    //             return response()->json(['status'=>true,'value'=>1,'message'=>'Licences Code Valid!', 
    //                 'id'=>(string)$device_login->id,
    //                 'device_name'=>$device_login->device_name,
    //                 'licence_codes'=>$device_login->licence_codes,
    //                 // 'api_key'=>'ebf740cda1cd777305801e6784670ff6b88e919155fe10c74d5c1954b349c694'
    //             ]);
    //         // } else {
    //             // \Session::flash('error', 'Username atau password salah');
    //             // return redirect('/login');
    //             // return response()->json(['status'=>true,'value'=>2,'message'=>'Username atau password salah!']);
    // }
}
