<?php

namespace App\Http\Livewire;
use App\Models\SavingsAccountsModel;
use Livewire\Component;
use App\Models\CompanyNames;
class SavingsAccounts extends Component
{
    
    public function render()
    {
        $companynames=CompanyNames::all();
        $savingsaccounts=SavingsAccountsModel::all();
        return view('livewire.savings-accounts',['savingsaccounts'=>$savingsaccounts,'companynames'=>$companynames])->layout('layouts.base');
    }
}
