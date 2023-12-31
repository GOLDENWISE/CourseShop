<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['course'];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function review(){
        return $this->hasMany(Review::class);
    }
}
