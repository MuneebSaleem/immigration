<?php

namespace App\Http\Controllers;

use App\Mail\DemoMailTwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;

class OrderMailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $responseData = $request->response;

        $requestDataArray = json_decode($request->requestData, true);
        unset($requestDataArray['ssl_card_number']);
        unset($requestDataArray['ssl_cvv2cvc2']);
        $finalData = array_merge($responseData,$requestDataArray);
        //return view('emails.orderEmail');
        $email = $request->email;
        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.',
            'data' => $finalData
        ];

        Mail::to($requestDataArray['email'])->send(new DemoMailTwo($mailData));
    }
}
