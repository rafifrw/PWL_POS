<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Madura Mart</title>
    
    <!-- CSS Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --text-color: #1f2937;
            --light-bg: #f3f4f6;
            --white: #ffffff;
            --shadow-sm: 0 2px 4px rgba(0, 0, 0, 0.1);
            --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
            --border-radius: 50px;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .register-container {
            background: var(--white);
            border-radius: 15px;
            box-shadow: var(--shadow-md);
            width: 100%;
            max-width: 400px;
            padding: 2rem;
        }

        .register-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .register-header .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
            margin-bottom: 1rem;
            display: block;
        }

        .form-control {
            border-radius: 25px;
            padding: 0.75rem 1rem;
            border: 1px solid #e5e7eb;
            margin-bottom: 1rem;
            height: 48px;
            font-size: 1rem;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .form-select {
            border-radius: 25px;
            padding: 0.75rem 1rem;
            border: 1px solid #e5e7eb;
            margin-bottom: 1rem;
            height: 48px;
            font-size: 1rem;
        }

        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .input-group {
            position: relative;
            margin-bottom: 1rem;
        }

        .input-group .form-control,
        .input-group .form-select {
            padding-right: 48px;
            margin-bottom: 0;
        }

        .input-group-icon {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            color: #6b7280;
            font-size: 20px;
            pointer-events: none;
        }

        .btn-register {
            background-color: var(--primary-color);
            color: var(--white);
            border: none;
            border-radius: var(--border-radius);
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            width: 100%;
            transition: var(--transition);
            height: 48px;
        }

        .btn-register:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
        }

        .login-link {
            text-align: center;
            margin-top: 1.5rem;
            color: var(--text-color);
        }

        .login-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .form-label {
            color: var(--text-color);
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="register-container">
        <div class="register-header">
            <a href="/" class="logo">Madura Mart</a>
            <h4>Daftar Akun Baru</h4>
            <p class="text-muted">Silakan lengkapi data diri Anda</p>
        </div>

        <form action="{{ url('register') }}" method="POST" id="form-register">
            @csrf
            <div class="input-group">
                <select name="level_id" id="level_id" class="form-select">
                    <option value="">- Pilih Level -</option>
                    @foreach ($level as $l)
                        <option value="{{ $l->level_id }}">{{ $l->level_nama }}</option>
                    @endforeach
                </select>
                <div class="input-group-icon">
                    <i class="fas fa-users"></i>
                </div>
            </div>
            <small id="error-level_id" class="text-danger"></small>

            <div class="input-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                <div class="input-group-icon">
                    <i class="fas fa-user"></i>
                </div>
            </div>
            <small id="error-username" class="text-danger"></small>

            <div class="input-group">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                <div class="input-group-icon">
                    <i class="fas fa-id-card"></i>
                </div>
            </div>
            <small id="error-nama" class="text-danger"></small>

            <div class="input-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <div class="input-group-icon">
                    <i class="fas fa-lock"></i>
                </div>
            </div>
            <small id="error-password" class="text-danger"></small>

            <button type="submit" class="btn btn-register">Daftar</button>

            <div class="login-link">
                Sudah punya akun? <a href="{{ url('login') }}">Masuk sekarang</a>
            </div>
        </form>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.32/sweetalert2.all.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $("#form-register").validate({
                rules: {
                    level_id: {
                        required: true,
                        number: true
                    },
                    username: {
                        required: true,
                        minlength: 3,
                        maxlength: 20
                    },
                    nama: {
                        required: true,
                        minlength: 3,
                        maxlength: 100
                    },
                    password: {
                        required: true,
                        minlength: 6,
                        maxlength: 20
                    }
                },
                submitHandler: function(form) {
                    $.ajax({
                        url: form.action,
                        type: form.method,
                        data: $(form).serialize(),
                        success: function(response) {
                            if (response.status) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: response.message,
                                }).then(function() {
                                    window.location = response.redirect;
                                });
                            } else {
                                $('.error-text').text('');
                                $.each(response.msgField, function(prefix, val) {
                                    $('#error-' + prefix).text(val[0]);
                                });
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Terjadi Kesalahan',
                                    text: response.message
                                });
                            }
                        }
                    });
                    return false;
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.input-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
</body>
</html>