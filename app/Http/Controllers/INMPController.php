<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\INMP\inmp_kanan;
use App\Models\INMP\inmp_kiri;

class INMPController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Ambil data semua ADXL dengan metode GET (Success 200 Code)
    public function index()
    {
        return response()->json([
            'code' => 200,
            'message' => 'success',
            'data' => [
                'inmp_kanan' => inmp_kanan::orderBy('event_id', 'desc')->get(),
                'inmp_kiri' => inmp_kiri::orderBy('event_id', 'desc')->get()
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  Function Input semua data ke database
    public function store(Request $request)
    {
        date_default_timezone_get('Asia/Jakarta');
        $now = Carbon::now()->toDateTimeString();
        $sensorId = $request->sensor_id;

        switch ($sensorId) {
            case 601:
                $table = 'inmp_kanan';
                break;
            case 602:
                $table = 'inmp_kiri';
                break;

                // If data not Found (400 Server Error)
            default:
                $table = null;
                return response()->json([
                    'code' => 404,
                    'message' => 'sensor not found',
                    'data' => null
                ], 404);
        }

        // Masukan semua data ke variable
        $params = [
            'value' => $request->value,
            'inputed_at' => $now,
            'sensor_id' => $request->sensor_id
        ];

        // Masukin Semua data ke database
        try {
            DB::table($table)->insert($params);

            //  If berhasil (200 Client success)
            return response()->json([
                'code' => 200,
                'message' => 'success',
                'data' => $params
            ]);

            // If gagal (400 Server Error)
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 404,
                'message' => 'failed',
                'data' => null
            ]);
        }
    }

    // Function Show data ke web
    public function show($id)
    {
        switch ($id) {
            case 601:
                $result = inmp_kanan::orderBy('event_id', 'desc')->paginate(5);
                break;
            case 602:
                $result = inmp_kiri::orderBy('event_id', 'desc')->paginate(5);
                break;

            default:
                return response()->json([
                    'code' => 404,
                    'message' => 'sensor not found',
                    'data' => null
                ]);
        }

        return response()->json([
            'code' => 200,
            'message' => 'success',
            'data' => $result
        ]);
    }
}
