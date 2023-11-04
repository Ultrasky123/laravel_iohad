<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\LOADCELL\loadcell_1;
use App\Models\LOADCELL\loadcell_2;
use App\Models\LOADCELL\loadcell_3;
use App\Models\LOADCELL\loadcell_4;
use App\Models\LOADCELL\loadcell_5;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class LOADCELLController extends Controller
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
                'loadcell_1' => loadcell_1::orderBy('event_id', 'desc')->get(),
                'loadcell_2' => loadcell_2::orderBy('event_id', 'desc')->get(),
                'loadcell_3' => loadcell_3::orderBy('event_id', 'desc')->get(),
                'loadcell_4' => loadcell_4::orderBy('event_id', 'desc')->get(),
                'loadcell_5' => loadcell_5::orderBy('event_id', 'desc')->get(),
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
            case 801:
                $table = 'loadcell_1';
                break;
            case 802:
                $table = 'loadcell_2';
                break;
            case 803:
                $table = 'loadcell_3';
                break;
            case 804:
                $table = 'loadcell_4';
                break;
            case 805:
                $table = 'loadcell_5';
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
            case 801:
                $result = loadcell_1::orderBy('event_id', 'desc')->paginate(5);
                break;
            case 802:
                $result = loadcell_2::orderBy('event_id', 'desc')->paginate(5);
                break;
            case 803:
                $result = loadcell_3::orderBy('event_id', 'desc')->paginate(5);
                break;
            case 804:
                $result = loadcell_4::orderBy('event_id', 'desc')->paginate(5);
                break;
            case 805:
                $result = loadcell_5::orderBy('event_id', 'desc')->paginate(5);
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
