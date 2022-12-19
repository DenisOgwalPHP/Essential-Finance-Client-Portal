<?php

namespace App\Http\Livewire;

use App\Models\CompanyNames;
use App\Models\SavingsModel;
use Livewire\Component;

class AdminDashboard extends Component
{
    public function render()
    {
        $savings=SavingsModel::all();
        $companynames=CompanyNames::all();
        return view('livewire.admin-dashboard',['savings'=>$savings,'companynames'=>$companynames])->layout('layouts.base');
    }
}
