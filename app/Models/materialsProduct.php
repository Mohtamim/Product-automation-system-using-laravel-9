<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materialsProduct extends Model
{
    use HasFactory;
    protected $table ='materialsProduct';
    protected $primarykey ='id';
    protected $fillable =[
                'selectSupplier',
                'uniteType',
                'unitePrice',
                'quantity',
                'totalPrice',

    ];
}
