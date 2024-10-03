<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function programs()
    {
        return $this->hasMany(Program::class);
    }

    public function subCategories()
    {
        return $this->hasMany(ProgramSubCategory::class);
    }
}
