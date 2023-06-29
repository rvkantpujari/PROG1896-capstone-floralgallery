<?php

namespace App\Http\Livewire;

use App\Models\Seller;
use Livewire\Component;

class SellersList extends Component
{
    public $sellers_list;
    public function render()
    {
        $this->sellers_list = Seller::select('id', 'first_name', 'last_name', 'email', 'status', 'created_at')->get();
        return view('admin.livewire.sellers-list', ['sellers' => $this->sellers_list]);
    }
}
