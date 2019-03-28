<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class SubCategory extends Model
{
    public function parent() {
//        return $this->belongsTo(Category::class);
        return $this->belongsTo('Category');
    }
}
