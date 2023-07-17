<?php

namespace App\Http\Livewire\Admin;

use App\Models\Seller;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ChartCustomersJoined extends Component
{
    public $customers_joined;
    public function render()
    {
        $customers_joined = Seller::select(DB::raw("COUNT(*) as count"), DB::raw("MONTH(created_at) as month_name"))
                                    ->whereYear('created_at', date('Y'))->groupBy('month_name')
                                    ->orderBy('month_name')->limit(12)->pluck('count', 'month_name');
        
        $customers_joined_labels = $customers_joined->keys();
        $customers_joined_data = $customers_joined->values();
        return view('admin.dashboard.livewire.chart-customers-joined', compact('customers_joined_labels', 'customers_joined_data'));
    }
}
