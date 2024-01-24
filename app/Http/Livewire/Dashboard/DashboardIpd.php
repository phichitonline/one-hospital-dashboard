<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class DashboardIpd extends Component
{
    // public $pt_opd_vn_lastm,$pt_opd_vnm,$pt_opd_hnm,$pt_opd_today;

    public function mount()
    {

    }

    public function render()
    {
        return view('livewire.dashboard.dashboard-ipd', [
            
        ])->layout('livewire.layouts.base');
    }
}
