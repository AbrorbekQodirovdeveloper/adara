<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\AppUser;
use App\Models\Main;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function mainPage(){
        $settings = Main::get()->first();
        return view('admin.index', compact('settings'));
    }
}
