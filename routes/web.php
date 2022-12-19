<?php

use App\Http\Livewire\AdminDashboard;
use App\Http\Livewire\AdminLogIn;
use App\Http\Livewire\ClientDashborad;
use App\Http\Livewire\ClientLoanRepayments;
use App\Http\Livewire\ClientLoanSchedules;
use App\Http\Livewire\InvestmentAppreciation;
use App\Http\Livewire\InvestmentDepositSchedules;
use App\Http\Livewire\InvestmentSchedule;
use App\Http\Livewire\InvestorAccounts;
use App\Http\Livewire\InvestorDashboard;
use App\Http\Livewire\InvestorInvestmentAppreciation;
use App\Http\Livewire\InvestorLoagins;
use App\Http\Livewire\InvestorSavingsRecords;
use App\Http\Livewire\LoanRepayments;
use App\Http\Livewire\LoanRepaymentSchedule;
use App\Http\Livewire\LoansRecords;
use App\Http\Livewire\LoginPage;
use App\Http\Livewire\Logins;
use App\Http\Livewire\RegisterPage;
use App\Http\Livewire\SavingsAccounts;
use App\Http\Livewire\UserLoginCreate;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/Register',RegisterPage::class)->name('Register');
Route::get('/',LoginPage::class)->name('Login');
Route::get('/Admin',AdminLogIn::class)->name('Admin');
Route::get('/AdminDashboard',AdminDashboard::class)->name('AdminDashboard');
Route::get('/clientlogout',[LoginPage::class,'logouts'])->name('clientlogout');
Route::get('/adminlogout',[AdminLogIn::class,'logouts'])->name('adminlogout');
Route::get('/Loansrecord',LoansRecords::class)->name('Loansrecord');
Route::get('/InvestorSavings',InvestorSavingsRecords::class)->name('InvestorSavings');
Route::get('/SavingsAccounts',SavingsAccounts::class)->name('SavingsAccounts');
Route::get('/InvestorAccounts',InvestorAccounts::class)->name('InvestorAccounts');
Route::get('/LoanRepayments',LoanRepayments::class)->name('LoanRepayments');
Route::get('/CreateUsers',UserLoginCreate::class)->name('CreateUsers');
Route::get('/InvestmentSchedule',InvestmentSchedule::class)->name('InvestmentSchedule');
Route::get('/InvestmentAppreciation',InvestmentAppreciation::class)->name('InvestmentAppreciation');
Route::get('/InvestorLogins',InvestorLoagins::class)->name('InvestorLogins');
Route::get('/RepaymentSchedule',LoanRepaymentSchedule::class)->name('RepaymentSchedule');
Route::get('/ClientDashboard',ClientDashborad::class)->name('ClientDashboard');
Route::get('/ClientLoanSchedules',ClientLoanSchedules::class)->name('ClientLoanSchedules');
Route::get('/ClientLoanRepayments',ClientLoanRepayments::class)->name('ClientLoanRepayments');
Route::get('/InvestorDashboard',InvestorDashboard::class)->name('InvestorDashboard');
Route::get('/InvestmentDepositSchedules',InvestmentDepositSchedules::class)->name('InvestmentDepositSchedules');
Route::get('/InvestorInvestmentAppreciation',InvestorInvestmentAppreciation::class)->name('InvestorInvestmentAppreciation');
Route::get('/Logins',Logins::class)->name('Logins');
Route::get('/LoginsApprove',[Logins::class,'ApproveLogins'])->name('LoginsApprove');
/*Route::get('/', function () {
    return view('welcome');
});*/
