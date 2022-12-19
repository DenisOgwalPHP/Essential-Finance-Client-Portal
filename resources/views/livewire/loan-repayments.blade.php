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
            <li class="nav-item">
                <a class="nav-link" href="/InvestorAccounts"><i class="far fa-clone"></i>Investor Accounts</a>
            </li>
            <li class="nav-item  active">
                <a class="nav-link" href="/LoanRepayments"><i class="far fa-calendar-alt"></i>Loan Repayments </a>
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
                <h3 class="card-title">Loan Repayment Records &nbsp;<a href="/RepaymentSchedule"><button class="btn btn-success" style="float: right;">Loan Repayment Schedules</button></a>
                    <!--<a href="/InvestorSavings"><button class="btn btn-warning" style="float: right;">Assign Investor</button>--></a></h3></div>
              </div>
              <div class="card-body" style="overflow-x: scroll;">
<table id="example" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Repayment ID </th>
            <th>Repayment Date</th>
            <th>LoanID</th>
            <th>Account ID</th>
            <th>Repayment Installment</th>
            <th>Amount Paid </th>
            <th>Due </th> 	
            <th>Received By</th>
            <th>Branch</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($loanrepayments as $loanrepayments)
        <tr>
            <td>{{$loanrepayments->RepaymentID}}</td>
            <td>{{$loanrepayments->Repaymentdate}}</td>
            <td>{{$loanrepayments->LoanID}}</td>
            <td>{{$loanrepayments->MemberID}}</td>
            <td>{{$loanrepayments->RepayMonths}}</td>
            <td>{{$loanrepayments->AmmountPaid}}</td>
            <td>{{$loanrepayments->Balance}}</td>
            <td>{{$loanrepayments->CashierName}}</td>
            <td>{{$loanrepayments->InsBranch}}</td>
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