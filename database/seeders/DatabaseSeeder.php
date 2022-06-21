<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_admins')->insert([
            'username' => 'admin',
            'password' => '1234',
            'nama' => 'made',
            'noHP' => '081111',
            'role_id' => '1'
        ]);

        DB::table('tb_admins')->insert([
            'username' => 'aman',
            'password' => '1234',
            'nama' => 'wayan',
            'noHP' => '081111',
            'role_id' => '1'
        ]);

        DB::table('tb_admins')->insert([
            'username' => 'ivan',
            'password' => '1234',
            'nama' => 'komang',
            'noHP' => '081111',
            'role_id' => '1'
        ]);

        DB::table('tb_owners')->insert([
            'username' => 'owner1',
            'password' => '1234',
            'nama' => 'mohamad',
            'role_id' => '2'
        ]);

        DB::table('tb_owners')->insert([
            'username' => 'owner2',
            'password' => '1234',
            'nama' => 'ivan',
            'role_id' => '2'
        ]);

        DB::table('tb_owners')->insert([
            'username' => 'owner3',
            'password' => '1234',
            'nama' => 'hegiansyah',
            'role_id' => '2'
        ]);

        DB::table('tb_customers')->insert([
            'username' => 'dwijamahardika',
            'password' => '1234',
            'noHP' => '081111',
            'email' => '1@gmail.com',
            'role_id' => '3'
        ]);

        DB::table('tb_customers')->insert([
            'username' => 'isnanrifai',
            'password' => '1234',
            'noHP' => '081111',
            'email' => '2@gmail.com',
            'role_id' => '3'
        ]);

        DB::table('tb_customers')->insert([
            'username' => 'rizqi',
            'password' => '1234',
            'noHP' => '081111',
            'email' => '3@gmail.com',
            'role_id' => '3'
        ]);

        DB::table('tb_tour_places')->insert([
            'nama_tempat' => 'Bali Reptile Park',
            'kategori' => '3',
            'tipe' => 'Atraksi',
            'deskripsi' => 'Kebun raya dengan luas dua hektar ini juga punya area khusus untuk kamu yang ingin berinteraksi dengan iguana, buaya, dan kura-kura.',
            'stok_tiket' => '500',
            'harga' => '12000',
            'jam_buka' => '090000',
            'alamat' => 'Gianyar, Bali, Indonesia',
            'img_tempat' => 'https://firebasestorage.googleapis.com/v0/b/travelbae-9f9a6.appspot.com/o/bali_reptile.jpeg?alt=media&token=b69a5c6f-1a81-46be-8f83-b3c8d6f99b94',
            'created_at' => '2022-06-06 15:00:06',
            'updated_at' => '2022-06-06 15:00:06'
        ]);

        DB::table('tb_events')->insert([
            'nama_event' => 'Pertunjukan Uluwatu Kecak dan Fire Dance Show',
            'kategori' => '2',
            'tipe' => 'Atraksi',
            'regulasi' => 'Kebun raya dengan luas dua hektar ini juga punya area khusus untuk kamu yang ingin berinteraksi dengan iguana, buaya, dan kura-kura.',
            'stok' => '500',
            'harga' => '12000',
            'jam_mulai' => '090000',
            'alamat' => 'Gianyar, Bali, Indonesia',
            'img_tempat' => 'https://firebasestorage.googleapis.com/v0/b/travelbae-9f9a6.appspot.com/o/bali_reptile.jpeg?alt=media&token=b69a5c6f-1a81-46be-8f83-b3c8d6f99b94',
            'created_at' => '2022-06-06 15:00:06',
            'updated_at' => '2022-06-06 15:00:06'
        ]);

        DB::table('tb_orders')->insert([
            'id' => 'Bali Reptile Park',
            'id_customer' => '3',
            'id_tempat' => 'Atraksi',
            'id_event' => 'Kebun raya dengan luas dua hektar ini juga punya area khusus untuk kamu yang ingin berinteraksi dengan iguana, buaya, dan kura-kura.',
            'id_bank' => '500',
            'nama_customer' => '12000',
            'order_status' => '090000',
            'tanggal_beli' => 'Gianyar, Bali, Indonesia',
            'total_bayar' => ,
            'total_tiket' =>
        ]);

    }
}
