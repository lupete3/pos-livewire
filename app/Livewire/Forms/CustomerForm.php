<?php

namespace App\Livewire\Forms;

use App\Models\Customer;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CustomerForm extends Form
{
    public $name;

    public $contact;

    public $adress;

    public ?Customer $customer;

    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;

        $this->name = $customer->name;
        $this->contact = $customer->contact;
        $this->adress = $customer->adress;
    }

    public function store()
    {
        $valid = $this->validate([
            'name' => 'required',
            'contact' => '',
            'adress' => '',
        ]);

        Customer::create($valid);

        $this->reset();


    }

    public function update()
    {

        $valid = $this->validate([
            'name' => 'required',
            'contact' => '',
            'adress' => '',
        ]);

        $this->customer->update($valid);

        $this->reset();

        request()->session()->flash('message','Success');

    }
}
