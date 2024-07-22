<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table with Nested Headers</title>
    {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}
    <style>
        .table-container {
            overflow-x: auto;
        }
        .table th, .table td {
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <div class="container mt-5 table-container">
        <table class="table table-bordered table-striped border-black border-2">
            <thead class="thead-dark">
                <tr>
                    <th rowspan="2">Main Header</th>
                    <th colspan="5">Sub Headers</th>
                </tr>
                <tr>
                    <th>Sub Header 1</th>
                    <th>Sub Header 2</th>
                    <th>Sub Header 3</th>
                    <th>Sub Header 4</th>
                    <th>Sub Header 5</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Row 1</td>
                    <td>Data 1-1</td>
                    <td>Data 1-2</td>
                    <td>Data 1-3</td>
                    <td>Data 1-4</td>
                    <td>Data 1-5</td>
                </tr>
                <tr>
                    <td>Row 2</td>
                    <td>Data 2-1</td>
                    <td>Data 2-2</td>
                    <td>Data 2-3</td>
                    <td>Data 2-4</td>
                    <td>Data 2-5</td>
                </tr>
                <!-- Tambahkan baris tambahan sesuai kebutuhan -->
            </tbody>
        </table>
    </div>

    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
</body>
</html>
