<?php

namespace App\Http\Livewire\Reports;

use Livewire\Component;

class Index extends Component
{
    public $year;

    protected $queryString = ['year'];

    public function render()
    {
        // return view('livewire.reports.index');

        return view('livewire.reports.index')
            ->layout('livewire.layouts.base');
    }
}
