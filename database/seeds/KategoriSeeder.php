<?php

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategoris = ["fajar", "pagi", "siang", "sore", "malam"];
        foreach($kategoris as $kategori){
            DB::table('kategori')->insert([
                'nama_kategori' => $kategori
            ]);
        }
    }
}
