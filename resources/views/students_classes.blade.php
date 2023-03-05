<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
</head>

<body>
@include("layouts/navbar")
<h1>Students Classes</h1>
@foreach ($student as $s)
<a href="/admin/students">Go back to list of students</a>
<p>Viewing classes of {{$s -> last_name}}, {{$s ->first_name}}</p>
@endforeach
<table class="table">
    <tr>
        <th>Class ID</th>
        <th>Room</th>
        <th>Schedule</th>
        <th>Subject Name</th>
    </tr>
    @foreach ($classes as $class)
    <tr>
        <td>{{$class -> class_id}}</td>
        <td>{{$class -> room}}</td>
        <td>{{$class -> schedule}}</td>
        <td>{{$class -> name}}</td>
    </tr>
    @endforeach
</table>
<h2>Add Class</h2>
<form action="/admin/students/{{request() -> route('id')}}/classes" method="POST">
    @csrf
    <select name="class_id">
        @foreach ($class_list as $cl)
        <option value="{{$cl -> class_id}}">{{$cl -> name}} - {{$cl -> schedule}}, {{$cl -> room}}</option>
        @endforeach
    </select><br>
    <input type="submit"></input>
</form>
</body>

</html>