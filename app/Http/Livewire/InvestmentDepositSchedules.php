<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use App\Models\CompanyNames;
use App\Models\InvestmentScheduleModel;
use Livewire\Component;

class InvestmentDepositSchedules extends Component
{
    public function render(Request $request)
    {   $companynames=CompanyNames::all();
        $accountnumber=$request->session()->get('finance_client_data.AccountNumber');
        $investmentschedule=InvestmentScheduleModel::where('AccountNo',$accountnumber)->orderby('TransactionID','Desc')->get();
        return view('livewire.investment-deposit-schedules',['investmentschedule'=>$investmentschedule,'companynames'=>$companynames])->layout('layouts.base');
    }
}
