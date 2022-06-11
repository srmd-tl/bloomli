<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;


class PayPalController extends Controller
{

    private function makeRequest($method, $path, $headers)
    {
         $curl = curl_init();
         $option =array(
           CURLOPT_URL            => $path,
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING       => "",
           CURLOPT_MAXREDIRS      => 10,
           CURLOPT_TIMEOUT        => 0,
           CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
           CURLOPT_FOLLOWLOCATION => true,
           CURLOPT_CUSTOMREQUEST  => $method,

         ) + $headers;

         curl_setopt_array($curl, $option);

         $response = curl_exec($curl);
         $err = curl_error($curl);

         return json_decode($response, true);
    }

    private function authorize()
    {
        $path = env('PAYPAL_API_BASE_URL') . '/v1/oauth2/token';
        $data = 'grant_type=client_credentials';

        $headers=array(
          CURLOPT_POSTFIELDS => $data,
          CURLOPT_HTTPHEADER => array(
            'Authorization: Basic ' . base64_encode(env('PAYPAL_API_CLIENT').':'.env('PAYPAL_API_SECRET')),
            'Content-Type: application/x-www-form-urlencoded'
          ),
        );

        return $this->makeRequest("POST", $path, $headers);
    }  

    private function placeOrder($token)
    {
        $path = env('PAYPAL_API_BASE_URL') . '/v2/checkout/orders';
        $data = '{
            "intent": "CAPTURE",
            "purchase_units": [
                {
                    "items": [
                        {
                            "name": "T-Shirt",
                            "description": "Green XL",
                            "quantity": "1",
                            "unit_amount": {
                                "currency_code": "USD",
                                "value": "100.00"
                            }
                        }
                    ],
                    "amount": {
                        "currency_code": "USD",
                        "value": "100.00",
                        "breakdown": {
                            "item_total": {
                                "currency_code": "USD",
                                "value": "100.00"
                            }
                        }
                    }
                }
            ],
            "application_context": {
                "return_url": "https://example.com/return",
                "cancel_url": "https://example.com/cancel"
            }
        }';

        $headers=array(
          CURLOPT_POSTFIELDS => $data,
          CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json',
            'Prefer: return=representation',
            'PayPal-Request-Id: 5d90f06b-48a0-4432-9af2-18d0636d2fd9'
          ),
        );

        return $this->makeRequest("POST", $path, $headers);
    }

    public function handle(Request $request)
    {  
        $response = $this->authorize();
        if(!isset($response["access_token"]))
        {
            dd("PayPal authorization failed ", $response);
        }

        $response = $this->placeOrder($response["access_token"]);
        dd($response);

        // return redirect($res['paypal_link']);
    }

 

    public function cancel()
    {
        dd('Your payment has been declend. The payment cancelation page goes here!');
    }

 

    public function success(Request $request)
    {
        $paypalModule = new ExpressCheckout;
        $response = $paypalModule->getExpressCheckoutDetails($request->token);
         

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            dd('Payment was successfull. The payment success page goes here!');
        }

        dd('Error occured!');
    }
}



