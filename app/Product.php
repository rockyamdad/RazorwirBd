<?php namespace App;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Product extends Eloquent
{
    protected $table = 'products';

    protected $fillable = ['name','brand','origin_name','price','size','color','details','type','image'];
}