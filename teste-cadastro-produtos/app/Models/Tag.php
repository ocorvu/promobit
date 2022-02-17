<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tag extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = ['name'];

    public static function products($id)
    {
        $data = DB::table('tags')->join('product_tag', 'tags.id', '=', 'product_tag.tag_id')
        ->join('products', 'products.id', '=', 'product_tag.product_id')
        ->where('tags.id', '=' , $id)
        ->select('tags.id as tagID', 'tags.name as tagName', 'products.id as productID', 'products.name as productName')->get();

        return $data;
    }

    private function productsToSql($id)
    {
        $sql = DB::table('tags')
            ->join('product_tag', 'tags.id', '=', 'product_tag.tag_id')
            ->join('products', 'products.id', '=', 'product_tag.product_id')
            ->where('tags.id', '=' , $id)
            ->select('tags.id as tagID', 'tags.name as tagName', 'products.id as productID', 'products.name as productName')
            ->toSql();

        return $sql;
    }
}
