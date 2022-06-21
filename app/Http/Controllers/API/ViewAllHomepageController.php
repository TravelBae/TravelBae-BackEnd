<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tour_place;
use App\Models\event;
use App\Models\tb_order;
use App\Models\tb_customer;

class ViewAllHomepageController extends Controller
{
    public function homepage()
    {
        $total_sales = tb_order::all() -> sum('total_bayar');
        $total_user = tb_customer::all() -> count();
        $total_tour_places = tour_place::where('id', "!=", 999) -> count();
        $total_event = event::where('id', "!=", 999) -> count();
        $unconfirmed_order = tb_order::where('order_status', 'unconfirmed') -> count();

        return [
            'total_sales' => $total_sales,
            'total_user' => $total_user,
            'total_tour_places' => $total_tour_places,
            'total_event' => $total_event,
            'unconfirmed_order' => $unconfirmed_order
        ];
    }
}
