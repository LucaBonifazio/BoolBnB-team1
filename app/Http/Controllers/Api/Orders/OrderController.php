<?php

namespace App\Http\Controllers\Api\Orders;

use App\Sponsorship;
use Braintree\Gateway;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Orders\OrdersRequest;

class OrderController extends Controller
{
    public function generate(Request $request,Gateway $gateway) {


        $token = $gateway->clientToken()->generate();
        $data = [
            'success' => true,
            'token' => $token,
        ];

        return response()->json($data,200);
    }

    public function makePayment(Request $request,Gateway $gateway) {


        $sponsorship = Sponsorship::find($request->sponsorship);

        $result = $gateway->transaction()->sale([
            'amount' => $sponsorship->price,
            'paymentMethodNonce' => $request->token,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if($result->success){
            $data = [
                'success' => true,
                'message' => "Transaction successfully"
            ];
            return response()->json($data,200);
        }else{
            $data = [
                'success' => false,
                'message' => "Transaction declined"
            ];
            return response()->json($data,401);
        }
    }
}
