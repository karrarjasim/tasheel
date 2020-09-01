<?php

namespace Tasheel\Merchant\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MerchantController extends Controller
{
   
    
    public function index(){
        return view('tasheel::home');
    }
}
