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
    <body>
      <div  class="container">
        <div class="row">
          <a type="button" class="btn btn-primary" href="{{ route('item.create') }}">Create New Product</a><hr>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Product Number</th>
                <th scope="col">Product Name</th>
                <th scope="col">Short description</th>
                <th scope="col">Long Description</th>
                <th scope="col">Price</th>
                <th scope="col">Control edit</th>
                <th scope="col">Control delete</th>
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
                  <td>
                    <a type="button" class="btn btn-warning" href="{{ route('item.edit', $item) }}">Edit</a>
                  </td>
                  <td>
                    <form action="{{ route('item.destroy', $item) }}" method="POST">
                       @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
                  @endforeach
            </tbody>
          </table>
          
        </div>
      </div>
        
    </body>
</html>
