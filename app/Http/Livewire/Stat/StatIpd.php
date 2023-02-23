<?php

namespace App\Http\Livewire\Stat;

use Livewire\Component;

class StatIpd extends Component
{
    public $year;

    protected $queryString = ['year'];

    public function render()
    {
        return view('livewire.stat.stat-ipd')->layout('livewire.layouts.base');
    }
}
