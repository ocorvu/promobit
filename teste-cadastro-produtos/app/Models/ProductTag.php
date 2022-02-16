<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    use HasFactory;

    public $table = 'product_tag';
    public $timestamps = false;
    public $fillable = [
        'product_id',
        'tag_id'
    ];

    public function product()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }
}
