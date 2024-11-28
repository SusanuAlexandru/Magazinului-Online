<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
<<<<<<< HEAD
    // Numele tabelului asociat modelului
    protected $table = 'products';

    // Câmpurile care pot fi completate în mod masiv
=======
    // Definim tabela asociată modelului
    protected $table = 'products';
    
    // Câmpurile care pot fi completate în masă
>>>>>>> 237ee90fe8901cd981aeff80b2bd082edbe79ee7
    protected $fillable = [
        'name',
        'description',
        'price',
<<<<<<< HEAD
        'stock',
        'brand',
        'category_id'
    ];

    // Relația cu categoria
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
=======
        'stock_quantity',
        'Product_id',
    ];

    // Relația cu modelul `Product` (un produs aparține unei categorii)
    public function Product()
    {
        return $this->belongsTo(Product::class);
    }

    // Relația cu modelul `OrderItem` (un produs poate fi asociat cu mai multe comenzi)
    public function orderItems()
    {
        return $this->hasMany(Order::class);
    }

    // Relația cu modelul `Review` (un produs poate avea mai multe recenzii)
    public function reviews()
    {
        return $this->hasMany(Review::class);
>>>>>>> 237ee90fe8901cd981aeff80b2bd082edbe79ee7
    }
}
