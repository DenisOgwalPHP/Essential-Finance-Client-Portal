<?php

namespace App\Http\Livewire;
use App\Models\UserRegistrationModel;
use Livewire\Component;
use App\Models\CompanyNames;
class RegisterPage extends Component
{
    public $name;
    public $Username;
    public $password;
    public $confirmpassword;
    public function updated($fileds){
        $this->validateOnly($fileds,[
            'name' => 'required|min:6',
            'Username' => 'required|min:6',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'confirmpassword'=>'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
        ]);
    }
    public function submit()
    {
       
       $data = $this->validate([
            'name' => 'required|min:6',
            'Username' => 'required|min:6',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'confirmpassword'=>'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
        ]);
        if($this->password==$this->confirmpassword){
        $UserRegistrationModel= new UserRegistrationModel();
        $UserRegistrationModel->FullNames = $this->name;
        $UserRegistrationModel->Username = $this->Username;
        $UserRegistrationModel->Password = md5($this->password);
        $UserRegistrationModel->save();
        $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'User Created Successfully!']);
        return redirect()->to('/Admin');
        }else{
            $this->dispatchBrowserEvent('alert', ['type' => 'error',  'message' => 'Password Does not match confirm Password!']);  
        }
        //dd($this->name,$this->email,$this->password,$this->phonenum,'Progress');
    }
    public function render()
    {
        $companynames=CompanyNames::all();
        return view('livewire.register-page',['companynames'=>$companynames])->layout('layouts.base');
    }
}
