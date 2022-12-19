<?php

namespace App\Http\Livewire;

use App\Models\SavingsModel;
use Illuminate\Http\Request;
use App\Models\CompanyNames;
use Livewire\Component;

class ClientDashborad extends Component
{
    public function render(Request $request)
    {
        $companynames=CompanyNames::all();
        $accountnumber=$request->session()->get('finance_client_data.AccountNumber');
        $savings=SavingsModel::where('AccountNo',$accountnumber)->get();
        return view('livewire.client-dashborad',['savings'=>$savings,'accountnumber'=>$accountnumber,'companynames'=>$companynames])->layout('layouts.base');
    }
}
