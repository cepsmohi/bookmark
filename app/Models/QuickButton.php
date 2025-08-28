<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuickButton extends Model
{
    protected $fillable = [
        'link_id',
        'position'
    ];

    public function link(){
        return $this->belongsTo(Link::class);
    }
}
