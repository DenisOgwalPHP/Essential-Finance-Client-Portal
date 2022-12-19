<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use App\Models\AdminLoginModel;
use App\Models\CompanyNames;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Logins extends Component
{
    public $Buttonid;
    public $myid;
    
    public function ApproveLogins(Request $request){
        $ids=$request->input('myid');
    
        $user= AdminLoginModel::findOrFail($ids);
        $user=AdminLoginModel::where('ID', $ids)->update(['Approval' =>'Approved']);
        $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'the number is'.$ids]);
        return redirect()->to('/Logins');
    }
    public function render(Request $request)
    {
        $ids=$request->input('myid');
        $loginss=AdminLoginModel::all();
        $companynames=CompanyNames::all();
        return view('livewire.logins',['loginss'=>$loginss,'companynames'=>$companynames])->layout('layouts.base');
    }
}
