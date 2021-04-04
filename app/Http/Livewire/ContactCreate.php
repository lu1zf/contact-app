<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactCreate extends Component
{
    public $name;
    public $email;
    public $phone;

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
    ];

    public function create()
    {
        $this->validate();
        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone
            ]);

        $this->name = $this->phone = $this->email = null;
    }

    public function render()
    {
        return view('livewire.contact-create');
    }
}
