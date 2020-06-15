<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;
use App\Events\ProductPurchased;
//use Illuminate\Support\Facades\Notification;

class PaymentsController extends Controller
{
    public function create(){
        return view('payments.create');
    }

    public function store(){
        ProductPurchased::dispatch('toy');
        //request()->user()->notify(new PaymentReceived(900));
        //Notification::send(request()->user(), new PaymentReceived());
    }
}
