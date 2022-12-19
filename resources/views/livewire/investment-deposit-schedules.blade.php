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
            <li class="nav-item">
                <a class="nav-link" href="/InvestorDashboard"><i class="fas fa-tachometer-alt"></i>Investment Plan</a>
            </li>
            <li class="nav-item active">
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
                <h3 class="card-title">{{session()->get('finance_client_data.FullNames')}} Investment Schedule Records  </h3></div>
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
                            <th>Interest</th>
                            <th>Cumulation</th>
                            <th>PaymentStatus</th>
                            <th>Branch</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($investmentschedule as $investmentschedule)
                        <tr>
                            <td>{{$investmentschedule->TransactionID}}</td>
                            <td>{{$investmentschedule->PaymentDate}}</td>
                            <td>{{$investmentschedule->Months}}</td>
                            <td>{{$investmentschedule->InvestmentID}}</td>
                            <td>{{$investmentschedule->AccountNo}}</td>
                            <td>{{$investmentschedule->AccountName}}</td>
                            <td>{{$investmentschedule->AmmountPay}}</td>
                            <td>{{$investmentschedule->InterestEarned}}</td>
                            <td>{{$investmentschedule->Cumulation}}</td>
                            <td>{{$investmentschedule->PaymentStatus}}</td>
                            <td>{{$investmentschedule->Branch}}</td>
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