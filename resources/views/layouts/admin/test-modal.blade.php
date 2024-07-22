<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested Table Example</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
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
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Main Parameter</th>
                    <th>Sub Parameters</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Main Parameter 1</td>
                    <td>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sub Param 1</th>
                                    <th>Sub Param 2</th>
                                    <th>Sub Param 3</th>
                                    <th>Sub Param 4</th>
                                    <th>Sub Param 5</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10</td>
                                    <td>20</td>
                                    <td>30</td>
                                    <td>40</td>
                                    <td>50</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Main Parameter 2</td>
                    <td>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sub Param 1</th>
                                    <th>Sub Param 2</th>
                                    <th>Sub Param 3</th>
                                    <th>Sub Param 4</th>
                                    <th>Sub Param 5</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>15</td>
                                    <td>25</td>
                                    <td>35</td>
                                    <td>45</td>
                                    <td>55</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <!-- Tambahkan baris tambahan sesuai kebutuhan -->
            </tbody>
        </table>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
