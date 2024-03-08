<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Login Page</title>
</head>
<body>
    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Login</div>
                    <div class="card-body">
                        {{-- @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                          </div>
                          @endif --}}
                          @if (Session::has('error'))
                          <div class="alert alert-danger" role="alert">
                              {{ Session::get('error') }}
                            </div>
                            @endif
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                              <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your registered email" required>
                              </div>
                              <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                              </div>
                              <div class="mb-3">
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit">Login</button>
                                </div>
                              </div>
                        </form>
                        <!-- Link to Register Page -->
                        <div class="text-center">
                          <p class="mb-0">Gak duwe Akun?<a href="{{ route('register') }}">Kene Daftar</a></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
