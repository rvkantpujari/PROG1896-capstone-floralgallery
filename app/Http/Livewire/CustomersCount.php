<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class CustomersCount extends Component
{
    public $customers_count = 0;
    public function render()
    {
        $this->customers_count = User::get()->count();
        
        return view('admin.dashboard.livewire.customers-count');
    }
}
