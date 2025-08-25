<!DOCTYPE html>
<html>

<head>
    <title>QDMS - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .login-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .login-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
        }

        .login-header {
            background: linear-gradient(45deg, #3498db, #2ecc71);
            color: white;
            border-radius: 15px 15px 0 0;
            padding: 20px;
        }

        .form-control {
            border-radius: 10px;
            padding: 12px;
            border: 2px solid #eee;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #3498db;
            box-shadow: none;
        }

        .btn {
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary {
            background: linear-gradient(45deg, #3498db, #2ecc71);
            border: none;
        }

        .btn-secondary {
            background: #f8f9fa;
            color: #333;
            border: 2px solid #eee;
        }

        .logo-img {
            max-width: 150px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="text-center mb-4">
                    <img src="{{ asset('img/logo.png') }}" alt="QDMS Logo" class="logo-img">
                </div>
                <div class="card login-card">
                    <div class="login-header text-center">
                        <h4 class="mb-0">Welcome Back!</h4>
                    </div>
                    <div class="card-body p-4">
                        @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-circle me-2"></i>{{ $errors->first() }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label"><i class="fas fa-user me-2"></i>Username</label>
                                <input type="text" name="name" class="form-control" required autofocus
                                    placeholder="Enter your username">
                            </div>
                            <div class="mb-4">
                                <label class="form-label"><i class="fas fa-lock me-2"></i>Password</label>
                                <input type="password" name="password" class="form-control" required
                                    placeholder="Enter your password">
                            </div>
                            <div class="d-grid mb-3">
                                <button class="btn btn-primary">
                                    <i class="fas fa-sign-in-alt me-2"></i>Login
                                </button>
                            </div>
                        </form>
                        <div class="d-grid">
                            <a href="{{ route('home') }}" class="btn btn-secondary">
                                <i class="fas fa-home me-2"></i>Back to Home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>