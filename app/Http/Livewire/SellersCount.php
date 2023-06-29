<?php

namespace App\Http\Livewire;

use App\Models\Seller;
use Livewire\Component;

class SellersCount extends Component
{
    public $sellers_count = 0;
    public function render()
    {
        $this->sellers_count = Seller::get()->count();
        
        return view('admin.dashboard.livewire.sellers-count');
    }
}
