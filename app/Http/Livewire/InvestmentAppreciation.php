<?php

namespace App\Http\Livewire;
use App\Models\CompanyNames;
use App\Models\InvestmentAppreciationModel;
use Livewire\Component;

class InvestmentAppreciation extends Component
{
    public function render()
    {
        $companynames=CompanyNames::all();
        //where('Accountbalance' );
        $investmentappreciation=InvestmentAppreciationModel::where('AppreciationAmount','>',0)->get();
        return view('livewire.investment-appreciation',['investmentappreciation'=>$investmentappreciation,'companynames'=>$companynames])->layout('layouts.base');
    }
}
