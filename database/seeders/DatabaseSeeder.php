<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Seeding for cake_shop_admin_registrations table
        DB::table('cake_shop_admin_registrations')->insert([
            'admin_username' => 'admin2',
            'admin_email' => 'ciocia0730@gmail.com',
            'admin_password' => Hash::make('12345'),
            'code' => 0,
            'profile_image' => ''
        ]);

        // Seeding for cake_shop_category table
        DB::table('cake_shop_category')->insert([
            ['category_name' => 'Kue Basah', 'category_image' => '231123023601.jpg'],
            ['category_name' => 'Kue Kering', 'category_image' => '231123023455.jpg'],
            ['category_name' => 'Kue Tart', 'category_image' => '231123023312.jpg'],
        ]);
        // DB::table('cake_shop_category')->insert([]);

        // Seeding for cake_shop_orders table
        DB::table('cake_shop_orders')->insert([
            // Add your orders data here
            // Example:
            // ['users_id' => 1, 'order_date' => '2024-05-01', 'delivery_date' => '2024-05-03', 'payment_method' => 'credit card', 'total_amount' => '100000', 'status' => 'pending']
        ]);

        // Seeding for cake_shop_orders_detail table
        DB::table('cake_shop_orders_detail')->insert([
            // Add your orders detail data here
            // Example:
            // ['orders_id' => 1, 'product_name' => 'Kue Basah', 'quantity' => 2]
        ]);

        // Seeding for cake_shop_product table
        DB::table('cake_shop_product')->insert([
            ['product_name' => 'Apem Selong', 'product_category' => 1, 'product_price' => '3500', 'unit' => 'Per biji', 'product_description' => '', 'product_image' => '2311230243310.jpg'],
            ['product_name' => 'Black Forest', 'product_category' => 1, 'product_price' => '125000', 'unit' => '/loyang', 'product_description' => '', 'product_image' => '2311270742080.jpg'],
            ['product_name' => 'Bolu Lapis', 'product_category' => 1, 'product_price' => '120000', 'unit' => '/loyang', 'product_description' => '', 'product_image' => '2311230616550.jpg'],
            ['product_name' => 'Bolu Susu Toping', 'product_category' => 1, 'product_price' => '120000', 'unit' => '/loyang', 'product_description' => '', 'product_image' => '2311270753320.jpg'],
            ['product_name' => 'Brownis Kukus', 'product_category' => 1, 'product_price' => '50000', 'unit' => '/mika', 'product_description' => '', 'product_image' => '2311270752450.jpg'],
            ['product_name' => 'Cake Salju', 'product_category' => 1, 'product_price' => '3500', 'unit' => '/biji', 'product_description' => '', 'product_image' => '2311270751340.jpg'],
            ['product_name' => 'Donat Krispy', 'product_category' => 1, 'product_price' => '3000', 'unit' => '/biji', 'product_description' => '', 'product_image' => '2311270750340.jpg, 2311270750341.jpg'],
            ['product_name' => 'Caramel', 'product_category' => 1, 'product_price' => '75000', 'unit' => '/loyang', 'product_description' => '', 'product_image' => '2311270754520.jpg, 2311270754521.jpg'],
            ['product_name' => 'Lapis Bunga', 'product_category' => 1, 'product_price' => '3000', 'unit' => '/biji', 'product_description' => '', 'product_image' => '2311270108550.jpg'],
            ['product_name' => 'Lemper', 'product_category' => 1, 'product_price' => '3000', 'unit' => '/biji', 'product_description' => '', 'product_image' => '2311270109060.jpeg'],
            ['product_name' => 'Nogosari', 'product_category' => 1, 'product_price' => '3500', 'unit' => '/biji', 'product_description' => '', 'product_image' => '2311270109200.jpg'],
            ['product_name' => 'Nastar', 'product_category' => 1, 'product_price' => '70000', 'unit' => '/toples', 'product_description' => '', 'product_image' => '2311270832140.jpeg, 2311270832141.jpg'],
            ['product_name' => 'Pastel Kering', 'product_category' => 2, 'product_price' => '40000', 'unit' => '/toples', 'product_description' => '', 'product_image' => '2311270832300.jpeg'],
            ['product_name' => 'Cake Salju Buah', 'product_category' => 1, 'product_price' => '3500', 'unit' => '/biji', 'product_description' => '', 'product_image' => '2311270832440.jpg'],
            ['product_name' => 'Pastri Cum Cum', 'product_category' => 1, 'product_price' => '4000', 'unit' => '/biji', 'product_description' => '', 'product_image' => '2311270836360.jpg'],
            ['product_name' => 'Pai Buah', 'product_category' => 1, 'product_price' => '4000', 'unit' => '/biji', 'product_description' => '', 'product_image' => '2311270842130.jpe'],
            ['product_name' => 'Pai Toping Coklat', 'product_category' => 1, 'product_price' => '4000', 'unit' => '/biji', 'product_description' => '', 'product_image' => '2311270844290.jpg'],
            ['product_name' => 'Puding Batik', 'product_category' => 1, 'product_price' => '3500', 'unit' => '/biji', 'product_description' => '', 'product_image' => '2311270852300.jpg'],
            ['product_name' => 'Risol Ayam', 'product_category' => 1, 'product_price' => '3500', 'unit' => '/biji', 'product_description' => '', 'product_image' => '2311270852420.jpg'],
            ['product_name' => 'Risol Mayo', 'product_category' => 1, 'product_price' => '3500', 'unit' => '/biji', 'product_description' => '', 'product_image' => '2311270852560.jpg'],
            ['product_name' => 'Roll Bolen', 'product_category' => 1, 'product_price' => '4000', 'unit' => '/biji', 'product_description' => '', 'product_image' => '2311270109500.jpg, 2311270109501.jpg'],
            ['product_name' => 'Roti Gulung Batik', 'product_category' => 1, 'product_price' => '70000', 'unit' => '/loyang', 'product_description' => '', 'product_image' => '2311271255460.jpg'],
            ['product_name' => 'Roti Gulung Rainbow', 'product_category' => 1, 'product_price' => '4000', 'unit' => '/biji', 'product_description' => '', 'product_image' => '2311271255580.jpg'],
            ['product_name' => 'Roti Gulung Toping', 'product_category' => 1, 'product_price' => '250000', 'unit' => '/mika', 'product_description' => '', 'product_image' => '2311271256090.jpg'],
            ['product_name' => 'Roti Pisang Coklat', 'product_category' => 1, 'product_price' => '3500', 'unit' => '/biji', 'product_description' => '', 'product_image' => '2311271256210.jpe'],
            ['product_name' => 'Sagu', 'product_category' => 2, 'product_price' => '75000', 'unit' => '/toples', 'product_description' => '', 'product_image' => '2311271256320.jpg'],
            ['product_name' => 'Salju', 'product_category' => 2, 'product_price' => '60000', 'unit' => '/toples', 'product_description' => '', 'product_image' => '2311271256450.jpg'],
            ['product_name' => 'Semprit', 'product_category' => 2, 'product_price' => '60000', 'unit' => '/toples', 'product_description' => '', 'product_image' => '2311271257040.jpe'],
            ['product_name' => 'Spon Cake', 'product_category' => 1, 'product_price' => '70000', 'unit' => '/loyang', 'product_description' => '', 'product_image' => '2311271257290.jpg'],
            ['product_name' => 'Sus Buah', 'product_category' => 1, 'product_price' => '3500', 'unit' => '/biji', 'product_description' => '', 'product_image' => '2311271258100.jpe'],
            ['product_name' => 'Sus Bunga', 'product_category' => 1, 'product_price' => '3500', 'unit' => '/biji', 'product_description' => '', 'product_image' => '2311270105020.jpg'],
            ['product_name' => 'Sus Mager Jaring', 'product_category' => 1, 'product_price' => '3500', 'unit' => '/biji', 'product_description' => '', 'product_image' => '2311270110100.png'],
            ['product_name' => 'Sus Ori', 'product_category' => 1, 'product_price' => '3000', 'unit' => '/biji', 'product_description' => '', 'product_image' => '2311270110240.jpg'],
            ['product_name' => 'Tart Full Bunga', 'product_category' => 3, 'product_price' => '300000', 'unit' => '/biji', 'product_description' => '', 'product_image' => '2311230252370.jpg'],
            ['product_name' => 'Tart Love', 'product_category' => 3, 'product_price' => '350000', 'unit' => '/biji', 'product_description' => '', 'product_image' => '2311230252500.jpg'],
        ]);
        // DB::table('cake_shop_product')->insert([
        //     // Add your product data here
        //     // Example:
        //     // ['product_name' => 'Kue Basah', 'product_category' => 1, 'product_price' => '50000', 'unit' => 'pcs', 'product_description' => 'Delicious traditional cake', 'product_image' => 'kue_basah.jpg']
        // ]);

        // Seeding for cake_shop_users_registrations table
        DB::table('cake_shop_users_registrations')->insert([
            // Add your users registrations data here
            // Example:
            // 'users_username' => 'irfan', 'users_email' => 'irfan@gmail.com', 'users_password' => Hash::make('irfan123'), 'hint' => 'first pet', 'users_mobile' => '08123456789', 'users_address' => 'Jl. Sudirman No.1', 'code' => 12345
        ]);

        // Seeding for catatan table
        // Seeding for sumber table
        // DB::table('sumber')->insert([
        //     ['id_sumber' => 11, 'nama' => 'bahan kue'],
        //     ['id_sumber' => 12, 'nama' => 'alat'],
        //     ['id_sumber' => 13, 'nama' => 'listrik'],
        //     ['id_sumber' => 14, 'nama' => 'lain-lain'],
        // ]);

        // // Seeding for catatan table
        // DB::table('catatan')->insert([
        //     ['id_catatan' => 1, 'catatan' => 'Besok, Hari minggu akan ada kunjungan dari pihak dinas untuk mengecek kinerja karyawan.'],
        //     ['id_catatan' => 2, 'catatan' => 'Hari Kamis jam 8 akan ada rapat, diharapkan kepada semua karyawan agar dapat berhadir.'],
        //     ['id_catatan' => 3, 'catatan' => 'Tingkatkan lagi pendapatan, dan minimalkan pengeluaran'],
        //     ['id_catatan' => 4, 'catatan' => 'tgl 6 domain dan hosting banyak yang akan expired, dan harus diperpanjang lagi'],
        // ]);

        // // Seeding for pengeluaran table
        // DB::table('pengeluaran')->insert([
        //     ['id_pengeluaran' => 31, 'tgl_pengeluaran' => '2023-10-23', 'jumlah' => 120000, 'id_sumber' => 11, 'deskripsi' => ''],
        //     ['id_pengeluaran' => 32, 'tgl_pengeluaran' => '2023-10-24', 'jumlah' => 80000, 'id_sumber' => 11, 'deskripsi' => ''],
        //     ['id_pengeluaran' => 33, 'tgl_pengeluaran' => '2023-10-25', 'jumlah' => 150000, 'id_sumber' => 13, 'deskripsi' => ''],
        //     ['id_pengeluaran' => 34, 'tgl_pengeluaran' => '2023-10-26', 'jumlah' => 1550000, 'id_sumber' => 12, 'deskripsi' => 'mixer'],
        //     ['id_pengeluaran' => 35, 'tgl_pengeluaran' => '2023-10-27', 'jumlah' => 50000, 'id_sumber' => 14, 'deskripsi' => 'beli bensin pengiriman'],
        //     ['id_pengeluaran' => 36, 'tgl_pengeluaran' => '2023-10-28', 'jumlah' => 60000, 'id_sumber' => 11, 'deskripsi' => ''],
        //     ['id_pengeluaran' => 37, 'tgl_pengeluaran' => '2023-10-29', 'jumlah' => 809000, 'id_sumber' => 12, 'deskripsi' => 'oven'],
        //     ['id_pengeluaran' => 38, 'tgl_pengeluaran' => '2023-10-30', 'jumlah' => 60000, 'id_sumber' => 14, 'deskripsi' => 'gas'],
        //     ['id_pengeluaran' => 39, 'tgl_pengeluaran' => '2023-10-31', 'jumlah' => 50000, 'id_sumber' => 13, 'deskripsi' => ''],
        //     ['id_pengeluaran' => 41, 'tgl_pengeluaran' => '2023-11-01', 'jumlah' => 90000, 'id_sumber' => 11, 'deskripsi' => 'beli bahan inainuino'],
        //     ['id_pengeluaran' => 42, 'tgl_pengeluaran' => '2023-11-02', 'jumlah' => 50000, 'id_sumber' => 11, 'deskripsi' => 'gfdadsdja'],
        // ]);
    }
}
