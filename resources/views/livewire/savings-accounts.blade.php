<div class="livefeed">
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
            <li class="nav-item  active">
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
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Client Savings Accounts Records &nbsp;<a href="/CreateUsers"><button type="button" class="btn btn-success" style="float: right;">Create Logins</button></a>
              </div>
              <div class="card-body" style="overflow-x: scroll;">
<table id="example" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Reg. No </th>
            <th>Account Number </th>
            <th>Account Name</th>
            <th>Registration Date</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Marital Status</th>
            <th>Nationality</th>
            <th>Nationality Status </th>
            <th>ID Form</th>
            <th>Client ID</th>
            <th>Contact No</th>
            <th>Contact No 1</th>
            <th>Office No</th>
            <th>Email</th>
            <th>Physical Address</th>
            <th>Postal Address</th>
            <th>Bank Name</th>
            <th>BankAccountName</th>
            <th>BankAccountNumber</th>
            <th>NOK Name</th>
            <th>NOK Contact No</th>
            <th>NOK Address</th>
            <th>NOK Relationship</th>
            <th>Designation</th>
            <th>Employer Name</th>
            <th>Branch</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($savingsaccounts as $savingsaccounts)
        <tr>
            <td>{{$savingsaccounts->TransactionID}}</td>
            <td>{{$savingsaccounts->AccountNumber}}</td>
            <td>{{$savingsaccounts->AccountNames}}</td>
            <td>{{$savingsaccounts->RegistrationDate}}</td>
            <td>{{$savingsaccounts->Gender}}</td>
            <td>{{$savingsaccounts->DOB}}</td>
            <td>{{$savingsaccounts->MaritalStatus}}</td>
            <td>{{$savingsaccounts->Nationality}}</td>
            <td>{{$savingsaccounts->NationalityStatus}}</td>
            <td>{{$savingsaccounts->IDForm}}</td>
            <td>{{$savingsaccounts->ClientID}}</td>
            <td>{{$savingsaccounts->ContactNo}}</td>
            <td>{{$savingsaccounts->ContactNo1}}</td>
            <td>{{$savingsaccounts->OfficeNo}}</td>
            <td>{{$savingsaccounts->Email}}</td>
            <td>{{$savingsaccounts->PhysicalAddress}}</td>
            <td>{{$savingsaccounts->PostalAddress}}</td>
            <td>{{$savingsaccounts->BankName}}</td>
            <td>{{$savingsaccounts->BankAccountName}}</td>
            <td>{{$savingsaccounts->BankAccountNumber}}</td>
            <td>{{$savingsaccounts->NOKName}}</td>
            <td>{{$savingsaccounts->NOKContactNo }}</td>
            <td>{{$savingsaccounts->NOKAddress}}</td>
            <td>{{$savingsaccounts->NOKRelationship}}</td>
            <td>{{$savingsaccounts->Designation}}</td>
            <td>{{$savingsaccounts->EmployerName}}</td>
            <td>{{$savingsaccounts->Branch}}</td>
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
</div>