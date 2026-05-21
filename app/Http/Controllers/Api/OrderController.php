<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $data = Order::get();

        return response()->json([
            'status' => true,
            'message' => 'succes',
            'data' => $data,
        ]);
    }
}
