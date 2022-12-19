<?php

namespace App\Http\Livewire;
use App\Models\LoansModel;
use Livewire\Component;
use App\Models\CompanyNames;
class LoansRecords extends Component
{
    public function render()
    {
        $companynames=CompanyNames::all();
        $loans=LoansModel::all();
        return view('livewire.loans-records',['loans'=>$loans,'companynames'=>$companynames])->layout('layouts.base');
    }
}
