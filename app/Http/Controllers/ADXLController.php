<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\ADXL\kaki_kanan;
use App\Models\ADXL\kaki_kiri;
use App\Models\ADXL\tangan_kanan;
use App\Models\ADXL\tangan_kiri;
use Illuminate\Support\Carbon; //Untuk ngambil waktu
use Illuminate\Support\Facades\DB;

class ADXLController extends Controller
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
                'tangan_kanan' => tangan_kanan::orderBy('event_id', 'desc')->get(),
                'tangan_kiri' => tangan_kiri::orderBy('event_id', 'desc')->get(),
                'kaki_kanan' => kaki_kanan::orderBy('event_id', 'desc')->get(),
                'kaki_kiri' => kaki_kiri::orderBy('event_id', 'desc')->get()
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
            case 201:
                $table = 'adxl_tangan_kanan';
                break;
            case 202:
                $table = 'adxl_tangan_kiri';
                break;
            case 203:
                $table = 'adxl_kaki_kanan';
                break;
            case 204:
                $table = 'adxl_kaki_kiri';
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
            'x_axis' => $request->x_axis,
            'y_axis' => $request->y_axis,
            'z_axis' => $request->z_axis,
            'sensor_id' => $request->sensor_id,
            'inputed_at' => $now
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
            case 201:
                $result = tangan_kanan::orderBy('event_id', 'desc')->get();
                break;
            case 202:
                $result = tangan_kiri::orderBy('event_id', 'desc')->get();
                break;
            case 203:
                $result = kaki_kanan::orderBy('event_id', 'desc')->get();
                break;
            case 204:
                $result = kaki_kiri::orderBy('event_id', 'desc')->get();
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
