<?php

namespace App\Http\Livewire\Customer;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Addresses extends Component
{
    public $addresses;
    public function render()
    {
        $this->addresses = DB::table('user_addresses')
                            ->join('provinces', 'provinces.id',"=",'user_addresses.province_id')
                            ->select('user_addresses.*', 'provinces.id as province_id', 'provinces.*')
                            ->where('user_id', auth()->user()->id)->get();
        return view('customer.manage-addresses.livewire.addresses');
    }
}
