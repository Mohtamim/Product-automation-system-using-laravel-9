<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminCostType extends Model
{
    use HasFactory;
    protected $fillable = [
        'ExpenseHeadName',
        'ExpenseCode',
    ];

}
