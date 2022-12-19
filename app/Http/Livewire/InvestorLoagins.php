<?php

namespace App\Http\Livewire;
use App\Models\CompanyNames;
use App\Models\InvestorAccountsModel;
use App\Models\InvestorLoginsModel;
use Livewire\Component;

class InvestorLoagins extends Component
{
    public $Fullnames;
    public $Username;
    public $password;
    public $email;
    public $confirmpassword;
    public $accountno;
    public function updated($fileds){
        $this->validateOnly($fileds,[
            'Fullnames' => 'required|min:8',
            'Username' => 'required|min:6',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'confirmpassword'=>'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'accountno'=>'required|min:6',
            'email' => 'required|email',
        ]);
    }
    public function submit()
    {
       
       $data = $this->validate([
            'Fullnames' => 'required|min:6',
            'Username' => 'required|min:6',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'confirmpassword'=>'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'accountno'=>'required|min:6',
            'email' => 'required|email',
        ]);
        if($this->password==$this->confirmpassword){
        $UserRegistrationModel= new InvestorLoginsModel();
        $UserRegistrationModel->Username = $this->Username;
        $UserRegistrationModel->Password = md5($this->password);
        $UserRegistrationModel->FullNames = $this->Fullnames;
        $UserRegistrationModel->AccountNumber = $this->accountno;
        $UserRegistrationModel->Email = $this->email;
        $UserRegistrationModel->AccountType = 'Investor';
        $UserRegistrationModel->save();
        $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'User Created Successfully!']);
        $this->Username="";
        $this->password="";
        $this->Fullnames="";
        $this->accountno="";
        $this->email="";
        $this->confirmpassword="";
        //return redirect()->to('/Admin');
        
        }else{
            $this->dispatchBrowserEvent('alert', ['type' => 'error',  'message' => 'Password Does not match confirm Password!']);  
        }
        //dd($this->name,$this->email,$this->password,$this->phonenum,'Progress');
    }
    public function render()
    {
        $companynames=CompanyNames::all();
        $investoraccounts=InvestorAccountsModel::all();
        return view('livewire.investor-loagins',['investoraccounts'=>$investoraccounts,'companynames'=>$companynames])->layout('layouts.base');
    }
}
