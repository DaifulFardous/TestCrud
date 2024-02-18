<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Create Employee</title>
</head>
<body>
    <div class="container">
        <form action="{{ url('employee/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
             <label>Name</label>
            <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
             <label>Email</label>
            <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
             <label>Image</label>
            <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
             <label>Select Companies</label>
           <select name="companies[]" multiple>
            @foreach ($companies as $company)
                <option value="{{ $company->id }}">{{ $company->name }}</option>
            @endforeach
           </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>
