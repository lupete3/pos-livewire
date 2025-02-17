<?php

namespace App\Livewire\Customer;

use App\Livewire\Forms\CustomerForm;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class Actions extends Component
{
    use WithFileUploads;

    public $show = false;

    public $photo;

    public CustomerForm $form;

    #[On('createCustomer')]
    public function createCustomer()
    {
        $this->show = true;
    }

    #[On('editCustomer')]
    public function editCustomer(Customer $customer)
    {
        $this->form->setCustomer($customer);
        $this->show = true;
    }

    #[On('deleteCustomer')]
    public function deleteCustomer(Customer $customer)
    {
        $customer->delete();

        $this->dispatch('reload');
    }

    public function ajouter()
    {

        if (isset($this->form->customer)) {
            $this->form->update();
            request()->session()->flash('message','Success');


        }else{
            $this->form->store();
            request()->session()->flash('message','Success');

        }

        $this->closeModal();

        $this->dispatch('reload');

    }

    public function closeModal()
    {
        $this->show = false;
        $this->form->reset();

    }

    public function render()
    {
        return view('livewire.customer.actions');
    }
}
