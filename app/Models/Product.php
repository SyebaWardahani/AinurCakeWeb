<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // protected $primaryKey = 'product_id';
    // protected $fillable = [
    //     'product_name',
    //     'category_id',
    //     'product_price',
    //     'unit',
    //     'product_description',
    //     'product_image'
    // ];

    // public function category()
    // {
    //     return $this->belongsTo(Category::class, 'category_id', 'category_id');
    // }

    // Specify the table name
    protected $table = 'cake_shop_product';

    // Specify the primary key if it's not the default 'id'
    protected $primaryKey = 'product_id';

    // Specify which attributes are mass assignable
    protected $fillable = [
        'product_name',
        'product_category',  // Note: This should match the column name in the table schema
        'product_price',
        'unit',
        'product_description',
        'product_image'
    ];

    // Define the relationship to the Category model
    public function category()
    {
        return $this->belongsTo(Category::class, 'product_category', 'category_id');
    }
}
