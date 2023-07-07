<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class CustomersList extends Component
{
    public $customers_list;
    public function render()
    {
        $this->customers_list = User::select('*')->get();
        return view('admin.manage-customers.livewire.customers-list', ['customers' => $this->customers_list]);
    }
}
