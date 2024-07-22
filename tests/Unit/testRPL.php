<?php

namespace Tests\Unit;

use Faker\Factory as Faker;
use Illuminate\Http\Request;
use Tests\TestCase;
use App\Http\Controllers\testrplController;

class testRPL extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test(): void
    {
        $controller = new testrplController();
        $response = $controller->test();
        $this->assertTrue(true,$response);
    }

    public function testberhasil(){
        $faker = Faker::create();
        $requestData = [
            'name' => $faker->name,
            'telephone' => '081247278448',
            'email'=> $faker->email
        ];
        $controller = new testrplController();
        $request=new Request($requestData);
        $response = $controller->rpl($request);
        $this->assertEquals(400,$response->getStatusCode());
    }
    public function testgagal(){
        $faker = Faker::create();
        $requestData = [
            'name' => 'ud',
            'telephone' => 4533,
            'email'=> $faker->email
        ];
        $controller = new testrplController();
        $request=new Request($requestData);
        $response = $controller->rpl($request);
        $this->assertEquals(422,$response->getStatusCode());
    }

}

