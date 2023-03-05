<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
</head>

<body>
@include("layouts/navbar")
@if(count($faculty) > 0)
    @foreach ($faculty as $f)
    <h1>{{$f->last_name}}, {{$f->first_name}} Info</h1>
    <ul>
        <li>First name: {{$f->first_name}}</li>
        <li>Last name: {{$f->last_name}}</li>
        <li>Birthdate: {{$f->birthdate}}</li>
        <li>Gender: {{$f->gender}}</li>
        <li>Mobile number: {{$f->mobile_number}}</li>
        <li>Email address: {{$f->email_address}}</li>
        <li>Date entered: {{$f->date_entered}}</li>
        <li>Postion: {{$f->position}}</li>
        <li>Department: {{$f->department}}</li>
    </ul>
    <h2>Academic Background</h2>
    <table class="table">
        <tr>
            <th>Undergraduate</th>
            <td>{{$f->unders_enrolled}}</td>
            <td>{{$f->unders_year_received}}</td>
        <tr>
        @if ($f->has_masters)
        <tr>
            <th>Masters</th>
            <td>{{$f->masters_enrolled}}</td>
            <td>{{$f->masters_year_received}}</td>
        <tr>
        @endif
        @if ($f->has_doctors)
        <tr>
            <th>Doctorate</th>
            <td>{{$f->doctors_enrolled}}</td>
            <td>{{$f->doctors_year_received}}</td>
        <tr>
        @endif
    </table>
    @endforeach
@else
<p>Nothing here. <a href="/">Go back to Home page.</a></p>
@endif
</body>
</html>