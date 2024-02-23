<?php
use App\Models\Country;
use Illuminate\Support\Facades\Cache;
    $country = Cache::remember('countries', now()->addHours(24), function () {
    return Country::select('id', 'countryCode', 'countryName', 'telephonePrefix')->get();
});
?>

@include('home_custom')
