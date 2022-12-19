<div>
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
            <li class="nav-item">
                <a class="nav-link" href="/LoanRepayments"><i class="far fa-calendar-alt"></i>Loan Repayments </a>
            </li>
            <li class="nav-item active">
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
                <h3 class="card-title">Admin Logins Records 
                    </div>
              </div>
              <div class="card-body" style="overflow-x: scroll;">
<table id="example" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Registration Date </th>
            <th>Username </th>
            <th>Full Names</th>
            <th>Approval</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($loginss as $loginss)
        <tr>
            <td>{{$loginss->RegistrationDate}}</td>
            <td>{{$loginss->Username}}</td>
            <td>{{$loginss->FullNames}}</td>
            <td>@if($loginss->Approval=="Approved"){{$loginss->Approval}}
            @else
            
                <a href="{{route('LoginsApprove',['myid'=>$loginss->ID])}}"><button class="btn btn-primary" id="Buttonid" name="Buttonid" value="{{$loginss->ID}}" type="Submit">Approve</button></a>
        
            @endif
            </td>
        </tr>
        {{--action="{{route('LoginsApprove',['loginslug'=>$loginss->ID])}}--}}
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