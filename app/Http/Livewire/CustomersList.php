<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class CustomersList extends Component
{
    public $customers_list;
    public function render()
    {
        $this->customers_list = User::select('id', 'first_name', 'last_name', 'email', 'status', 'created_at')->get();
        return view('admin.manage_users.livewire.customers-list', ['users' => $this->customers_list]);
    }
}
