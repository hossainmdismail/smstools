<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Number;
use App\Models\Send;
use Livewire\Component;
use Livewire\WithPagination;
use SMS;

class Inbox extends Component
{
    use WithPagination;

    //sending sms
    public $phone   = null;
    public $message = null;
    public $category = null;

    //storing number
    public $number = '';
    public $lastID = 0;


    public function labels()
    {
        $this->phone = '';
        if ($this->category != null) {
            $numbers = Contact::where('category_id', $this->category)->get();

            $index = 0;
            $totalNumbers = $numbers->count();

            foreach ($numbers as $number) {
                $this->phone .= $number->number;

                // Check if the current number is not the last one
                if ($index < $totalNumbers - 1) {
                    $this->phone .= ','; // Append comma if it's not the last iteration
                }

                $index++; // Increment the iteration counter
            }
        }
    }

    public function send()
    {
        
        $this->validate([
            'phone'     => 'required',
            'message'   => 'required',
        ]);


        
        $send = SMS::Send($this->phone, $this->message);
        if ($send && $send['success'] == 202) {
            session()->flash('send', 'Send successfully');
        } else {
            session()->flash('send', $send['error_message']);
        }
    
    }

    //storing number funtion
    public function save()
    {
    }

    //getting number list
    public function getNumbersProperty()
    {
        $data = Number::orderBy('id', 'DESC')->get();
        if ($data->count() != 0) {
            $this->lastID = $data->first()->id;
        }
        return $data; // Fetch all numbers from the database
    }

    public function clipBoard($id)
    {
        $this->phone = '';
        $number = Contact::find($id);
        $this->phone = $number->number;
    }

    public function render()
    {
        $numbers = Contact::query()
            ->where(function ($query) {
                $query->where('name', 'like', '%' . $this->number . '%')
                    ->orWhere('number', 'like', '%' . $this->number . '%');
                // Add more fields here for searching (e.g., 'email', 'description', etc.)
            })
            ->paginate(10);

        $category = Category::all();

        return view('livewire.inbox', [
            'numbers'    =>  $numbers,
            'categories' =>  $category,
        ]);
    }
}
