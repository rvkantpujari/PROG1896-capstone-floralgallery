<?php

namespace App\Http\Livewire\Admin;

use App\Models\Seller;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ChartSellersJoined extends Component
{
    public function render()
    {
        $sellers_joined = Seller::select(DB::raw("COUNT(*) as count"), DB::raw("MONTH(created_at) as month_name"))
                                    ->whereYear('created_at', date('Y'))->groupBy('month_name')
                                    ->orderBy('month_name')->limit(12)->pluck('count', 'month_name');
        
        $sellers_joined_labels = $sellers_joined->keys();
        $sellers_joined_data = $sellers_joined->values();
        return view('admin.dashboard.livewire.chart-sellers-joined', compact('sellers_joined_labels', 'sellers_joined_data'));
    }
}
