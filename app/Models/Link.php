<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class Link extends Model
{
    protected $fillable = [
        'subcategory_id',
        'title',
        'href',
        'position'
    ];
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }
    public function getImageAttribute()
    {
        return $this->id
            ? (Storage::disk('public')->exists('links/'.$this->id.'.jpg')
                ? asset('images/public/links/' . $this->id.'.jpg')
                : asset('images/public/links/link.svg'))
            : asset('images/public/links/link.svg');
    }
    public function updateLink($title, $href, $position)
    {
        return $this->update([
            'title' => $title,
            'href' => $href,
            'position' => $position
        ]);
    }
    public function updateImage($pic = null)
    {
        if (!$pic) {return;}
        $previouspic = 'links/'.$this->id.'.jpg';
        $publicDisk = Storage::disk('public');
        if ($previouspic && $publicDisk->exists($previouspic)) {
            $publicDisk->delete($previouspic);
        }
        $img = Image::read($pic)->toJpeg(75);
        $name = 'links/'.$this->id.'.jpg';
        Storage::disk('public')->put($name, $img);
    }
}
