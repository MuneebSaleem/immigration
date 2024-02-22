<?php
$country = Cache::remember('countries', now()->addHours(24), function () {
return Country::select('id', 'countryCode', 'countryName', 'telephonePrefix')->get();
});
?>

@include('home_custom')
