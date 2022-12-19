<?php

namespace App\Http\Livewire;
use App\Models\InvestorModel;
use App\Models\CompanyNames;
use Livewire\Component;

class InvestorSavingsRecords extends Component
{
    public function render()
    {
        $companynames=CompanyNames::all();
        $investorsavings=InvestorModel::all();
        return view('livewire.investor-savings-records',['investorsavings'=>$investorsavings,'companynames'=>$companynames])->layout('layouts.base');
    }
}
