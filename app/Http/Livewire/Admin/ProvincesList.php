<?php

namespace App\Http\Livewire\Admin;

use App\Models\Province;
use Livewire\Component;

class ProvincesList extends Component
{
    public $provinces;
    public function render()
    {
        $this->provinces = Province::select('provinces.*')->get();
        return view('admin.manage-provinces.livewire.provinces', ['provinces' => $this->provinces]);
    }
}
