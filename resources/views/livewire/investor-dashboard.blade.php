<nav id="navbar_top" class="navbar navbar-expand-custom navbar-mainbg">
    <a class="navbar-brand navbar-logo" href="/InvestorDashboard">@foreach ($companynames as $companynames )
        {{$companynames->CompanyName}}
    @endforeach</a>
    <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-center align-items-center" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
            <li class="nav-item active">
                <a class="nav-link" href="/InvestorDashboard"><i class="fas fa-tachometer-alt"></i>Investment Plan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/InvestmentDepositSchedules"><i class="far fa-clone"></i>Investment Deposit Schedules</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/InvestorInvestmentAppreciation"><i class="far fa-calendar-alt"></i>Investment Appreciation </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/clientlogout"><i class="far fa-chart-bar"></i>Logout</a>
            </li>
            
        </ul>
    </div>
</nav>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{session()->get('finance_client_data.FullNames')}} Investment Plans Records  </h3></div>
              </div>
              <div class="card-body" style="overflow-x: scroll;">
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Trans. ID </th>
                            <th>Sav. ID </th>
                            <th>Account No</th>
                            <th>Account Name</th>
                            <th>Date</th>
                            <th>Deposit</th>
                            <th>Account Balance</th>
                            <th>Transactions</th>
                            <th>Payment Mode</th>
                            <th>Deposit Date</th>
                            <th>Interest Rate</th>
                            <th>Maturity Period</th>
                            <th>Deposit Interval</th>
                            <th>Investment Plan</th>
                            <th>Branch</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($investorsavings as $investorsavings)
                        <tr>
                            <td>{{$investorsavings->TransactionID}}</td>
                            <td>{{$investorsavings->SavingsID}}</td>
                            <td>{{$investorsavings->AccountNo}}</td>
                            <td>{{$investorsavings->AccountName}}</td>
                            <td>{{$investorsavings->Date}}</td>
                            <td>{{$investorsavings->Deposit}}</td>
                            <td>{{$investorsavings->Accountbalance}}</td>
                            <td>{{$investorsavings->Transactions}}</td>
                            <td>{{$investorsavings->ModeOfPayment}}</td>
                            <td>{{$investorsavings->DepositDate}}</td>
                            <td>{{$investorsavings->InterestRate}}</td>
                            <td>{{$investorsavings->MaturityPeriod}}</td>
                            <td>{{$investorsavings->DepositInterval}}</td>
                            <td>{{$investorsavings->InvestmentPlan}}</td>
                            <td>{{$investorsavings->Branch}}</td>
                        </tr>
                        @endforeach
                
                
                    </tbody>
                    
                </table>
</div>
</div>


</div>
</div>
</div>
</div>