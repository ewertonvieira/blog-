<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Post-Create</title>
</head>

<body class="body-form">
    <div class="content-form">
        <form action="{{ route('post.store') }}" method="post" class="form-form">
            @csrf <!-- Token CSRF -->

            <h2 class="form-title">Publisher</h2>

            <label for="title">Title</label>
            <input type="text" name="title" id="title" required>

            <label for="content">Content</label>
            <textarea name="content" id="content" required></textarea>

            <button type="submit">Post</button>
        </form>
    </div>
</body>

</html>