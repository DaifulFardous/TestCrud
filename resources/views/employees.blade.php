<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Users</title>
</head>
<body>
    <div class="container">
        @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
        <a href="{{ url('employee/create') }}" class="btn btn-primary">Add User</a>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>
                        <a href="{{ url('employee/details/'.$employee->id) }}" class="btn btn-primary">Details</a>
                        <a href="{{ url('employee/edit/'.$employee->id) }}" class="btn btn-success">Edit</a>
                        <a href="{{ URL('employee/delete/'.$employee->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                @endforeach

            </tbody>
          </table>
    </div>
</body>
</html>
