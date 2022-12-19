<?php

namespace App\Http\Livewire;
use App\Models\CompanyNames;
use App\Models\InvestmentScheduleModel;
use Livewire\Component;

class InvestmentSchedule extends Component
{
    public function render()
    {
        $companynames=CompanyNames::all();
        $investmentschedule=InvestmentScheduleModel::all();
        return view('livewire.investment-schedule',['investmentschedule'=>$investmentschedule,'companynames'=>$companynames])->layout('layouts.base');
    }
}
