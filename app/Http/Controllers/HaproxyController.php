<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Haproxy;

class HaproxyController extends Controller
{
    /**
     * Demo DB use.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function test()
    {
        $data = Haproxy::all();

        return response()->json(["data" => $data]);
    }
}
