<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items') ->insert(
        [
            'nama_barang'=>'Kamera Cannon 90D',
            'quantity'   =>'2',
            'status'     =>'dalam penyimpanan'
        ]);

        DB::table('pengajuan')->insert(
            [
                
            ]
        );
    }
}
