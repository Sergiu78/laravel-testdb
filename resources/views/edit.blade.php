<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>My app</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
  </head>
  <body>
    <div  class="container">
        <div class="row">
            <form action="{{ route('item.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label>Product no.</label>
                  <input type="text" name="productnumber" class="form-control" id="exampleFormControlInput1" value="{{ $item->productnumber }}">
                </div>
                <div class="form-group">
                  <label>Price</label>
                  <input type="text" name="price" class="form-control" id="exampleFormControlInput1" value="{{ $item->price }}">
                </div>
                <div class="form-group">
                  <label>Product name</label>
                  <input type="text" name="productname" class="form-control" id="exampleFormControlInput1" value="{{ $item->productname }}">
                </div>
                
                
                <div class="form-group">
                  <label for="FormControlTextarea1">Short description</label>
                  <textarea name="shortdescr" class="summernote" id="FormControlTextarea1"  rows="3">{{ old($item->shortdescr) }}</textarea>
                </div>
                <div class="form-group">
                  <label for="FormControlTextarea1">Long description</label>
                  <textarea name="longdescr" class="summernote" id="FormControlTextarea2"  rows="3">{{ old($item->longdescr) }}</textarea>
                </div>
                <button type="submit" class="btn btn-warning">Edit</button>
              </form>
              
            </div> 
           
        </div>
        <hr>
        @include('create')
<script>
    $('.summernote').summernote({
                  
        tabsize: 2,
         height: 100
    });
    </script>
    <script>
    $('#summernote1').summernote({
                  
        tabsize: 2,
         height: 100
    });
    </script>
 </body>
</html>

