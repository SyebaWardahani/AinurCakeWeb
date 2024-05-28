<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'cake_shop_orders';
    protected $fillable = ['orders_id'];

    /**
     * Menghitung total transaksi dari order details.
     *
     * @return float
     */
    public static function total_penjualan()
    {
        return self::sum('total_penjualan'); // Menghitung total penjualan dari kolom 'total'
    }
}
