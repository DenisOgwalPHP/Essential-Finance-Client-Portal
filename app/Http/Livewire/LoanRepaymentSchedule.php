<?php

namespace App\Http\Livewire;
use App\Models\CompanyNames;
use App\Models\RepaymentScheduleModel;
use Livewire\Component;

class LoanRepaymentSchedule extends Component
{
    public function render()
    {
        $companynames=CompanyNames::all();
        $repaymentschedule=RepaymentScheduleModel::all();
        return view('livewire.loan-repayment-schedule',['repaymentschedule'=>$repaymentschedule,'companynames'=>$companynames])->layout('layouts.base');
    }
}
