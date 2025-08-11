<!DOCTYPE html>
<html>
<head>
    <title>Admin - All Shortened URLs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <h1>All Shortened URLs</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Original URL</th>
                <th>Short Code</th>
                <th>Short URL</th>
                <th>Clicks</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($urls as $url)
                <tr>
                    <td>{{ $url->original_url }}</td>
                    <td>{{ $url->short_code }}</td>
                    <td><a href="{{ url($url->short_code) }}" target="_blank">{{ url($url->short_code) }}</a></td>
                    <td>{{ $url->clicks }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
