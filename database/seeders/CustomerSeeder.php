<?php

namespace Database\Seeders;

use App\Models\Customers;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = [
            [
            'id' => 'PELANGAN-1',
            'nama' => "ANDI",
            'domisili' => "JAK-UT",
            'jenis_kelamin' => "PRIA"
        ],
        [
            'id' => 'PELANGAN-2',
            'nama' => "BUDI",
            'domisili' => "JAK-BAR",
            'jenis_kelamin' => "PRIA"
        ],[
            'id' => 'PELANGAN-3',
            'nama' => "JOHAN",
            'domisili' => "JAK-SEL",
            'jenis_kelamin' => "PRIA"
        ],[
            'id' => 'PELANGAN-4',
            'nama' => "SINTHA",
            'domisili' => "JAK-TIM",
            'jenis_kelamin' => "WANITA"
        ],[
            'id' => 'PELANGAN-5',
            'nama' => "ANTO",
            'domisili' => "JAK-UT",
            'jenis_kelamin' => "PRIA"
        ],[
            'id' => 'PELANGAN-6',
            'nama' => "BUJANG",
            'domisili' => "JAK-BAR",
            'jenis_kelamin' => "PRIA"
        ],[
            'id' => 'PELANGAN-7',
            'nama' => "JOWAN",
            'domisili' => "JAK-SEL",
            'jenis_kelamin' => "PRIA"
        ],[
            'id' => 'PELANGAN-8',
            'nama' => "SINTIA",
            'domisili' => "JAK-TIM",
            'jenis_kelamin' => "WANITA"
        ],[
            'id' => 'PELANGAN-9',
            'nama' => "BUTET",
            'domisili' => "JAK-BAR",
            'jenis_kelamin' => "WANITA"
        ],[
            'id' => 'PELANGAN-10',
            'nama' => "JONNY",
            'domisili' => "JAK-SEL",
            'jenis_kelamin' => "WANITA"
        ],
    ];
    Customers::insert($customer);
    }
}
