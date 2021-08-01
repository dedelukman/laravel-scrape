<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;
use Nette\Utils\Arrays;

class ScraperController extends Controller
{
    private $result = array();

    public function Scraper (){
        
        $client = new Client();
        
        $url ='https://www.worldometers.info/coronavirus/';

        $page = $client->request('GET', $url);

        echo "<pre>";
        print_r($page);


        return view('scraper');
    }
}
