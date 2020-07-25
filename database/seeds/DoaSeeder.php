<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doas')->insert([
            [
            'judul' => 'Doa Sebelum Makan',
            'arab' => 'اَللَّهُمَّ بَارِكْ لَنَا فِيْمَا رَزَقْتَنَا وَقِنَا عَذَابَ النَّارِ',
            'latin' => 'Alaahumma barik lanaa fiimaa razaqtanaa waqinaa ‘adzaa bannar',
            'arti' => 'Maka, seharusnya manusia memerhatikan makanannya.” (QS. Abasa ayat 24)',
            'penjelasan' => 'penjelasan',
            'id_kategori' => '1'
            ],
            [
            'judul' => 'doa sesudah makan',
            'arab' => 'arab doa sesudah makan',
            'latin' => 'latin doa sesudah makan',
            'arti' => 'arti doa sesudah makan',
            'penjelasan' => 'penjelasan doa sesudah makan',
            'id_kategori' => '2'
            ]

        ]);
    }
}
