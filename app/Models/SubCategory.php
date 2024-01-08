<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubCategory extends Model
{
    use HasFactory;
    use Uuids;
    protected $fillable=[
        'category_id',
        'sub_category_name',
        'status',
    ];

    public function Category():BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
