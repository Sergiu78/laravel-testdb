<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body class="antialiased">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Product Number</th>
                <th scope="col">Product Name</th>
                <th scope="col">Short description</th>
                <th scope="col">Long Description</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                  <th scope="row">{{ $item->productnumber }}</th>
                  <td>{{ $item->productname }}</td>
                  <td>{{ $item->shortdescr }}</td>
                  <td>{{ $item->longdescr }}</td>
                  <td>{{ $item->price }}</td>
                </tr>
                  @endforeach
            </tbody>
          </table>
    </body>
</html>
