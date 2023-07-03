<?php

namespace App\Http\Livewire;

use App\Models\Province;
use Livewire\Component;

class Provinces extends Component
{
    public $provinces;
    public function render()
    {
        $this->provinces = Province::select('id', 'province')->get();
        return view('admin.manage-provinces.livewire.provinces', ['provinces' => $this->provinces]);
    }
}
