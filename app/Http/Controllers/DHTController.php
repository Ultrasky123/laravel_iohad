<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DHTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $result = DB::table('dht11')->selectRaw('*')->orderBy('inputed_at', 'desc')->get();

        return response()->json([
            'code' => 200,
            'message' => 'success',
            'data' => $result,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = Carbon::now()->toDateTimeString();

        $params = [
            'temperature' => $request->temperature,
            'humidity' => $request->humidity,
            'inputed_at' => $now,
            'sensor_id' => 701,
        ];

        try {
            DB::table('dht11')->insert($params);

            return response()->json([
                'code' => 200,
                'message' => 'success',
                'data' => $params
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 400,
                'message' => 'failed',
                'data' => $th->errorInfo
            ], 400);
        }
    }
}
