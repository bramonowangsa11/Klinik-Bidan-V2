<!-- resources/views/seats.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Kursi</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .seat {
            width: 60px;
            height: 60px;
            margin: 5px;
            font-size: 16px;
        }
        .seat.disabled {
            background-color: #dc3545; /* Warna merah untuk kursi yang sudah dipilih */
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Pilih </h1>
        
        <form action="{{ route('submitSeats') }}" method="POST">
    @csrf
    <div class="d-flex flex-wrap">
        @foreach($seats as $seat)
            <button type="submit" name="selectedSeats[]" value="{{ $seat }}" class="btn btn-outline-primary seat {{ in_array($seat, $selectedSeats) ? 'disabled' : '' }}">
                {{ $seat }}
            </button>
        @endforeach
    </div>
</form>

    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
