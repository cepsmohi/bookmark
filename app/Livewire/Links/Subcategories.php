<?php

namespace App\Livewire\Links;

use App\Models\Link;
use App\Models\Subcategory;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Subcategories extends Component
{
    public $category;
    public $showCreateForm = false;
    public $showEditForm = false;
    public $newsubcategory;

    #[Rule('required|string')]
    public $title;

    public function createSubcategory()
    {
        $this->validate();
        $this->category->subcategories()->create([
            'title' => $this->title,
        ]);
        session()->flash('alert', 'Subcategory Created');
        return redirect(route('subcategories', $this->category));
    }
    public function editSubcategory($id)
    {
        $this->newsubcategory = Subcategory::find($id);
        $this->title = $this->newsubcategory->title;
        $this->showEditForm = true;
    }
    public function updateSubcategory()
    {
        $this->validate();
        $this->newsubcategory->update([
            'title' => $this->title,
        ]);
        session()->flash('alert', 'Subcategory Updated');
        return redirect(route('subcategories', $this->category));
    }
    public function deleteSubcategory($id)
    {
        Subcategory::find($id)->delete();
        return redirect(route('subcategories', $this->category));
    }
    public function render()
    {
        return view('livewire.links.subcategories', [
            'subcategories' => $this->category->subcategories,
        ]);
    }
}
