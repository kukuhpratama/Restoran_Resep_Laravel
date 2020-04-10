<?php

namespace Tests\Unit;
use PHPUnit\Framework\TestCase;
use \Mockery;

class APIControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

   
    public function testKategori_list()
    {
        $service = Mockery::mock('overload:App\Http\Controllers\APIController')->makePartial();
        $service->shouldReceive([
            'kategori_list' => true
        ]);
        $this->assertTrue($service->kategori_list());
    }
    
}
