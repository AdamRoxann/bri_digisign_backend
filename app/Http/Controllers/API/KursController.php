<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kurs;

class KursController extends Controller
{
    public function availableKurs(Request $req){
        $kurs = Kurs::where('board_id', $req->board_id)->where('status', 1)->get();

        return response()->json($kurs);
    }
}
