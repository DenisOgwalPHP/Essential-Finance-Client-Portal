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
            <li class="nav-item active">
                <a class="nav-link" href="/AdminDashboard"><i class="fas fa-tachometer-alt"></i>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/SavingsAccounts"><i class="far fa-address-book"></i>Savings Accounts</a>
            </li>
            <li class="nav-item">
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

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Client Loans Records &nbsp;<a href="/AdminDashboard"><button class="btn btn-success" style="float: right;">Savings Record</button></a>
        <a href="/InvestorSavings"><button class="btn btn-warning" style="float: right;">Investor Record</button></a></h3>
    </div>
    <div class="card-body" style="overflow-x: scroll;">
<table id="example" class="table table-striped table-bordered" >
<thead>
<tr>
  <th>Transaction ID </th>
  <th>Loan ID </th>
  <th>Account No.</th>
  <th>Account Name</th>
  <th>Application Date</th>
  <th>Servicing Period</th>
  <th>Repayment Interval</th>
  <th>Loan Amount</th>
  <th>Int. Rate</th>
  <th>Registered by</th>
  <th>Method</th>
  <th>Loan Type</th>
  <th>Branch</th>
</tr>
</thead>
<tbody>
@foreach ($loans as $loans)
<tr>
  <td>{{$loans->TransactionID}}</td>
  <td>{{$loans->LoanID }}</td>
  <td>{{$loans->AccountNo}}</td>
  <td>{{$loans->AccountNames}}</td>
  <td>{{$loans->ApplicationDate}}</td>
  <td>{{$loans->ServicingPeriod}}</td>
  <td>{{$loans->RepaymentInterval}}</td>
  <td>{{$loans->LoanAmount}}</td>
  <td>{{$loans->Interest}}</td>
  <td>{{$loans->RegisteredBy}}</td>
  <td>{{$loans->IssueType}}</td>
  <td>{{$loans->LoanType}}</td>
  <td>{{$loans->Branch}}</td>
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