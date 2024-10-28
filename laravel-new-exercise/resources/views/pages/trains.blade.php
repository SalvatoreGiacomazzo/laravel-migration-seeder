<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/js/app.js')
</head>
<body>
    <h1 class="text-center text-danger">Trains leaving 27/10/2023</h1>

    <div class="container">
      <div class="row">
        <div class="col-12">
        <h2>Train Station</h2>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Company</th>
              <th scope="col">Departure Station</th>
              <th scope="col">Arrival Station</th>
              <th scope="col">Arrival Time</th>
              <th scope="col">Departure Time</th>
              <th scope="col">Arrival Day</th>
              <th scope="col">Departure Day</th>
              <th scope="col">Train Code</th>
              <th scope="col">Carriage Number</th>
              <th scope="col">On Time</th>
              <th scope="col">Deleted</th>
            </tr>
          </thead>
          <tbody>

     @forelse($trains as $train)
     <tr>
        <td>{{ $train->company }}</td>
        <td>{{ $train->departure_station }}</td>
        <td>{{ $train->arrival_station }}</td>
        <td>{{ $train->arrival_time }}</td>
        <td>{{ $train->departure_time }}</td>
        <td>{{ \Carbon\Carbon::parse($train->arrival_day)->format('l, d M Y') }}</td>
        <td>{{ \Carbon\Carbon::parse($train->departure_day)->format('l, d M Y') }}</td>
        <td>{{ $train->train_code }}</td>
        <td>{{ $train->carriage_number }}</td>
        <td>{{ $train->on_time ? 'Yes' : 'No' }}</td>
        <td>{{ $train->deleted ? 'Yes' : 'No' }}</td>
      </tr>
          @empty
          <h4 class="text-center text-danger">No trains this day</h4>
          @endforelse
        </table>
        </div>
      </div>
    </div>
        </body>
</html>
