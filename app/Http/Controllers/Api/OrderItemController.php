<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index()
    {
        $data = OrderItem::get();

        return response()->json([
            'status' => true,
            'message' => 'berhasil',
            'data' => $data,
        ]);
    }
}
