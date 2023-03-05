<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
</head>

<body>
@include("layouts/navbar")
    <h1>Edit Faculty</h1>
    @foreach ($faculty as $f)
    <form action="/admin/faculties/{{$f -> faculty_id}}" method="POST">
        @csrf
        @method('PUT')
        <label>First name</label>
        <input type="text" name="first_name" value="{{$f -> first_name}}"></input><br>
        <label>Last name</label>
        <input type="text" name="last_name" value="{{$f -> last_name}}"></input><br>
        <label>Birthdate</label>
        <input type="date" name="birthdate" value="{{$f -> birthdate}}"></input><br>
        <label>Gender</label>
        <select name="gender" value="{{$f -> gender}}">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br>
        <label>Mobile number</label>
        <input type="number" name="mobile_number" value="{{$f -> mobile_number}}"></input><br>
        <label>Email address</label>
        <input type="email" name="email_address" value="{{$f -> email_address}}"></input><br>
        <label>Date entered</label>
        <input type="date" name="date_entered" value="{{$f -> date_entered}}"></input><br>
        <label>Position</label>
        <input type="text" name="position" value="{{$f -> position}}"></input><br>
        <label>Department</label>
        <select name="department">
            <option value="computer" {{$f->department == 'computer' ? 'selected' : ''}}>Computer</option>
            <option value="mathematics" {{$f->department == 'mathematics' ? 'selected' : ''}}>Mathematics</option>
            <option value="science" {{$f->department == 'science' ? 'selected' : ''}}>Science</option>
            <option value="social_science" {{$f->department == 'social_science' ? 'selected' : ''}}>Social Science</option>
            <option value="history" {{$f->department == 'history' ? 'selected' : ''}}>History</option>
            <option value="mapeh" {{$f->department == 'mapeh' ? 'selected' : ''}}>MAPEH</option>
            <option value="filipino"{{$f->department == 'filipino' ? 'selected' : ''}}>Filipino</option>
            <option value="english" {{$f->department == 'english' ? 'selected' : ''}}>English</option>
        </select><br>
        <button type="submit">Submit</button>
    </form>
    @endforeach
</body>

</html>