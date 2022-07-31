<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productSale extends Model
{
    use HasFactory;
    protected $table ='productsale';
    protected $primarykey ='id';
    protected $fillable =[
                'selectCustomer',
                'selectProduct',
                'productPrice',
                'entryQuantity',
                'totalAmount',
                'entryDate'
                
                
    ];
}
