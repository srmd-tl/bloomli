<?php

namespace App\Http;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;


class PayPal
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

    private function placeOrder($token, $amount)
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
                                        "value": "'. $amount .'"
                                    }
                                }
                            ],
                            "amount": {
                                "currency_code": "USD",
                                "value":"' . $amount .'",
                                "breakdown": {
                                    "item_total": {
                                        "currency_code": "USD",
                                        "value": "'. $amount .'"
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
            'PayPal-Request-Id: ' . (string) Str::uuid()
          ),
        );

        return $this->makeRequest("POST", $path, $headers);
    }

    public function initiate($amount)
    {  
        $response = $this->authorize();

        if(isset($response["access_token"]))
        {
            $response = $this->placeOrder($response["access_token"], $amount);
        }
        return $response;

        // return redirect($res['paypal_link']);
    }

 

    // public function cancel()
    // {
    //     dd('Your payment has been declend. The payment cancelation page goes here!');
    // }

 

    // public function success(Request $request)
    // {
    //     $paypalModule = new ExpressCheckout;
    //     $response = $paypalModule->getExpressCheckoutDetails($request->token);
         

    //     if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
    //         dd('Payment was successfull. The payment success page goes here!');
    //     }

    //     dd('Error occured!');
    // }
}



