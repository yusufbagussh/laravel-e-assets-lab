<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            'transaksi_item' => 1,
            'transaksi_peminjam' => 1,
            'transaksi_jumlah' => 2,
            'transaksi_tgl_pinjam' => Carbon::now()->format('Y-m-d'),
            'transaksi_lama_pinjam' => 5,
            'transaksi_tgl_kembali' => Carbon::now()->format('Y-m-d'),
            'transaksi_denda' => 10000,
            'transaksi_status' => 'dikembalikan',
            'created_by' => 2,
            'updated_by' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
        DB::table('transactions')->insert([
            'transaksi_item' => 2,
            'transaksi_peminjam' => 2,
            'transaksi_jumlah' => 2,
            'transaksi_tgl_pinjam' => Carbon::now()->format('Y-m-d'),
            'transaksi_lama_pinjam' => 5,
            'transaksi_tgl_kembali' => Carbon::now()->format('Y-m-d'),
            'transaksi_denda' => 10000,
            'transaksi_status' => 'dipinjam',
            'created_by' => 2,
            'updated_by' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
    }
}
