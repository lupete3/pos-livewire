<?php

namespace App\Livewire\Customer;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
 
    protected $paginationTheme = 'bootstrap';

    public $search;

    public $num = 1;

    protected $listeners = [
        'reload' => '#refresh',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.customer.index', [
            'customers' => Customer::when($this->search, function($customer){
                $customer->where('name', 'like', '%'.$this->search.'%')
                ->orWhere('contact', 'like', '%'.$this->search.'%')
                ->orWhere('adress', 'like', '%'.$this->search.'%');
            })->paginate(6)
        ]);
    }

}
