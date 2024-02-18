<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Details</title>
</head>
<body>
    <div class="container">
        <div class="card" style="width: 40rem;">
            <img class="card-img-top" src="{{ asset('uploads/students/'.$employee->image) }}" alt="Card image cap" style="height: 100px; width: 100px">
            <div class="card-body">
              <h5 class="card-title">{{ $employee->name }}</h5>s
              <h5 class="card-title">{{ $employee->email }}</h5>
              @foreach ($employee->companies as $company)
                  <h3>{{ $company->name }}</h3>
              @endforeach
            </div>
          </div>
    </div>
</body>
</html>
