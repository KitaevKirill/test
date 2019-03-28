<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubCategory;

class Category extends Model
{
    public function child()
    {
        return $this->hasMany(SubCategory::class)->latest();
//       return $this->hasMany('App\SubCategory')->orderBy('create_at');
    }
}
