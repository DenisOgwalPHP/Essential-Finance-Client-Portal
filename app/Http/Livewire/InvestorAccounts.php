<?php

namespace App\Http\Livewire;
use App\Models\CompanyNames;
use App\Models\InvestorAccountsModel;
use Livewire\Component;

class InvestorAccounts extends Component
{
    public function render()
    {
        $companynames=CompanyNames::all();
        $investoraccount=InvestorAccountsModel::all();
        return view('livewire.investor-accounts',['investoraccount'=>$investoraccount,'companynames'=>$companynames])->layout('layouts.base');
    }
}
