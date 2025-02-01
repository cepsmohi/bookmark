<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'position'
    ];
    public function links(){
        return $this->hasMany(Link::class)->orderBy('position');
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function createLink($title, $href, $position)
    {
        return $this->links()->create([
            'title' => $title,
            'href' => $href,
            'position' => $position,
        ]);
    }
}
