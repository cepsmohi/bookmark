<?php

namespace App\Livewire\Links;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Models\Link;
use Livewire\WithFileUploads;
use Livewire\Attributes\Rule;

class Subcategorieslinks extends Component
{
    use WithFileUploads;

    public $category;
    public $subcategory;
    public $showCreateForm = false;
    public $showEditForm = false;
    public $newlink;

    #[Rule('required|string')]
    public $title;


    #[Rule('required|string')]
    public $href;

    #[Rule('nullable|sometimes|image|max:1024', as :'photo')]
    public $pic;

    public function mount()
    {
        $this->newlink = new Link;
    }
    public function createLink()
    {
        $this->validate();
        $newlink = $this->subcategory->createLink($this->title, $this->href);
        $newlink->updateImage($this->pic);
        session()->flash('alert', 'Link Created');
        return redirect(route('subcategories.links', [$this->category,$this->subcategory]));
    }
    public function editLink($id)
    {
        $this->newlink = Link::find($id);
        $this->title = $this->newlink->title;
        $this->href = $this->newlink->href;
        $this->showEditForm = true;
    }
    public function updateLink()
    {
        $this->validate();
        $this->newlink->updateLink($this->title, $this->href);
        $this->newlink->updateImage($this->pic);
        session()->flash('alert', 'Link Updated');
        return redirect(route('subcategories.links', [$this->category,$this->subcategory]));
    }
    public function deleteLink()
    {
        $previouspic = 'links/'.$this->newlink->id.'.jpg';
        $publicDisk = Storage::disk('public');
        if ($previouspic && $publicDisk->exists($previouspic)) {
            $publicDisk->delete($previouspic);
        }
        $this->newlink->delete();
        session()->flash('alert', 'Link Deleted');
        return redirect(route('subcategories.links', [$this->category,$this->subcategory]));
    }
    public function render()
    {
        return view('livewire.links.subcategorieslinks', [
            'links' => $this->subcategory->links,
        ]);
    }
}
