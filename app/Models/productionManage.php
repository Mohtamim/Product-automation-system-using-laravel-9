<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productionManage extends Model
{
    use HasFactory;
    protected $table ='productionManages';
    protected $primarykey ='id';
    protected $fillable =[
                'entryDate',
                'productionNo',
                'expiryDate',
                'selectProductName',
                'uniteType',
                'productionQuantity',
                'selectedMaterials'
                
    ];
}
