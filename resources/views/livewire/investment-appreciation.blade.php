<nav id="navbar_top" class="navbar navbar-expand-custom navbar-mainbg">
    <a class="navbar-brand navbar-logo" href="/AdminDashboard">@foreach ($companynames as $companynames )
        {{$companynames->CompanyName}}
    @endforeach</a>
    <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-center align-items-center" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
            <li class="nav-item">
                <a class="nav-link" href="/AdminDashboard"><i class="fas fa-tachometer-alt"></i>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/SavingsAccounts"><i class="far fa-address-book"></i>Savings Accounts</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/InvestorAccounts"><i class="far fa-clone"></i>Investor Accounts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/LoanRepayments"><i class="far fa-calendar-alt"></i>Loans</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Logins"><i class="far fa-calendar-alt"></i>Logins</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/adminlogout"><i class="far fa-chart-bar"></i>Logout</a>
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
                <h3 class="card-title">Investment Cumulation Records &nbsp;<a href="/InvestorLogins"><button class="btn btn-success" style="float: right;">Create Logins</button></a>
                <a href="/InvestmentAppreciation"><button class="btn btn-warning" style="float: right;">Investment Appreciation</button></a>
                <a href="/InvestmentSchedule"><button class="btn btn-danger" style="float: right;">Investment Schedule</button></a>
            </div>
              <div class="card-body" style="overflow-x: scroll;">
<table id="example" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Reg. No </th>
            <th>Date</th>
            <th>Installment</th>
            <th>Investment ID</th>
            <th>Account Number </th>
            <th>Account Name</th>
            <th>Deposit</th>
            <th>Appreciation Amount</th>
            <th>Account Balance</th>
            <th>Next Appreciation Date</th>
            <th>Paid Out</th>
            <th>Appreciated</th>
            <th>Branch</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($investmentappreciation as $investmentappreciation)
        <tr>
            <td>{{$investmentappreciation->TransactionID}}</td>
            <td>{{$investmentappreciation->Date}}</td>
            <td>{{$investmentappreciation->Installment}}</td>
            <td>{{$investmentappreciation->SavingsID}}</td>
            <td>{{$investmentappreciation->AccountNo}}</td>
            <td>{{$investmentappreciation->AccountName}}</td>
            <td>{{$investmentappreciation->Deposit}}</td>
            <td>{{$investmentappreciation->AppreciationAmount}}</td>
            <td>{{$investmentappreciation->Accountbalance}}</td>
            <td>{{$investmentappreciation->NextAppreciationDate}}</td>
            <td>{{$investmentappreciation->PaidOut}}</td>
            <td>{{$investmentappreciation->Appreciated}}</td>
            <td>{{$investmentappreciation->Branch}}</td>
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