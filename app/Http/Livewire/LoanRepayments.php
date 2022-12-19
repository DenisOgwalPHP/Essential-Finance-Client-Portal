<?php

namespace App\Http\Livewire;

use App\Models\LoanRepaymentsModel;
use Livewire\Component;
use App\Models\CompanyNames;
class LoanRepayments extends Component
{
    public function render()
    {
        $companynames=CompanyNames::all();
        $loanrepayments=LoanRepaymentsModel::all();
        return view('livewire.loan-repayments',['loanrepayments'=>$loanrepayments,'companynames'=>$companynames])->layout('layouts.base');
    }
}
