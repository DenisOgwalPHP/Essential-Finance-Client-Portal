<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use App\Models\AdminLoginModel;
use App\Models\CompanyNames;
use Livewire\Component;

class AdminLogIn extends Component
{
    public $Username;
    public $password;
    public function updated($fileds){
        $this->validateOnly($fileds,[
            'Username' => 'required|min:6',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
        ]);
    }
    public function signin(Request $request)
    {
       
       $this->validate([
            'Username' => 'required|min:6',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
        ]);
        $login=AdminLoginModel::where('Username',$this->Username)->where('Approval','Approved');
        $collection=$login;
        if($login->first()){
             $plucked = $collection->pluck('Password')->first();
            if($plucked==md5($this->password)){
            $request->session()->put('financeadmin_data',$login->first());
            $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'User Login Successfully!']);
            return redirect()->to('/AdminDashboard');
            }else{
                $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' =>'Login Password Does not Match Registered Password']);  
            }
        }else{
            $this->dispatchBrowserEvent('alert', ['type' => 'error',  'message' => 'Account Does not Exist!']);  
    }
        //dd($this->name,$this->email,$this->password,$this->phonenum,'Progress');
    }
    public function logouts(Request $request){
        if($request->session()->has('financeadmin_data')){
        $request->session()->forget('financeadmin_data');
        $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'User Logout Successful!']);
        return redirect()->to('/Admin');
        }
    }
    public function render()
    {
        $companynames=CompanyNames::all();
        return view('livewire.admin-log-in',['companynames'=>$companynames])->layout('layouts.base');
    }
    
}
