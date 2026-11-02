<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background: #f4f6f9; margin: 0; }
        .card { background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); width: 320px; }
        .form-group { margin-bottom: 1rem; }
        label { display: block; margin-bottom: 0.5rem; font-weight: bold; }
        input { width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; padding: 0.6rem; background: #2563eb; color: white; border: none; border-radius: 4px; font-size: 1rem; cursor: pointer; }
        button:hover { background: #1d4ed8; }
        .error { color: #dc2626; font-size: 0.875rem; margin-bottom: 1rem; }
    </style>
</head>
<body>

<div class="card">
    <h2>Form Login</h2>

    {{-- Tampilkan error jika login gagal --}}
    @if($errors->any())
        <div class="error">
            {{ $errors->first() }}
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf {{-- Token Keamanan Laravel --}}

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit">Masuk</button>
    </form>
</div>

</body>
</html>
