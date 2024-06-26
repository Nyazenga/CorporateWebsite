<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Corporate Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Admin Panel</h1>
        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
        <form action="{{ route('contents.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="section">Section</label>
                <input type="text" name="section" id="section" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th>Section</th>
                    <th>Content</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contents as $content)
                <tr>
                    <td>{{ $content->section }}</td>
                    <td>{{ $content->content }}</td>
                    <td>
                        <form action="{{ route('contents.destroy', $content) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        <form action="{{ route('contents.update', $content) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="text" name="section" value="{{ $content->section }}" class="form-control">
                            <textarea name="content" class="form-control">{{ $content->content }}</textarea>
                            <button class="btn btn-success">Update</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
