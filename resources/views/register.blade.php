<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Register Page</title>
</head>
<body>
    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Register</div>
                    <div class="card-body">
                        @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                          {{-- @if (Session::has('error'))
                          <div class="alert alert-danger" role="alert">
                              {{ Session::get('error') }}
                            </div>
                            @endif --}}
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="masukkan nama" required>
                              </div>
                              <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="maasukkan email yang valid" required>
                              </div>
                              <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="masukkan password yang kuat" required>
                              </div>
                              <div class="mb-3">
                                <div class="d-grid">
                                    <button class="btn btn-primary">Register</button>
                                </div>
                              </div>
                        </form>
                        <!-- Link to Register Page -->
                        <div class="text-center">
                        <p class="mb-0">Wes Duwe Akun?<a href="{{ route('login') }}">Gass Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>