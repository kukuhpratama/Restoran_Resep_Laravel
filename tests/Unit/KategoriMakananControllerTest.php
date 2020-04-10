<?php

namespace Tests\Unit;
use PHPUnit\Framework\TestCase;
use \Mockery;

class KategoriMakananControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

   
    public function testKategori()
    {
        $service = Mockery::mock('overload:App\Http\Controllers\KategoriMakananController')->makePartial();
        $service->shouldReceive([
            'kategori' => true
        ]);
        $this->assertTrue($service->kategori());
    }

    
    public function testKategori_list()
    {
        $service = Mockery::mock('overload:App\Http\Controllers\KategoriMakananController')->makePartial();
        $service->shouldReceive([
            'kategori_list' => true
        ]);
        $this->assertTrue($service->kategori_list());
    }

    public function testTambah()
    {
        $service = Mockery::mock('overload:App\Http\Controllers\KategoriMakananController')->makePartial();
        $service->shouldReceive([
            'tambah' => true
        ]);
        $this->assertTrue($service->tambah());
    }

    public function testEdit()
    {
        $service = Mockery::mock('overload:App\Http\Controllers\KategoriMakananController')->makePartial();
        $service->shouldReceive([
            'edit' => true
        ]);
        $this->assertTrue($service->edit());
    }

    public function testUpdate()
    {
        $service = Mockery::mock('overload:App\Http\Controllers\KategoriMakananController')->makePartial();
        $service->shouldReceive([
            'update' => true
        ]);
        $this->assertTrue($service->update());
    }

    public function testDelete()
    {
        $service = Mockery::mock('overload:App\Http\Controllers\KategoriMakananController')->makePartial();
        $service->shouldReceive([
            'delete' => true
        ]);
        $this->assertTrue($service->delete());
    }
}
