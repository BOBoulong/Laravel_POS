<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'order_date',
        'status',
        'customer_id',
    ];
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
