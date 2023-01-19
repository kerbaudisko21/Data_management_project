<?php

namespace Database\Seeders;

use App\Models\Items;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $items =[
            [
            'id' => 'BRG-1',
            'nama' => 'PEN',
            'kategori' => 'ATK',
            'harga' => '15000'
        ],
        [
            'id' => 'BRG-2',
            'nama' => 'PENSIL',
            'kategori' => 'ATK',
            'harga' => '10000'
        ],[
            'id' => 'BRG-3',
            'nama' => 'PAYUNG',
            'kategori' => 'RT',
            'harga' => '70000'
        ],[
            'id' => 'BRG-4',
            'nama' => 'PANCI',
            'kategori' => 'MASAK',
            'harga' => '110000'
        ],[
            'id' => 'BRG-5',
            'nama' => 'SAPU',
            'kategori' => 'RT',
            'harga' => '40000'
        ],[
            'id' => 'BRG-6',
            'nama' => 'KIPAS',
            'kategori' => 'ELEKTRONIK',
            'harga' => '200000'
        ],[
            'id' => 'BRG-7',
            'nama' => 'KUALI',
            'kategori' => 'MASAK',
            'harga' => '120000'
        ],[
            'id' => 'BRG-8',
            'nama' => 'SIKAT',
            'kategori' => 'RT',
            'harga' => '30000'
        ],[
            'id' => 'BRG-9',
            'nama' => 'GELAS',
            'kategori' => 'RT',
            'harga' => '25000'
        ],[
            'id' => 'BRG-10',
            'nama' => 'PIRING',
            'kategori' => 'RT',
            'harga' => '35000'
        ]
        ];

    Items::insert($items);
}
}
