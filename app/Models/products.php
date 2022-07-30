<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table ='products';
    protected $primarykey ='id';
    protected $fillable =[
                'productName',
                'selectUniteType',
                'productPrice',
                'updatedStock'
                
    ];
}
