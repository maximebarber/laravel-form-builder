<?php

namespace App\Http\Controllers;

use App\Commercant;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Ship the given order.
     *
     * @param  Request  $request
     * @param  int  $orderId
     * @return Response
     */
    public function ship(Request $request, $commercantId)
    {
        $commercant = Commercant::findOrFail($commercantId);

        // Ship order...

        Mail::to('maximebarber@gmail.com')->send(new OrderShipped($commercantId));
    }
}