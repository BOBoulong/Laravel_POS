<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = ['name', 'stall', 'phone', 'address', 'user_id'];

    public function user(){
        return $this -> belongsTo(User::class);
    }

}
