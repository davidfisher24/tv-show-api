<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Redirect;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SearchController extends Controller
{

	/**
     * Calls the tvMaze api to obtain a list of results and passes them to the results view.
     *
     * @param  Request  $request {Get request with search term}
     * @return View results page with $shows passed as an array or the welcome page with an error message
    */

    public function searchTvShows(Request $request)
    {

    	if (!$request->search) return view('welcome')->with(array('error'=>"Please enter a valid search term"));

    	$client = new Client();
		$res = $client->get('http://api.tvmaze.com/search/shows?q='.$request->search);
		$results = json_decode($res->getBody());
		$shows = array();

		foreach ($results as $result) {
			if ($this->checkExactMatchIncluded($request->search,$result->show->name)) {
				array_push($shows,array(
					"name" => $result->show->name,
					"score" => $result->score,
				));
			}
		}

        return view('results', compact('shows'));
    }

    /**
     * Checks if the exact search term is found in a result and no typos are included
     *
     * @param  String  $searchText - The search term entered
     * @param  String  $resultText - The result text to test against
     * @return Boolean - True or false if exact search term is found
    */

    private function checkExactMatchIncluded($searchText,$resultText){
    	if (stripos($resultText, $searchText) === false) return false;
    	return true;
    }
}
