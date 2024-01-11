<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Seeder;

class CreatePenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'kepribadian' => 'Influenza',
                'kode' => 'P001',
                'deskripsi' => 'Secara langsung apabila cipratan air dari mulut (droplet) mengenai orang lain—saat bersin, batuk, atau berbicara. Penularan secara tidak langsung terjadi apabila Anda menyentuh permukaan atau benda yang telah terkontaminasi virus flu, lalu tangan Anda menyentuh mulut dan hidung sehingga virus masuk ke dalam tubuh.',
                'pendekatan' => "Kesehatan Masyarakat dan Edukasi Individu",
            ],
            [
                'kepribadian' => 'Demam berdarah dengue(DBD)',
                'kode' => 'P002',
                'deskripsi' => 'Virus dengue masuk ke tubuh manusia melalui gigitan nyamuk Aedes aegypti. Jumlah nyamuk Aedes aegypti biasanya meningkat pada awal musim hujan.',
                "pendekatan" => "Pengendalian Nyamuk dan Pendidikan Masyarakat"
            ],
            [
                'kepribadian' => 'Hepatitis',
                'kode' => 'P003',
                "pendekatan" => "Kebersihan dan Edukasi Kesehatan",
                'deskripsi' => 'Melalui makanan atau minuman yang tidak bersih, misalnya es batu yang proses pembuatannya terkontaminasi virus hepatitis. Penularan virus hepatitis B dan hepatitis C melalui darah dan cairan tubuh yang terinfeksi; seperti transfusi darah, hubungan seks, pembuatan tato dan tindik, serta injeksi.'
                
            ],
            [
                'kepribadian' => 'Malaria',
                'kode' => 'P004',
                "pendekatan" => " Pengendalian Nyamuk dan Edukasi Masyarakat",
                'deskripsi' => 'Parasit plasmodium dibawa dan disebarkan oleh nyamuk Anopheles yang kemudian menggigit manusia.'
            ],
            [
                'kepribadian' => 'Campak',
                'kode' => 'P005',
                "pendekatan" => "sembarang pendekatan apa",
                'deskripsi' => 'Virus deskripsi campak menular melalui percikan air liur penderita saat batuk atau bersin. Selain itu, bisa karena Anda menyentuh benda yang telah terpercik air liur penderita'
            ],
            [
                'kepribadian' => 'Tifus',
                'kode' => 'P006',
                "pendekatan" => "lani pro ",
                'deskripsi' => 'Virus deskripsi campak menular melalui percikan air liur penderita saat batuk atau bersin. Selain itu, bisa karena Anda menyentuh benda yang telah terpercik air liur penderita'
            ],
            [
                'kepribadian' => 'Cacingan',
                'kode' => 'P007',
                "pendekatan" => "lani ganteng",
                'deskripsi' => 'Telur cacing dapat masuk melalui kuku dan tangan yang tidak bersih yang kemudian menyentuh mulut atau makanan. Selain itu, cacing juga bisa masuk lewat makanan yang tidak dibersihkan dengan baik sebelum dimasak serta penggunaan barang yang sudah terkontaminasi cacing (handuk, pakaian, atau sprei).'
            ]

        ];

        Penyakit::insert($data);
    }
}
