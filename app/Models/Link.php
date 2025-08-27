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
        'pic',
        'position'
    ];
    protected function casts(): array
    {
        return [
            'pic' => 'string',
            'href' => 'string'
        ];
    }
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }
    public function getImageAttribute()
    {
        if ($this->pic != null){
            if(Storage::disk('public')->exists($this->pic)){
                return asset('images/public/'.$this->pic);
            }
        }
        $extensions = ['jpg', 'png'];
        foreach ($extensions as $ext) {
            $path = 'images/public/links/' . $this->id.'.'.$ext;
            $spath = 'links/' . $this->id.'.'.$ext;
            if (Storage::disk('public')->exists($spath)) {
                return asset($path);
            }
        }
        return asset('images/public/links/link.svg');
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
        if (!$pic) {
            return null;
        }
        $publicDisk = Storage::disk('public');
        foreach (['png', 'jpg'] as $ext) {
            $old = "links/{$this->id}.{$ext}";
            if ($publicDisk->exists($old)) {
                $publicDisk->delete($old);
            }
        }
        $image = Image::read($pic)->resize(300, 300);
        $name = 'links/' . uniqid() . '.png';
        $publicDisk->put($name, $image->encodeByExtension('png'));
        $this->update([
            'pic' => $name
        ]);
        return $name;
    }
}
