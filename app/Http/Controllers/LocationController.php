<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LocationController extends Controller
{
    public function getLocationData(Request $request)
    {
        $lat = $request->input('lat');
        $lng = $request->input('lng');
        $apiKey = ENV('GOOGLE_MAPS_API_KEY');

        $geocodingUrl = "https://maps.googleapis.com/maps/api/geocode/json?latlng={$lat},{$lng}&key={$apiKey}";

        $response = Http::get($geocodingUrl);

        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([
                'error' => $response->status(),
                'message' => 'Error fetching location data'
            ]);
        }
    }
}
