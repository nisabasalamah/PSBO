<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 'G64180098',
                'name' => 'Riyad Firdaus',
                'username' => 'Riyad',
                'email' => 'riyad@gmail.com',
                'password' => bcrypt('password'),
                'isAdmin'=> '0'
            ],
            [
                'id' => 'B64180098',
                'name' => 'Khairunnisa',
                'username' => 'Khairunnisa',
                'email' => 'khairunnisa@gmail.com',
                'password' => bcrypt('password'),
                'isAdmin'=> '0'
            ],
            [
                'id' => 'G64180078',
                'name' => 'Muhammad Habibullah',
                'username' => 'Habibullah',
                'email' => 'habibullah@gmail.com',
                'password' => bcrypt('password'),
                'isAdmin'=> '0'
            ],
            [
                'id' => '120643055954806776',
                'name' => 'Bima Hadian Hermanto',
                'username' => 'Bima',
                'email' => 'bima@gmail.com',
                'password' => bcrypt('password'),
                'isAdmin'=> '1'
            ],
            [
                'id' => '170692190898239212',
                'name' => 'Irwan Dwi Kurniawan',
                'username' => 'Irwan',
                'email' => 'irwan@gmail.com',
                'password' => bcrypt('password'),
                'isAdmin'=> '1'
            ]
        ]);
        
        $status = [
            ['no_status' => '0', 'desc_status' => 'Menunggu'],
            ['no_status' => '1', 'desc_status' => 'Bisa Diambil'],
            ['no_status' => '2', 'desc_status' => 'Sudah Diambil']
        ];
        DB::table('status')->insert($status);

        $mahasiswa = [
            ['nim' => 'G64180098', 'alamat' => 'C4/1/2'],
            ['nim' => 'B64180098', 'alamat' => 'A2/1/2'],
            ['nim' => 'G64180078', 'alamat' => 'C3/3/3']
        ];
        DB::table('mahasiswa')->insert($mahasiswa);

        $admin = [
            ['nip' => '120643055954806776'],
            ['nip' => '170692190898239212']
        ];
        DB::table('admin')->insert($admin);

        $barang = [
            ['no_resi' => 'A172361231F', 'nim' => 'G64180098', 'nama_barang' => 'Makanan', 'desc_barang' => 'Makanan Kucing', 'status' => '2'],
            ['no_resi' => '5Q723AD12311F', 'nim' => 'G64180098', 'nama_barang' => 'Gadget', 'desc_barang' => NULL, 'status'=>'1'],
            ['no_resi' => 'A17ASD361231F', 'nim' => 'G64180098', 'nama_barang' => 'Obat', 'desc_barang' => 'Paracetamol', 'status' => '0'],
            ['no_resi' => '5Q7211231S1F', 'nim' => 'G64180098', 'nama_barang' => 'Gadget', 'desc_barang' => NULL, 'status'=>'1'],
            ['no_resi' => 'F1239717DD1', 'nim' => 'G64180078', 'nama_barang' => 'Buku', 'desc_barang' => 'Buku Motivasi', 'status'=>'0']
        ];
        DB::table('barang')->insert($barang);
    }
}