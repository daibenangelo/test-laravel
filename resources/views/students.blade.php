<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
</head>

<body>
@include("layouts/navbar")
<h1>Students</h1>
<p>
    @foreach ($student_count as $sc)
    The school has {{$sc -> student_count}} students!
    @endforeach
</p>
<img src="/img/students.jpg" class="img-fluid" style="width: 200px">
<table class="table">
    <tr>
        <th>Name</th>
        <th>Year Level</th>
        <th>Photo</th>
        <th>Upload Photo</th>
        <th>Classes</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{$student -> last_name}}, {{$student -> first_name}}</td>
        <td>{{$student -> year_level}}</td>
        @if ($student->image)
        <td><img src="/student_images/{{$student -> image}}" style="height:100px"></td>
        @else
        <td>N/A</td>
        @endif
        <td><a href="/admin/students/{{$student -> student_id}}/upload">Upload photo</a></td>
        <td><a href="/admin/students/{{$student -> student_id}}/classes">Show classes</a></td>
    </tr>
    @endforeach
</table>
</body>

</html>