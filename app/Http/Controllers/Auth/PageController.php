<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Cart;
use App\Models\Bill;
use App\Models\BillDetail;
use Session;
class PageController extends Controller
{
    public function getIndex(){
        return view('pages.home');
    }
}
