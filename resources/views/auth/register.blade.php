<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sign Up - Jasa Cuci Sepatu</title>
    
    <!-- CSS files -->
    <link href="{{ asset('css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/tabler-flags.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/tabler-payments.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/tabler-vendors.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/demo.min.css') }}" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
        --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
        font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body class="d-flex flex-column">
    <div class="page page-center">
      <div class="container container-tight py-4">
        
        
        <!-- Form Register -->
        <form class="card card-md" action="{{ route('register') }}" method="POST">
          <div class="card-body">
          <div style="text-align: center;">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
        </div>
          @csrf
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Buat Akun Baru</h2>
            
            <!-- Tampilkan Error Validasi -->
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul class="mb-0">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <!-- Nama -->
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <!-- Username -->
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="username" class="form-control" value="{{ old('username') }}" required>
            </div>

            <!-- Password -->
            <div class="mb-3">
              <label class="form-label">Password</label>
              <div class="input-group input-group-flat">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"  
                  placeholder="Password" required>
                <span class="input-group-text">
                  <a href="#" class="link-secondary toggle-password">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                      <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                    </svg>
                  </a>
                </span>
              </div>
            </div>

            <!-- Konfirmasi Password -->
            <div class="mb-3">
              <label class="form-label">Konfirmasi Password</label>
              <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <!-- Checkbox Syarat & Ketentuan -->
            <div class="mb-3">
              <label class="form-check">
                <input type="checkbox" class="form-check-input" required>
                <span class="form-check-label">
                  Saya menyetujui <a href="#">syarat & ketentuan</a>.
                </span>
              </label>
            </div>

            <!-- Tombol Daftar -->
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Buat Akun</button>
            </div>
          </div>
        </form>
        
        <!-- Link Login -->
        <div class="text-center text-secondary mt-3">
          Sudah punya akun? <a href="{{ route('login') }}">Masuk</a>
        </div>
      </div>
    </div>

    <!-- JS Files -->
    <script src="{{ asset('js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('js/demo.min.js') }}" defer></script>

    <!-- Toggle Password Visibility -->
    <script>
      document.querySelector(".toggle-password").addEventListener("click", function (e) {
        e.preventDefault();
        let passwordField = document.querySelector('input[name="password"]');
        if (passwordField.type === "password") {
          passwordField.type = "text";
        } else {
          passwordField.type = "password";
        }
      });
    </script>
  </body>
</html>
