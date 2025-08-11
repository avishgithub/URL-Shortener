<!DOCTYPE html>
<html>
<head>
    <title>URL Shortener</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">

    <h1 class="mb-4 text-center">URL Shortener</h1>

    @if(session('short_url'))
    <div class="alert alert-success d-flex justify-content-between align-items-center" role="alert">
        <div>
            Short URL: <a href="{{ session('short_url') }}" target="_blank">{{ session('short_url') }}</a><br>
            Clicks: {{ session('clicks', 0) }}
        </div>
        <button class="btn btn-outline-secondary btn-sm" onclick="copyToClipboard('{{ session('short_url') }}')">Copy</button>
    </div>
@endif


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/shorten" class="d-flex gap-2">
        @csrf
        <input type="url" name="original_url" class="form-control" placeholder="Enter your URL" required>
        <button type="submit" class="btn btn-primary">Shorten</button>
    </form>

</div>

<!-- Bootstrap JS Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
        alert('Copied to clipboard!');
    });
}
</script>

</body>
</html>
