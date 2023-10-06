<?php

namespace App\Models;

use App\Models\Inventory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'sku',
        'file',
    ];

    public function inventory()
    {
        return $this->hasOne(Inventory::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
