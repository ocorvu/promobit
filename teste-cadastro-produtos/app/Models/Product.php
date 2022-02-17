<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    public static function tags($id) {
        
        $data = DB::table('products')
            ->join('product_tag', 'products.id', '=', 'product_tag.product_id')
            ->join('tags', 'tags.id', '=', 'product_tag.tag_id')
            ->where('products.id', '=', $id)
            ->select('tags.id as tagID', 'tags.name as tagName', 'products.name as productName', 'products.id as productID')
            ->get();

        return $data;
    }

    private function tagsToSql($id)
    {
        $sql = DB::table('products')
        ->join('product_tag', 'products.id', '=', 'product_tag.product_id')
        ->join('tags', 'tags.id', '=', 'product_tag.tag_id')
        ->where('products.id', '=', $id)
        ->select('tags.id as tagID', 'tags.name as tagName', 'products.name as productName', 'products.id as productID')
        ->toSql();

        return $sql;
    }
}
