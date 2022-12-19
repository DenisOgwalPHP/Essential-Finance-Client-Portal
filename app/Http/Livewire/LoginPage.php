<?php

namespace App\Http\Livewire;
use App\Models\LoginModel;
use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\CompanyNames;
class LoginPage extends Component
{
    public $email;
    public $password;
    public function updated($fileds){
        $this->validateOnly($fileds,[
            'email' => 'required|min:6',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
        ]);
    }
    public function signin(Request $request)
    {
       
       $this->validate([
            'email' => 'required|min:6',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
        ]);
        $login=LoginModel::where('Username',$this->email);
        $collection=$login;
        if($login->first()){
             $plucked = $collection->pluck('Password')->first();
             $plucked2 = $collection->pluck('AccountType')->first();
            if($plucked==md5($this->password)){
            $request->session()->put('finance_client_data',$login->first());
            $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'User Login Successfully!']);
            if($plucked2=='Savings'){
            return redirect()->to('ClientDashboard');
            }else if($plucked2=='Investor'){
                return redirect()->to('InvestorDashboard');
            }
            }else{
                $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' =>'Login Password Does not Match Registered Password']);  
            }
        }else{
            $this->dispatchBrowserEvent('alert', ['type' => 'error',  'message' => 'Account Does not Exist!']);  
    }
        //dd($this->name,$this->email,$this->password,$this->phonenum,'Progress');
    }
    public function logouts(Request $request){
        if($request->session()->has('finance_client_data')){
        $request->session()->forget('finance_client_data');
        $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'User Logout Successful!']);
        return redirect()->to('/');
        }
    }
    public function render()
    {
        $companynames=CompanyNames::all();
        return view('livewire.login-page',['companynames'=>$companynames])->layout('layouts.base');
    }
}
