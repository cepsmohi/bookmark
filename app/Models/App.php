<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    public function getCategoriesAttribute()
    {
        return Category::orderBy('id')->get();
    }
}
