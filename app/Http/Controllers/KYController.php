<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\KY\telinga_kanan;
use App\Models\KY\telinga_kiri;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class KYController extends Controller
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
                'telinga_kanan' => telinga_kanan::orderBy('event_id', 'desc')->get(),
                'telinga_kiri' => telinga_kiri::orderBy('event_id', 'desc')->get(),
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
            case 603:
                $table = 'ky_kanan';
                break;
            case 604:
                $table = 'ky_kiri';
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
            case 603:
                $result = telinga_kanan::orderBy('event_id', 'desc')->paginate(5);
                break;
            case 604:
                $result = telinga_kiri::orderBy('event_id', 'desc')->paginate(5);
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
