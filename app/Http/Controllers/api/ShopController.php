<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    function readAll(Request $request)
    {
        $limit = $request->input('limit', 5);
        $city = $request->input('city', '');

        $shops = Shop::query()
            ->where('city', 'like', '%' . $city . '%')
            ->paginate($limit);

        return response()->json([
            'data' => $shops,
        ], 200);
    }
}
