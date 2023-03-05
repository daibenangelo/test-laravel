<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
</head>

<body>
    @include("layouts/navbar")
    <h1>Upload Photo</h1>
    @foreach ($student as $s)
    <p>Uploading photo for {{$s->last_name}}, {{$s-> first_name}}</p>
    @endforeach
    <form action="/admin/students/{{request() -> route('id')}}/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Upload photo:</label>
        <input type="file" name="image"></input><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>