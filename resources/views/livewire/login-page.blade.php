
<section class="vh-100" style="background-color: #3352ff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-6">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <!--<div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="{{--asset('images/login 1.jpg')--}}" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;height:515px;"  />
              </div>-->
              <div class="col-md-12 col-lg-12 d-flex align-items-center">
                <div class="card-body p-4 p-lg-3 text-black">
  
                  <form wire:submit.prevent="signin">
                    @csrf
                    <div class="d-flex justify-content-center align-items-center mb-1 pb-1">
                        <img src="{{asset('images/logo.jpg')}}" alt="Logo" style='Height:100px;width:100px;'>
                      <span class="h1 fw-bold mb-0">@foreach ($companynames as $companynames )
                        {{$companynames->CompanyName}}
                    @endforeach</span>
                    </div>
  
                    <h5 class="fw-normal mb-3 pb-3 d-flex justify-content-center align-items-center" style="letter-spacing: 1px;">Sign into your account</h5>
  
                    <div class="form-outline mb-2">
                      @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                      <input type="text" name="email" wire:model="email" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example17">Username</label>
                    </div>
  
                    <div class="form-outline mb-2">
                      @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                      <input type="password" name="password"  wire:model="password" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example27">Password</label>
                    </div>
  
                    <div class="pt-1 mb-2 d-flex justify-content-center align-items-center">
                      <button class="btn btn-primary btn-lg" type="submit">Login</button>
                    </div>
  
                    
                    <p class="mb-2 pb-lg-2 d-flex justify-content-center align-items-center" style="color: #393f81;"> 
                      <a class="small text-muted" href="#!">Forgot password?</a> 
                      <!--Don't have an account? <a href="/Register" style="color: #393f81;">Register here</a>-->
                      </p>
                      <!--<p class="mb-2 pb-lg-2">
                    <a href="/TermsAndConditions" class="small text-muted">Terms of use.</a>
                    <a href="/privacypolicy" class="small text-muted">Privacy policy</a>
                    <a href="/" class="small text-muted">Home</a>
                      </p>-->
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>