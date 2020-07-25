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
        $juduls = ['Doa makan', 'doa tidur', 'doa masuk wc', 'doa keluar rumah', 'doa cermin', 'doa belajar'];
        foreach($juduls as $judul){
            DB::table('doas')->insert([
                'judul' => $judul,
                'arab' => 'اَللَّهُمَّ بَارِكْ لَنَا فِيْمَا رَزَقْتَنَا وَقِنَا عَذَابَ النَّارِ',
                'latin' => 'Alaahumma barik lanaa fiimaa razaqtanaa waqinaa ‘adzaa bannar',
                'arti' => 'Maka, seharusnya manusia memerhatikan makanannya.” (QS. Abasa ayat 24)',
                'penjelasan' => 'penjelasan',
                'id_kategori' => rand(3,5)
            ]);
        }
    
    }
}
