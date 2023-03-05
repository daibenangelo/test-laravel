<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
</head>

<body>
@include("layouts/navbar")
<h1>Faculties</h1>
<a href="/admin/faculties/create">Add a new faculty</a>
@if (count($faculties) > 0)
<table class="table">
    <tr>
        <th>Faculty ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Position</th>
        <th>Department</th>
        <th>Operations</th>
    </tr>
    @foreach ($faculties as $faculty)
    <tr>
        <td>{{$faculty -> faculty_id}}</td>
        <td>{{$faculty -> first_name}}</td>
        <td>{{$faculty -> last_name}}</td>
        <td>{{$faculty -> position}}</td>
        <td>{{$faculty -> department}}</td>
        <td><a class="btn btn-primary" href="faculties/{{$faculty -> faculty_id}}">More Info</a><a class="btn btn-warning" href="faculties/{{$faculty -> faculty_id}}/edit">Edit</a>
        <button
            type="button"
            class="btn btn-danger"
            data-bs-toggle="modal"
            data-bs-target="#modal{{$faculty->faculty_id}}"
        >Delete
        </button>
        <div
        class="modal fade"
        id="modal{{$faculty->faculty_id}}"
        tabindex="-1"
        >
              <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirm deletion</h5>
                    <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    ></button>
                </div>
                <div class="modal-body">Are you sure you want to delete {{$faculty -> last_name}}, {{$faculty -> first_name}}?</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Close
                    </button>
                <form action="/admin/faculties/{{$faculty -> faculty_id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                </div>
                </div>
            </div>
    </div>`
        </td>
    </tr>
    @endforeach
</table>
@else
<p>No faculty entries found!</p>
@endif
</body>
</html>