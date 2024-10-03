<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'program_category_id',
        'program_sub_category_id',
    ];

    public function programCategory()
    {
        return $this->belongsTo(ProgramCategory::class);
    }

    public function programSubCategory()
    {
        return $this->belongsTo(ProgramSubCategory::class);
    }
}
