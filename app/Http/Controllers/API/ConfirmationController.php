<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_order;

class ConfirmationController extends Controller
{
    public function confirmation($id)
    {
        $order = tb_order::find($id);
        $order -> order_status = "Confirmed";
        $order -> save();
        $messages = [
            'success' => 'order_status has change to confirmed',
        ];
        return [$messages, $order];
    }
}
