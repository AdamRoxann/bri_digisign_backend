<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\InterestRate;

class InterestRateController extends Controller
{
    public function availableInterest(Request $req){
        $interest = InterestRate::where('board_id', $req->board_id)->where('status', 1)->get();

        return response()->json($interest);
    }
}
