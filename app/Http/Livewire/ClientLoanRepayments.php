<?php

namespace App\Http\Livewire;
use App\Models\LoanRepaymentsModel;
use Illuminate\Http\Request;
use App\Models\CompanyNames;
use Livewire\Component;

class ClientLoanRepayments extends Component
{
    public function render(Request $request)
    {
        $companynames=CompanyNames::all();
        $accountnumber=$request->session()->get('finance_client_data.AccountNumber');
        $loanrepayments=LoanRepaymentsModel::where('MemberID',$accountnumber)->get();
        return view('livewire.client-loan-repayments',['loanrepayments'=>$loanrepayments,'companynames'=>$companynames])->layout('layouts.base');
    }
}
