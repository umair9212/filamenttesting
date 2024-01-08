<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
class Category extends Model
{
    use HasFactory;
    use Uuids;
    protected $fillable=[
        'category_name',
        'category_status',
        'order',
    ];
}
