<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kota;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prov = [
            "Jawa Timur",
            "Jawa Timur",
            "Jawa Timur",
            "Jawa Timur",
            "Jawa Timur",
            "Jawa Timur",
            "Jawa Timur",
            "Jawa Timur",
            "Jawa Timur",
            "Jawa Timur",
            "Jawa Timur",
            "Jawa Timur",
            "Jawa Timur",
            "Jawa Timur",
            "Jawa Timur",
            "Jawa Timur",
            "Jawa Timur",
            "Jawa Timur",
            "Jawa Timur",
            "Jawa Timur",
            "Jawa Timur",
            "Jawa Tengah",
            "Jawa Tengah",
            "Jawa Tengah",
            "Jawa Tengah",
            "Jawa Tengah",
            "Jawa Tengah",
            "Jawa Tengah",
            "Jawa Tengah",
            "DIY"
        ];


        $kota = [
            "Surabaya",
            "Krian",
            "Mojokerto",
            "Mojoagung",
            "Jombang",
            "Perak",
            "Kertosono",
            "Baron",
            "Nganjuk",
            "Bagor",
            "Saradan",
            "Caruban",
            "Balerejo",
            "Madiun",
            "Maospati",
            "Glodok",
            "Geneng",
            "Ngawi",
            "Sidowayah",
            "Gendingan",
            "Mantingan",
            "Sragen",
            "Masaran",
            "Solo",
            "Kartosuro",
            "Delanggu",
            "Karangwuni",
            "Klaten",
            "Prambanan",
            "Yogyakarta"
        ];
        
        $gabung =[];

        for($i=0; $i<count($prov); $i++){
            $gabung[$i]["prov"] = $prov[$i];
            $gabung[$i]["kota"] = $kota[$i];

            Kota::create([
                'nama' => $kota[$i],
                'provinsi' => $prov[$i]
            ]);

        }

    }
}
