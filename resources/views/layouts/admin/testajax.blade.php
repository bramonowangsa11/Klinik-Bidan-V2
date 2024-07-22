<!-- resources/views/search.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <input type="text" id="search" placeholder="Search...">
    <ul id="results"></ul>

    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var query = $(this).val();
                $.ajax({
                    url: ('/search-pasien'),
                    type: "GET",
                    data: {'nik': query},
                    success: function(data) {
                        $('#results').empty();
                        if (data.length > 0) {
                            data.forEach(function(item) {
                                $('#results').append('<li>' + item.name + '</li>'); // Ganti 'name' dengan atribut yang sesuai
                            });
                        } else {
                            $('#results').append('<li>No results found</li>');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
</body>
</html>