<?php

namespace Tests\Feature;

use Tests\TestCase;
use Faker\Factory as Faker;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ApiSearchTest extends TestCase
{

	private $testSearch;
	private $response;
	private $data;

	public function __construct(){
        parent::setUp();
    }

    /**
     * Set up test
     * Generates a fake search term 
     * Calls the api route and stores the view response and the array data recieved.
     *
     * @return void
     */


    protected function setUp()
    {
    	$faker = Faker::create();
    	$this->testSearch =  $faker->word;

    	$this->response = ($this->call('GET', '/search', $parameters = ["search" => $this->testSearch]));
    	$this->data = $this->response->getOriginalContent()->getData()["shows"];
    	
    }

    /**
     * Tests that the call has been made successfully
     *
     * @return void
     */

    public function testSuccessfulApiCall(){
    	$this->response->assertSuccessful();
    }

    /**
     * Tests that all elements of the api response contain the search term
     *
     * @return void
     */

    public function testReturnDataIsCorrect(){

    	foreach($this->data as $record) {
    		$this->assertContains(strtolower($this->testSearch),strtolower($record["name"]));
    	}
    }

    /**
     * Tests that all elements of the array response are vizualized, or an error message is returned if nothing is found.
     *
     * @return void
     */

    public function testCorrectVisualization(){
    	if (count($this->data) > 0) {
    		foreach($this->data as $record) {
	    		$this->response->assertSeeText($record["name"]);
	    	}
    	} else {
    		$this->response->assertSeeText("No results have been found");
    	}
    	
    }
}
