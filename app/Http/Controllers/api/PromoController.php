<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    function readAll(Request $request)
    {
        $limit = $request->input('limit', 5);

        $promos = Promo::orderBy('created_at', 'desc')
            ->limit($limit)
            ->with('shop')
            ->get();

        if (count($promos) > 0) {
            return response()->json([
                'data' => $promos,
            ], 200);
        } else {
            return response()->json([
                'message' => 'not found',
                'data' => $promos,
            ], 404);
        }
    }
}
