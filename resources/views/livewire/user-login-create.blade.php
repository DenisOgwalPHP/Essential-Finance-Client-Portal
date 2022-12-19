
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
<section class="vh-100" >
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-7">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-3">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-12 order-2 order-lg-1">
  
                  <p class="text-center h2 fw-bold mb-3 mx-1 mx-md-4 mt-0">
                    Create User Account</p>
                
                    <form wire:submit.prevent="submit">
                        @csrf
                     
                        <div class="d-flex flex-row align-items-center mb-1">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              @error('Fullnames') <span class="text-danger">{{ $message }}</span> @enderror
                              <input type="text"  class="form-control" name="Fullnames" wire:model="Fullnames"/>
                              <label class="form-label" for="form3Example3c">Full Names</label>
                            </div>
                          </div>  
                        <div class="d-flex flex-row align-items-center mb-1">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              @error('Username') <span class="text-danger">{{ $message }}</span> @enderror
                              <input type="text"  class="form-control" name="Username" wire:model="Username"/>
                              <label class="form-label" for="form3Example3c">Username</label>
                            </div>
                          </div> 
                          
                          <div class="d-flex flex-row align-items-center mb-1">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                              <input type="email" class="form-control" name="email"  wire:model="email"/>
                              <label class="form-label" for="form3Example4c">Email</label>
                            </div>
                          </div>
            
                          <div class="d-flex flex-row align-items-center mb-1">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                              <input type="password" class="form-control" name="password"  wire:model="password"/>
                              <label class="form-label" for="form3Example4c">Password</label>
                            </div>
                          </div>
            
                          <div class="d-flex flex-row align-items-center mb-1">
                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              @error('confirmpassword') <span class="text-danger">{{ $message }}</span> @enderror
                              <input type="password"  class="form-control" name="confirmpassword" wire:model="confirmpassword"/>
                              <label class="form-label" for="form3Example4cd">Repeat your password</label>
                            </div>
                          </div>
            
                          <div class="d-flex flex-row align-items-center mb-1">
                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              @error('accountno') <span class="text-danger">{{ $message }}</span> @enderror
                              <select class="form-select" name="accountno" wire:model="accountno" aria-label="Default select example">
                                @foreach ($savingsaccounts as $savingsaccount)
                                <option selected>Select Here</option>
                                <option value="{{$savingsaccount->AccountNumber}}">{{$savingsaccount->AccountNumber}}</option>
                                @endforeach
                              </select>
                              <label class="form-label" for="form3Example4cd">Select Account Number</label>
                            </div>
                          </div>
            
                      <div class="modal-footer">
                        <span x-on:closemodal.window="on = false" ><button type="submit" class="btn btn-primary">Save changes</button></span>
                      </div>
                      </form>
                </div>
              <!--  <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
  
                    <img src="{{--asset('images/Register Image 2.jpg')--}}" class="img-fluid" alt="Sample image" style="height:600px;">
  
                </div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  