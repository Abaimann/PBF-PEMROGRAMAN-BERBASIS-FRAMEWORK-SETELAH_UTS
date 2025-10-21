<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Penjumlahan</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }
        .result-number {
            font-size: 3rem;
            font-weight: bold;
            color: #2575fc;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card text-center p-5">
            <h1 class="mb-3">📊 Hasil Perhitungan</h1>
            <p class="fs-5">Angka dari route:</p>
            <div class="result-number mb-4 bg-light rounded p-3 shadow-sm">{{ $number }}</div>
            <p class="fs-5">Setelah ditambah 7 hasilnya:</p>
            <div class="result-number bg-light rounded p-3 shadow-sm">{{ $result }}</div>
            <a href="{{ url('/product/' . rand(1,100)) }}" class="btn btn-primary mt-4">Coba Angka Lain</a>
        </div>
    </div>
</body>
</html>
