<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as Client;

class AppController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function birds()
    {
        // Create an HTTP client instance
        $client = new Client();
        // Send a GET request to the API endpoint
        $response = $client->request('GET', 'https://xeno-canto.org/api/2/recordings?query=cnt:guatemala');
        // Decode the JSON response
        $birdsData = json_decode($response->getBody()->getContents(), true)['recordings'];

        // Pass the retrieved data to the view
        return view('birds', ['birds' => $birdsData]);
        // return view('birds');
    }

}
