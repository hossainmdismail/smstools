<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Label extends Component
{
    use WithPagination;
    public $name = null;


    public function label()
    {
        $this->validate([
            'name' => 'required|string',
        ]);

        $names = new Category();
        $names->name   = $this->name;
        $names->save();

        session()->flash('succ', 'Label added successfully');
        $this->name = null;
    }

    public function render()
    {
        $label = Category::orderBy('id', 'DESC')->paginate(10);
        return view('livewire.label', [
            'lists' => $label
        ]);
    }
}
