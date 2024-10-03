<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramSubCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'program_category_id'];

    public function programCategory()
    {
        return $this->belongsTo(ProgramCategory::class);
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}
