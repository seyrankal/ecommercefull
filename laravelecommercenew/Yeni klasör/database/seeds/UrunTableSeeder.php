<?php

use App\Models\Urun;
use App\Models\UrunDetay;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UrunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Urun::truncate();
        UrunDetay::truncate();
        for ($i = 0; $i < 30; $i++) {
            $urun_adi = $faker->sentence(2);
            $urun = Urun::create([
                'urun_adi' => $urun_adi,
                'slug' => str_slug($urun_adi),
                'aciklama' => $faker->sentence(20), //sentences(20 ) desek kelime uzunluğunda bir cumle
                //geri donusunde hata verbilir array oldugu icin sentences
                'fiyati' => $faker->randomFloat(3, 1, 20) //bir ile 20 arasında 3 basamaklı
                // sayılar olusturuyoruz
            ]);
            $detay = $urun->detay()->create([
                'goster_slider' => rand(0, 1), //dikkat etti isen urun id ile ilgi bir islem yapmadik cunku $urun->detay() iliski ,
                'goster_gunun_firsati' => rand(0, 1), // yaptigimiz fonksiyon ile create yaptigimiz icin urun id degerini, insert icerisine kendisi ekliyor.
                'goster_one_cikan' => rand(0, 1),
                'goster_cok_satan' => rand(0, 1),
                'goster_indirimli' => rand(0, 1),
            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
