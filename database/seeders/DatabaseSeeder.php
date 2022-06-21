<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'kategori' => '1',
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

        DB::table('tb_tour_places')->insert([
            'nama_tempat' => 'Village Trekking By Desa Bali',
            'kategori' => '1',
            'tipe' => 'Outdoor',
            'deskripsi' => 'Ingin kembali menyegarkan pikiranmu yang penat? Di Bali ada program tur jalan keliling desa loh! Lewat paket Village Trekking by Desa Bali, kamu akan merasakan udara segar di desa yang asri di Bali.',
            'stok_tiket' => '250',
            'harga' => '25000',
            'jam_buka' => '100000',
            'alamat' => 'Penebel, Tabanan, Bali, Indonesia',
            'img_tempat' => 'https://firebasestorage.googleapis.com/v0/b/travelbae-9f9a6.appspot.com/o/village_trekking.png?alt=media&token=5b771f5a-906b-4082-ae7f-0d1c8a01742a',
            'created_at' => '2022-06-06 15:00:06',
            'updated_at' => '2022-06-06 15:00:06'
        ]);

        DB::table('tb_tour_places')->insert([
            'nama_tempat' => 'Bali Safari and Marine Park',
            'kategori' => '1',
            'tipe' => 'Atraksi',
            'deskripsi' => 'Rumah bagi lebih dari seribu hewan menakjubkan, Bali Safari and Marine Park Park adalah tujuan yang sempurna untuk momen petualangan dan juga edukasi yang menyenangkan. Taman kami adalah rumah bagi hewan yang mewakili lebih dari 100 spesies, termasuk spesies langka dan hampir punah, seperti Komodo, Orangutan, dan burung Jalak Bali.',
            'stok_tiket' => '300',
            'harga' => '25000',
            'jam_buka' => '110000',
            'alamat' => 'Jl. By Pass Ngurah Rai Jl. Prof. Dr. Ida Bagus Mantra, Bali',
            'img_tempat' => 'https://firebasestorage.googleapis.com/v0/b/travelbae-9f9a6.appspot.com/o/bali_safari.jpeg?alt=media&token=a041de45-81c8-4d62-bb7d-1bc72a28d473',
            'created_at' => '2022-06-06 15:00:06',
            'updated_at' => '2022-06-06 15:00:06'
        ]);

        DB::table('tb_events')->insert([
            'nama_event' => 'Pertunjukan Uluwatu Kecak dan Fire Dance Show',
            'kategori' => '2',
            'tipe' => 'Atraksi',
            'regulasi' => 'Kamu bisa menyaksikan tari Kecak dari Bali yang legendaris dan menakjubkan, lengkap dengan pertunjukan api yang keren. Tentu saja untuk pertunjukan dan pencahayaan kontras yang maksimal, acara ini harus digelar setelah matahari terbenam. Kamu pun bisa datang sedikit lebih awal untuk menikmati pemandangan matahari terbenam dari pinggir pulau sebelum acara dimulai.',
            'stok' => '700',
            'harga' => '14000',
            'jam_mulai' => '070000',
            'alamat' => 'Kawasan Parkir Pura Uluwatu, Desa Pecatu, Kuta Sel., Kabupaten Badung, Bali 80361, Indonesia',
            'img_tempat' => 'https://firebasestorage.googleapis.com/v0/b/travelbae-9f9a6.appspot.com/o/tari_kecak.jpeg?alt=media&token=fc2efceb-c3fd-4bd6-8127-5f2e71886ad0',
            'created_at' => '2022-06-06 15:00:06',
            'updated_at' => '2022-06-06 15:00:06'
        ]);

        DB::table('tb_events')->insert([
            'nama_event' => 'PADI Open Water',
            'kategori' => '2',
            'tipe' => 'Entertainment',
            'regulasi' => 'Temukan petualangan baru atau sekadar melihat dunia di bawah ombak Bali dengan mencoba kursus menyelam oleh Bali DivingTemukan petualangan baru atau sekadar melihat dunia di bawah ombak Bali dengan mencoba kursus menyelam oleh Bali Diving',
            'stok' => '200',
            'harga' => '10000',
            'jam_mulai' => '090000',
            'alamat' => 'Penebel, Tabanan, Bali, Indonesia',
            'img_tempat' => 'https://firebasestorage.googleapis.com/v0/b/travelbae-9f9a6.appspot.com/o/padi_openwater.jpeg?alt=media&token=a5584144-8e74-46fd-a228-065f543e3dd3',
            'created_at' => '2022-06-06 15:00:06',
            'updated_at' => '2022-06-06 15:00:06'
        ]);

        DB::table('tb_events')->insert([
            'nama_event' => 'Tour Sehari Di Nusa Penida',
            'kategori' => '2',
            'tipe' => 'Entertainment',
            'regulasi' => 'Harga tiket tidak termasuk :Penjemputan, Pengeluaran pribadi, Tip, Makan Siang, Tiket Speed boat, Retribusi pemerintah daerah 15.000 IDR.',
            'stok' => '750',
            'harga' => '50000',
            'jam_mulai' => '160000',
            'alamat' => 'Nusa Penida, Klungkung, Bali, Indonesia',
            'img_tempat' => 'https://firebasestorage.googleapis.com/v0/b/travelbae-9f9a6.appspot.com/o/event_nusapenida.jpeg?alt=media&token=404a0500-47f4-49d5-a3ba-3dec49fd0139',
            'created_at' => '2022-06-06 15:00:06',
            'updated_at' => '2022-06-06 15:00:06'
        ]);


        DB::table('tb_orders')->insert([
            'id_customer' => '1',
            'id_tempat' => '1',
            'id_event' => '2',
            'nama_customer' => 'Made Dwija',
            'order_status' => 'Unconfirmed',
            'tanggal_beli' => '2022-06-21',
            'total_bayar' => '140000',
            'total_tiket' => '10',
            'bank' => 'Mandiri'
        ]);

    }
}
