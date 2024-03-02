<?php

namespace App\Http\Controllers;


use App\Models\Country;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Hash;
use Illuminate\Support\Arr;

class TestController extends Controller
{
    public function __construct()
    {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $country = Cache::remember('countries', now()->addHours(24), function () {
            return Country::select('id', 'countryCode', 'countryName', 'telephonePrefix')->get();
        });

        return view('home_custom',compact('country'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    public function getcountry(Request $request) {
        $country = Country::select('id', 'countryCode', 'countryName', 'is_active','isoAlpha3')
            ->where('countryCode',$request->selectedCountry)
            ->get();
        return response()->json(['country' => $country]);
    }

    public function send_email(Request $request) {
        $requestData = $request->all();
        $email = $requestData['email'];
        app('App\Http\Controllers\MailController')->index($email);
    }
    public function send_data(Request $request) {
        $requestData = $request->all();

        $email = $requestData['email'];
        $cacheKey = 'user_data_' . $email;
        Cache::put($cacheKey, $requestData);

        $data = [
            "firstName" => $requestData['firstName'],
            "lastName" => $requestData['lastName'],
            "mobile" => $requestData['countryCode'].$requestData['phoneNumber'],
            "email" => $requestData['email']
        ];
        $jsonData = json_encode($data);

        $client = new Client();

        $response = $client->post(env('SALESMATE_API_URL'), [
            'headers' => [
                'Content-Type' => 'application/json',
                'accessToken' => env('SALESMATE_ACCESS_TOKEN'),
                'x-linkname' => env('SALESMATE_X_LINKNAME')
            ],
            'body' => $jsonData // Pass JSON data in the body of the request
        ]);

        $responseData = $response->getBody()->getContents();

    }
}
