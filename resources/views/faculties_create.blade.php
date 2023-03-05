<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
</head>

<body>
@include("layouts/navbar")
    <h1>Add Faculty</h1>
    <form action="/admin/faculties" method="POST">
        @csrf
        <label>First name</label>
        <input type="text" name="first_name"></input><br>
        <label>Last name</label>
        <input type="text" name="last_name"></input><br>
        <label>Birthdate</label>
        <input type="date" name="birthdate"></input><br>
        <label>Gender</label>
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br>
        <label>Mobile number</label>
        <input type="number" name="mobile_number"></input><br>
        <label>Email address</label>
        <input type="email" name="email_address"></input><br>
        <label>Date entered</label>
        <input type="date" name="date_entered"></input><br>
        <label>Position</label>
        <input type="text" name="position"></input><br>
        <label>Department</label>
        <select name="department">
            <option value="computer">Computer</option>
            <option value="mathematics">Mathematics</option>
            <option value="science">Science</option>
            <option value="social_science">Social Science</option>
            <option value="history">History</option>
            <option value="mapeh">MAPEH</option>
            <option value="filipino">Filipino</option>
            <option value="english">English</option>
        </select><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>