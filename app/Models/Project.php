<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $hidden = ['pivot'];

    public function technologies(){
        return $this->belongsToMany(Technology::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}
