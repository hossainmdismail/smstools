<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Contact as ModelsContact;
use Livewire\Component;
use Livewire\WithPagination;

class Contact extends Component
{
    use WithPagination;

    public $search = '';
    public $category = '';

    public $contactid = null;
    public $label = '';
    public $name = '';
    public $number = '';
    public $email = '';

    //Model Action
    public $model   = false;
    public $edit    = false;
    public $delete  = false;



    // =======> model handle
    public function hideHande()
    {
        $this->model = !$this->model;
    }
    public function editHande()
    {
        $this->edit = !$this->edit;
    }
    public function deleteHande()
    {
        $this->delete = !$this->delete;
    }
    //  model handle end <=======

    // Clear filter
    public function clearFilter()
    {
        $this->search = '';
        $this->category = '';
    }

    public function loadContact(ModelsContact $contact)
    {
        $this->edit = !$this->edit;

        $this->contactid = $contact->id;
        $this->label = $contact->category_id;
        $this->name = $contact->name;
        $this->number = $contact->number;
        $this->email = $contact->email;
    }

    public function loadDelete($id)
    {
        $this->delete = !$this->delete;

        $this->contactid = $id;
    }

    //edit contact
    public function update()
    {
        $this->validate([
            'contactid' => 'required',
            'label'     => 'required',
            'name'      => 'required',
            'number'    => 'required|min:11|max:11',
        ]);


        $new = ModelsContact::find($this->contactid);
        $new->category_id = $this->label;
        $new->name        = $this->name;
        $new->number      = $this->number;
        $new->email       = $this->email;
        $new->save();

        $this->resetFields();
        $this->edit = false;

        session()->flash('succ', 'Contact update successfully');
    }

    public function submit()
    {
        $this->validate([
            'label'     => 'required',
            'name'      => 'required',
            'number'    => 'required',
        ]);

        $new = new ModelsContact();
        $new->category_id = $this->label;
        $new->name        = $this->name;
        $new->number      = $this->number;
        $new->email       = $this->email;
        $new->save();

        $this->label = '';
        $this->name = '';
        $this->number = '';
        $this->email = '';
        $this->model = false;

        session()->flash('succ', 'Contact saved successfully');
    }

    public function remove()
    {
        $this->validate([
            'contactid' => 'required',
        ]);

        ModelsContact::find($this->contactid)->delete();
        $this->resetFields();
        $this->delete = false;

        session()->flash('succ', 'Contact delete successfully');
    }

    // Function to reset form fields
    private function resetFields()
    {
        $this->label    = '';
        $this->name     = '';
        $this->number   = '';
        $this->email    = '';
    }

    public function render()
    {
        $query = ModelsContact::query()
            ->where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('number', 'like', '%' . $this->search . '%');
                // Add more fields here for searching (e.g., 'email', 'description', etc.)
            });

        if ($this->category !== '') {
            $query->where('category_id', $this->category); // Adjust 'category_id' with your actual column name
        }

        $contact = $query->orderBy('id', 'DESC')->paginate(10);

        $labels = Category::orderBy('id', 'DESC')->get();

        return view('livewire.contact', [
            'contacts'  => $contact,
            'lists'     => $labels
        ]);
    }
}
