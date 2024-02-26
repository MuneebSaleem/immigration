<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Hash;
use Illuminate\Support\Arr;

class StepsController extends Controller
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
        $countries = Country::select('id', 'countryCode', 'countryName', 'is_active','isoAlpha3')->get();

        return view('step1-form', compact("countries"));
        // return view('step1');
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
//        $this->validate($request, [
//            'name' => 'required',
//            'email' => 'required|email|unique:users,email',
//            'password' => 'required|same:confirm-password',
//            'roles' => 'required'
//        ]);

        $input = $request->all();
        $input['business_id'] = $this->user;
        $branch = Branch::create($input);

        return redirect()->route('branch.index')
            ->with('success','Branch created successfully');
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


    public function send_payment(Request $request) {
        $requestData = $request->all();

        $converge = app(\Treestoneit\LaravelConvergeApi\Converge::class);

        $createSale = $converge->authOnly([
            'ssl_card_number' => $requestData['ssl_card_number'],
            'ssl_exp_date' => $requestData['month'].$requestData['year'],
            'ssl_cvv2cvc2' => $requestData['ssl_cvv2cvc2'],
            'ssl_amount' => '9.95',
            'ssl_add_token' => 'Y',
            'ssl_avs_address' => $requestData['ssl_avs_address'],
            'ssl_city' => $requestData['ssl_city'],
            'ssl_description' => 'test',
            'ssl_first_name' => $requestData['ssl_first_name'],
            'ssl_last_name' => $requestData['ssl_last_name'],
        ]);

        return response()->json($createSale);


    }

}
