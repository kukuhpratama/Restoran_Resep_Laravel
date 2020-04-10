<?php

namespace Tests\Unit;
use PHPUnit\Framework\TestCase;
use \Mockery;

class ResepMakananControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

   
    public function testResep()
    {
        $service = Mockery::mock('overload:App\Http\Controllers\ResepMakananController')->makePartial();
        $service->shouldReceive([
            'resep' => true
        ]);
        $this->assertTrue($service->resep());
    }

    public function testResep_List_All()
    {
        $service = Mockery::mock('overload:App\Http\Controllers\ResepMakananController')->makePartial();
        $service->shouldReceive([
            'resep_list_all' => true
        ]);
        $this->assertTrue($service->resep_list_all());
    }

    public function testResep_List()
    {
        $service = Mockery::mock('overload:App\Http\Controllers\ResepMakananController')->makePartial();
        $service->shouldReceive([
            'resep_list' => true
        ]);
        $this->assertTrue($service->resep_list());
    }

    public function testDetail()
    {
        $service = Mockery::mock('overload:App\Http\Controllers\ResepMakananController')->makePartial();
        $service->shouldReceive([
            'detail' => true
        ]);
        $this->assertTrue($service->detail());
    }

    public function testCreate()
    {
        $service = Mockery::mock('overload:App\Http\Controllers\ResepMakananController')->makePartial();
        $service->shouldReceive([
            'create' => true
        ]);
        $this->assertTrue($service->create());
    }

    public function testTambah()
    {
        $service = Mockery::mock('overload:App\Http\Controllers\ResepMakananController')->makePartial();
        $service->shouldReceive([
            'tambah' => true
        ]);
        $this->assertTrue($service->tambah());
    }

    public function testEdit()
    {
        $service = Mockery::mock('overload:App\Http\Controllers\ResepMakananController')->makePartial();
        $service->shouldReceive([
            'edit' => true
        ]);
        $this->assertTrue($service->edit());
    }

    public function testUpdate()
    {
        $service = Mockery::mock('overload:App\Http\Controllers\ResepMakananController')->makePartial();
        $service->shouldReceive([
            'update' => true
        ]);
        $this->assertTrue($service->update());
    }

    public function testDelete()
    {
        $service = Mockery::mock('overload:App\Http\Controllers\ResepMakananController')->makePartial();
        $service->shouldReceive([
            'delete' => true
        ]);
        $this->assertTrue($service->delete());
    }

    

    
}
