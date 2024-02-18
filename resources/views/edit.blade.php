<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Edit Employee</title>
</head>
<body>
    <div class="container">
        <form action="{{ url('employee/update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
             <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $employee->name }}">
            </div>
            <div class="form-group">
             <label>Email</label>
            <input type="text" name="email" class="form-control" value="{{ $employee->email }}">
            </div>
            <div class="form-group">
             <label>Image</label>
             <img class="card-img-top" src="{{ asset('uploads/students/'.$employee->image) }}" alt="Card image cap" style="height: 40px; width: 30px">
             <div class="card-body">
            <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
             {{-- <label>Select Companies</label>
           <select name="companies[]" multiple>
            @foreach ($employee->companies as $company)
                <option value="{{ $company->id }}">{{ $company->name }}</option>
            @endforeach
           </select> --}}
           <label for="">Selected Comapnies</label>
           @foreach ( $employee->companies as $company )
               <h2>{{ $company->name }}</h2>
           @endforeach
           <label for="">Change Selection</label>
           <select name="companies[]" multiple>
            @foreach ($companies as $company)
                <option value="{{ $company->id }}">{{ $company->name }}</option>
            @endforeach
           </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
    </div>
</body>
</html>
