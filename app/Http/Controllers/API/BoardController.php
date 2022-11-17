<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Board;

class BoardController extends Controller
{
    public function activeBoard(Request $req){
        $board = Board::where('device_id', $req->device_id)->where('status', 1)->first();
        // $user_login = User::where('email',$request->email)->first();
                return response()->json(['status'=>true,'value'=>1, 
                    'id'=>(string)$board->id,
                    'device_id'=>(string)$board->device_id,
                    'board_name'=>$board->board_name,
                    'orientation'=>$board->orientation,
                    'scroll_text'=>$board->scroll_text,
                    // 'api_key'=>'ebf740cda1cd777305801e6784670ff6b88e919155fe10c74d5c1954b349c694'
                ]);
        // return response()->json($board);
    }
}
