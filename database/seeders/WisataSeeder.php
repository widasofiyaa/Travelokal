<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class WisataSeeder extends Seeder
{
    public function run()
    {
        DB::table('wisatas')->insert([
            'image' => 'img/explore-curugcibereum.jpg',
            'locate' => 'Cipanas, Cianjur',
            'title' => 'Curug Cibereum',
            'description' => 'Curug Cibereum adalah salah satu wisata alam yang berada pas dibawa kaki Gunung Gede Pangrango. Curug ini memiliki ketinggian 40 m berada di Kawasan Taman Nasional Gunung Gede Pangrango.',
            'type'=>'Wisata Alam',
            'location'=>'Jalan Cisarua Puncak KM. 10, Desa Cilember, Kec. Cisarua, Puncak, Cimacan, Kec. Cipanas, Kabupaten Cianjur, Jawa Barat 43253',
            'price'=>'20000',
            'duration' => 'Senin-Kamis (10.00-23.00 WIB), Jumat-Minggu (10.00-24.00 WIB)',
            'maps' => 'https://www.google.com/maps/place/Telaga+Biru/@-6.7497273,106.9902871,15z/data=!4m12!1m6!3m5!1s0x0:0xfd6629c338f0a833!2sBlue+Lake+Gardens+Cibodas!8m2!3d-6.7497273!4d106.9902871!3m4!1s0x2e69b489cc6f5cf9:0xff050415c0efc702!8m2!3d-6.7485153!4d106.9942597'
        ]);
        DB::table('wisatas')->insert([
            'image' => 'img/explore-gununggede.jpg',
            'locate' => 'Cianjur',
            'title' => 'Gunung Gede Pangrango',
            'description' => 'Gunung Gede merupakan salah satu gunung di Pulau Jawa yang bertipe stratovolcano. Gunung Gede memiliki ketinggian 2.958mdpl. Terdapat 6 pintu masuk menuju Gunung Gede Pangrango.',
            'type'=>'Wisata Alam',
            'location'=>'Cianjur, Jawa Barat, Indonesia',
            'price'=>'34000',
            'duration' => '09.00 - 14.00 WIB',
            'maps' => 'https://www.google.com/maps/place/Telaga+Biru/@-6.7497273,106.9902871,15z/data=!4m12!1m6!3m5!1s0x0:0xfd6629c338f0a833!2sBlue+Lake+Gardens+Cibodas!8m2!3d-6.7497273!4d106.9902871!3m4!1s0x2e69b489cc6f5cf9:0xff050415c0efc702!8m2!3d-6.7485153!4d106.9942597'
        ]);
        DB::table('wisatas')->insert([
            'image' => '/img/explore-gunungkasur.jpg',
            'locate' => 'Cianjur',
            'title' => 'Gunung Kasur',
            'description' => 'Gunung Kasur merupakan salah satu wisata yang memiliki pemandangan yang indah. Gunung memiliki ketinggian 1.080mdpl.',
            'type'=>'Wisata Alam',
            'location'=>'Cianjur, Jawa Barat, Indonesia',
            'price'=>'29000',
            'duration' => '09.00 - 13.00 WIB',
            'maps' => 'https://www.google.com/maps/place/Telaga+Biru/@-6.7497273,106.9902871,15z/data=!4m12!1m6!3m5!1s0x0:0xfd6629c338f0a833!2sBlue+Lake+Gardens+Cibodas!8m2!3d-6.7497273!4d106.9902871!3m4!1s0x2e69b489cc6f5cf9:0xff050415c0efc702!8m2!3d-6.7485153!4d106.9942597'
        ]);

        DB::table('wisatas')->insert([
            'image' => 'img/explore-telaga-biru.jpg',
            'locate' => 'Cipanas, Cianjur',
            'title' => 'Telaga Biru',
            'description' => 'Pastikan kamu untuk membawa kamera agar bisa berswafoto di spot-spot keren Telaga Biru dengan warna air yang kebiru-biruan. Sangat disayangkan jika orang Cianjur dan daerah lainnya 
                            tidak berkunjung ke Telaga Biru.',
            'type'=>'Wisata Alam',
            'location'=>'Sindangjaya, Cipanas, Cianjur Regency, West Java 43253',
            'price'=>'5000',
            'duration' => '07.30 - 17.00 WIB',
            'maps' => 'https://www.google.com/maps/place/Telaga+Biru/@-6.7497273,106.9902871,15z/data=!4m12!1m6!3m5!1s0x0:0xfd6629c338f0a833!2sBlue+Lake+Gardens+Cibodas!8m2!3d-6.7497273!4d106.9902871!3m4!1s0x2e69b489cc6f5cf9:0xff050415c0efc702!8m2!3d-6.7485153!4d106.9942597'
        ]);
        
        DB::table('wisatas')->insert([
            'image' => 'img/tamanbunganusantara1.jpg',
            'locate' => 'Sukaresmi, Cianjur',
            'title' => 'Taman Bunga Nusantara',
            'description' => 'Taman Bunga Nusantara adalah taman pajangan bunga pertama di Indonesia. 
                                Taman ini dilengkapi dengan koleksi tanaman berbunga yang terkenal dan unik dari seluruh dunia.',
            'type'=>'Wisata Alam',
            'location'=>'Jl. Mariwati No.KM. 7, Kawungluwuk, Kec. Sukaresmi, Kabupaten Cianjur, Jawa Barat 43254',
            'price'=>'40000',
            'duration' => '07.00 - 17.00 WIB',
            'maps' => 'https://www.google.com/maps/place/Telaga+Biru/@-6.7497273,106.9902871,15z/data=!4m12!1m6!3m5!1s0x0:0xfd6629c338f0a833!2sBlue+Lake+Gardens+Cibodas!8m2!3d-6.7497273!4d106.9902871!3m4!1s0x2e69b489cc6f5cf9:0xff050415c0efc702!8m2!3d-6.7485153!4d106.9942597'
        ]);
    }
}
