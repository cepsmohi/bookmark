<?php

namespace App\Livewire\Links;

use App\Models\Category;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Categories extends Component
{
    public $showCreateForm = false;
    public $showEditForm = false;
    public $newcategory;

    #[Rule('required|string')]
    public $title;

    public function createCategory()
    {
        $this->validate();
        Category::create([
            'title' => $this->title,
        ]);
        session()->flash('alert', 'Category Created');
        return redirect(route('categories'));
    }
    public function editCategory($id)
    {
        $this->newcategory = Category::find($id);
        $this->title = $this->newcategory->title;
        $this->showEditForm = true;
    }
    public function updateCategory()
    {
        $this->validate();
        $this->newcategory->update([
            'title' => $this->title,
        ]);
        session()->flash('alert', 'Category Updated');
        return redirect(route('categories'));
    }
    public function deleteCategory($id)
    {
        Category::find($id)->delete();
        return redirect(route('categories'));
    }

    public function render()
    {
        return view('livewire.links.categories', [
            'categories' => Category::all()
        ]);
    }
}
