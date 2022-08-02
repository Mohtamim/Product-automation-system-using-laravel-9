<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminiCostEntry extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'expenseHeadName'=>'required|string|regex:/^[\pL\s\-]+$/u',
        'expenseAmount'=>'required|',
        'note',
    ];

}
