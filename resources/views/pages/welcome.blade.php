@extends('layouts.app')

@section('content')

<body class="welcome-background">
    <div class="container-fluid">
        <div class="welcome-overlay">

          <div class="weather-box text-center">
              <h1>15 c</h1>
              <h5>Solna</h5>
          </div>

          <div class="date-box text-center">
              <h1>15:00</h1>
          </div>

          <div class="copyright-box text-center">
              <p>Copyright 2018 Toni AB</p>
          </div>

            <div class="col-lg-12" id="welcome-box">
                <div class="row">

                    <div class="col-lg-12 text-center">
                        <button class="welcome-button mr-3" id="login">LOGIN</button>
                        <button class="welcome-button ml-3" id="register">REGISTER</button>
                    </div>

                </div>
            </div>

            <div class="col-lg-12" id="login-box">
                <div class="row">
                    <div class="col-lg-12">

                      <form action="/login" method="post">
                          {{ csrf_field() }}
                          <div class="col-sm-4 welcome-input-box">
                              <div class="row">
                                  <div class="col-sm-10 center form-inline" style="margin-top: 80px;">
                                      <h4 class="welcome-text login">LOGIN |</h4>
                                      <h4 class="welcome-text login-not" id="register-change">&nbsp;REGISTER</h4>
                                  </div>
                              </div>

                              <div class="row mt-2">
                                  <div class="col-sm-10 center">
                                      <label class="welcome-label mb-0">Enter email</label>
                                      <input class="welcome-input" name="email">
                                  </div>
                              </div>

                              <div class="row mt-3">
                                  <div class="col-sm-10 center">
                                      <label class="welcome-label mb-0">Enter password</label>
                                      <input class="welcome-input" type="password" name="password">
                                  </div>
                              </div>

                              <div class="row mt-1">
                                  <div class="col-sm-10 center">
                                      <label class="welcome-label password mb-2">Forgot password?</label>
                                  </div>
                              </div>

                              <div class="row mt-4">
                                  <div class="col-sm-12 text-center">
                                      <button class="welcome-button password" name="button">LOGIN</button>
                                  </div>
                              </div>

                          </div>
                      </form>

                    </div>
                </div>
            </div>

            <div class="col-lg-12" id="register-box">
                <div class="row">
                    <div class="col-lg-12">

                      <form action="/register" method="post">
                          {{ csrf_field() }}
                          <div class="col-sm-4 welcome-input-box">

                              <div class="row">
                                  <div class="col-sm-10 center form-inline" style="margin-top: 80px;">
                                      <h4 class="welcome-text login-not" id="login-change">LOGIN |</h4>
                                      <h4 class="welcome-text login">&nbsp;REGISTER</h4>
                                  </div>
                              </div>

                              <div class="row mt-2">
                                  <div class="col-sm-10 center">
                                      <label class="welcome-label mb-0">Email</label>
                                      <input class="welcome-input" name="email">
                                  </div>
                              </div>

                              <div class="row mt-3">
                                  <div class="col-sm-10 center">
                                      <label class="welcome-label mb-0">Password</label>
                                      <input class="welcome-input" type="password" name="password">
                                  </div>
                              </div>

                              <div class="row mt-3">
                                  <div class="col-sm-10 center">
                                      <label class="welcome-label mb-0">Confirm password</label>
                                      <input class="welcome-input" type="password" name="password_confirmation">
                                  </div>
                              </div>

                              <div class="row mt-3"></div>

                              <div class="row mt-4">
                                  <div class="col-sm-12 text-center">
                                      <button class="welcome-button password" name="button">REGISTER</button>
                                  </div>
                              </div>

                          </div>
                      </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</body>


@endsection
