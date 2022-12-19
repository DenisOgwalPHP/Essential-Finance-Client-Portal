<?php

namespace App\Http\Livewire;
use App\Models\CompanyNames;
use App\Models\InvestorModel;
use Illuminate\Http\Request;
use Livewire\Component;

class InvestorDashboard extends Component
{
    public function render(Request $request)
    {
        $companynames=CompanyNames::all();
        $accountnumber=$request->session()->get('finance_client_data.AccountNumber');
        $investorsavings=InvestorModel::where('AccountNo',$accountnumber)->get();
        return view('livewire.investor-dashboard',['investorsavings'=>$investorsavings,'accountnumber'=>$accountnumber,'companynames'=>$companynames])->layout('layouts.base');
    }
}
