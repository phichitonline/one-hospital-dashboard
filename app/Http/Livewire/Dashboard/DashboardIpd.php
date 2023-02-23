<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class DashboardIpd extends Component
{
    // public function create()  // Create a record
    // {
    //     // Validation logic here
    //     $data = [ 'name' => $this->name ];
    //     // Store in database
    //     session()->flash('message', 'Record created successfully.');
    //     $this->resetInputFields(); // Reset input fields after creating record.
    // }

    // public function read($id) // Read a record
    // {
    //     // Retrieve from database and set to component properties.
    //     $record = Model::find($id);
    //     $this->name = $record->name;
    // }

    // public function update($id) // Update a record
    // {
    //     // Validation logic here
    //     $data = [ 'name' => $this->name ];
    //     // Update in database
    //     session()->flash('message', 'Record updated successfully.');
    //     $this->resetInputFields(); // Reset input fields after updating record.
    // }

    // public function delete($id) // Delete a record
    // {
    //      Model::find($id)->delete();
    //      session()->flash('message', 'Record deleted successfully.');
    //  }

    //  private function resetInputFields(){
    //      $this->name = '';
    //  }

    public function render()
    {
        return view('livewire.dashboard.dashboard-ipd')->layout('livewire.layouts.base');
    }
}
