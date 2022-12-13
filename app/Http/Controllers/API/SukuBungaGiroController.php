<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SukuBungaGiro;

class SukuBungaGiroController extends Controller
{
    public function availableSukuGiro(Request $req){
        $sukubungagiro = SukuBungaGiro::where('board_id', $req->board_id)->where('status', 1)->get();

        return response()->json($sukubungagiro);
    }
}
