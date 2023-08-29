<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MPU\mpu6050;
use App\Models\MPU\mpu6050_vibrate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MPUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'code' => 200,
            'message' => 'success',
            'data' => [
                'mpu6050' => mpu6050::orderBy('event_id', 'desc')->get(),
                'mpu6050_vibrate' => mpu6050_vibrate::orderBy('event_id', 'desc')->get(),
            ]
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

        $sensorId = $request->sensor_id;

        switch ($sensorId) {
            case 301:
                $params = [
                    'value' => $request->value,
                    'inputed_at' => $now,
                    'sensor_id' => 301,
                ];
                $table = 'mpu6050_vibrate';
                break;
            case 801:
                $params = [
                    'temperature' => $request->temperature,
                    'x_acceleration' => $request->x_acceleration,
                    'y_acceleration' => $request->y_acceleration,
                    'z_acceleration' => $request->z_acceleration,
                    'x_rotation' => $request->x_rotation,
                    'y_rotation' => $request->y_rotation,
                    'z_rotation' => $request->z_rotation,
                    'inputed_at' => $now,
                    'sensor_id' => 1002,
                ];
                $table = 'mpu6050';
                break;
            default:
                return response()->json([
                    'code' => 404,
                    'message' => 'sensor not found',
                    'data' => null
                ], 404);
                break;
        }

        try {
            DB::table($table)->insert($params);

            return response()->json([
                'code' => 200,
                'message' => 'success',
                'data' => $params
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 400,
                'message' => 'failed',
                'error' => $th->errorInfo
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        switch ($id) {
            case 1002:
                $result = DB::table('mpu6050')->selectRaw('*')->orderBy('inputed_at', 'desc')->get();
                break;
            case 301:
                $result = DB::table('mpu6050_vibrate')->selectRaw('*')->orderBy('inputed_at', 'desc')->get();
                break;
            default:
                return response()->json([
                    'code' => 404,
                    'message' => 'sensor not found',
                    'data' => null
                ], 404);
        }

        return response()
            ->json([
                'code' => 200,
                'message' => 'success',
                'data' => $result
            ]);
    }
}
