<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 20px;
        }
        .btn {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
       
        <!-- Tombol Create Product -->
        <div class="text-end mb-3">
            <a href="#" class="btn btn-primary">Create Product</a>
        </div>

        <!-- Tabel Data -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student) <!-- Looping data dari database -->
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->nama }}</td>
                    <td>{{ $student->kelas }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <a href="#" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <!-- Tombol Back -->
        <a href="{{ route('login') }}" class="btn btn-secondary mt-3">Back to Login</a>
    </div>
</body>
</html>
