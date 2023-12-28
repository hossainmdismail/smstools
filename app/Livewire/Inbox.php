<?php

namespace App\Livewire;

use App\Models\Number;
use Livewire\Component;
use Livewire\WithPagination;
use SMS;

class Inbox extends Component
{
    use WithPagination;

    //sending sms
    public $phone   = null;
    public $message = null;

    //storing number
    public $number = '';
    public $lastID = 0;

    public function send()
    {
        $this->validate([
            'phone'     => 'required|min:10|max:11',
            'message'   => 'required',
        ]);

        $number = 0 . $this->phone;

        if (SMS::Send($number, $this->message)) {
            session()->flash('send', 'Send successfully');
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
        $number = Number::find($id);
        $this->phone = $number->number;
    }

    public function render()
    {
        $numbers = Number::query()
            ->where(function ($query) {
                $query->where('name', 'like', '%' . $this->number . '%')
                    ->orWhere('number', 'like', '%' . $this->number . '%');
                // Add more fields here for searching (e.g., 'email', 'description', etc.)
            })
            ->get();

        return view('livewire.inbox', [
            'numbers' =>  $numbers,
        ]);
    }
}
