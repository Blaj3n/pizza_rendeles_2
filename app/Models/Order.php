<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey="order_id";
    use HasFactory;
    protected $fillable = [
        "user_id",
        "pizza_id"
    ];
}