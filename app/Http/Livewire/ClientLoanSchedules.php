<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use App\Models\CompanyNames;
use App\Models\RepaymentScheduleModel;
use Livewire\Component;

class ClientLoanSchedules extends Component
{
    public function render(Request $request)
    {
        $companynames=CompanyNames::all();
        $accountnumber=$request->session()->get('finance_client_data.AccountNumber');
        $repaymentschedule=RepaymentScheduleModel::where('AccountNo',$accountnumber)->orderby('TransactionID','Desc')->get();
        return view('livewire.client-loan-schedules',['repaymentschedule'=>$repaymentschedule,'companynames'=>$companynames])->layout('layouts.base');
    }
}
