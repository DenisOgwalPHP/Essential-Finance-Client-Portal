<?php

namespace App\Http\Livewire;
use App\Models\InvestmentAppreciationModel;
use Illuminate\Http\Request;
use App\Models\CompanyNames;
use Livewire\Component;

class InvestorInvestmentAppreciation extends Component
{
    public function render(Request $request)
    {
        $companynames=CompanyNames::all();
        $accountnumber=$request->session()->get('finance_client_data.AccountNumber');
        $investmentappreciation=InvestmentAppreciationModel::where('AccountNo',$accountnumber)->where('AppreciationAmount','>',0)->orderby('TransactionID','Desc')->get();
        return view('livewire.investor-investment-appreciation',['investmentappreciation'=>$investmentappreciation,'companynames'=>$companynames])->layout('layouts.base');
    }
}
