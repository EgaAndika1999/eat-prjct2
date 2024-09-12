<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - WEBSiTE!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

        .login-container {
            display: flex;
            background-color: white;
            border-radius: 50px;
            /* Updated to apply uniform border radius */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .login-form,
        .signup-section {
            padding: 30px;
            width: 50%;
        }

        .signup-section {
            background-color: #28a745;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 50px;
            align-items: center;
        }

        .login-form h2 {
            margin-bottom: 20px;
        }

        .login-form .form-control {
            margin-bottom: 15px;
        }

        .login-form .btn {
            width: 100%;
        }

        .error {
            color: red;
            margin-top: -10px;
            margin-bottom: 10px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Form Login -->
        <div class="login-form">
            <h2>Login!</h2>
            <p>Selamat Datang Di Web Training Kami</p>
            <form onsubmit="return validateForm()" method="POST" action="{{ route('login.submit') }}">
                @csrf
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama">
                <div id="nama-error" class="error"></div>
                <input type="text" id="kelas" name="kelas" class="form-control" placeholder="Kelas">
                <div id="kelas-error" class="error"></div>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                <div id="email-error" class="error"></div>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                <div id="password-error" class="error"></div>
                <button type="submit" class="btn btn-primary mt-3">Login</button>
            </form>
        </div>
        <!-- Section Register -->
        <div class="signup-section">
            <h2>Halo, Teman!</h2>
            <p>Ini Merupakan Web Training Silahkan Di Isi</p>
        </div>
    </div>

    <script>
        function validateForm() {
            // Mengambil nilai input
            const nama = document.getElementById('nama').value.trim();
            const kelas = document.getElementById('kelas').value.trim();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();

            // Mengambil elemen untuk pesan error
            const namaError = document.getElementById('nama-error');
            const kelasError = document.getElementById('kelas-error');
            const emailError = document.getElementById('email-error');
            const passwordError = document.getElementById('password-error');

            let isValid = true;

            // Reset pesan error
            namaError.innerHTML = '';
            kelasError.innerHTML = '';
            emailError.innerHTML = '';
            passwordError.innerHTML = '';

            // Validasi nama
            if (nama === '') {
                namaError.innerHTML = 'Nama tidak boleh kosong';
                isValid = false;
            }

            // Validasi kelas
            if (kelas === '') {
                kelasError.innerHTML = 'Kelas tidak boleh kosong';
                isValid = false;
            }

            // Validasi email
            if (email === '') {
                emailError.innerHTML = 'Email tidak boleh kosong';
                isValid = false;
            }

            // Validasi password
            if (password === '') {
                passwordError.innerHTML = 'Password tidak boleh kosong';
                isValid = false;
            }

            // Jika validasi gagal, form tidak akan dikirim
            return isValid;
        }
    </script>

</body>

</html>
