```blade
{{-- resources/views/auth/login-register.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login & Sign Up - Pengiriman Paket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #402f29;
        }
        .container {
            display: flex;
            width: 100%;
            max-width: 1200px;
            height: 100%;
        }
        .left-section {
            width: 40%;
            background-color: #2B221E;
            color: white;
            padding: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            border-radius: 6px;
        }
        .left-section img {
            max-width: 150px;
            height: auto;
        }
        .right-section {
            width: 50%;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            border-radius: 6px;
        }
        .form-container {
            width: 100%;
            max-width: 450px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        .btn-dark {
            background-color: #2B221E;
            border: none;
        }
        .btn-dark:hover {
            background-color: #402f29;
        }
        .error-message {
            color: red;
        }
        .message {
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left Section (Logo and Title) -->
        <div class="left-section">
            <div class="text-center">
                <h1 class="fw-bold">Pengiriman Paket</h1>
                <p class="lead">Kirim paket dengan mudah dan aman</p>
            </div>
        </div>

        <!-- Right Section (Form Login and Registrasi) -->
        <div class="right-section">
            <!-- Login Form -->
            <div id="loginForm" class="form-container">
                <h2 class="text-center mb-4">Login to Your Account</h2>
                
                @if(session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="user" class="form-label">Username:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" name="email" id="user" class="form-control @error('email') is-invalid @enderror" 
                                placeholder="Enter email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" 
                                placeholder="Enter password" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    
                    <button type="submit" class="btn btn-dark w-100">Login now</button>
                    <div class="text-center my-3">
                        <span class="text-muted">OR</span>
                    </div>

                    <button type="button" class="btn btn-outline-dark w-100" onclick="toggleForms('registerForm')">Sign Up now</button>
                </form>
            </div>

            <!-- Sign Up Form -->
            <div id="registerForm" class="form-container" style="display:none;">
                <h2 class="text-center mb-4">Create a New Account</h2>
                
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" 
                                placeholder="Enter your name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" 
                                placeholder="Enter your email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            <input type="tel" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" 
                                placeholder="Enter your phone number" value="{{ old('phone') }}" required>
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <select class="form-select @error('role') is-invalid @enderror" id="role" name="role" required>
                                <option value="pengirim" {{ old('role') == 'pengirim' ? 'selected' : '' }}>Pengirim</option>
                                <option value="kurir" {{ old('role') == 'kurir' ? 'selected' : '' }}>Kurir</option>
                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                            @error('role')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" 
                                placeholder="Create a password" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" 
                                placeholder="Confirm password" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-dark w-100">Sign Up</button>

                    <div class="text-center my-3">
                        <span class="text-muted">OR</span>
                    </div>

                    <button type="button" class="btn btn-outline-dark w-100" onclick="toggleForms('loginForm')">Already have an account? Login</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function toggleForms(form) {
            if (form === 'registerForm') {
                document.getElementById('loginForm').style.display = 'none';
                document.getElementById('registerForm').style.display = 'block';
            } else {
                document.getElementById('loginForm').style.display = 'block';
                document.getElementById('registerForm').style.display = 'none';
            }
        }
    </script>
</body>
</html>
```