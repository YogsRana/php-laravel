<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- As a link -->
            <nav class="navbar navbar-extend-sm bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="/">product</a>
            </div>
            </nav>
                <div class="container">
                    <div class="text-end">
                        <a href="products/create" class="btn btn-dark mt-2"> Add Products</a>
                    </div>
                </div>
                <!-- <div class="container">
    <h1>product</h1>
    </div> -->
    <div class="card mt-3 p-3">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Sno.</th>
          <th>name</th>
          <th>image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
        <tr>
          <td>{{ $loop->index+1 }}</td>
          <td> <a href="products/{{ $product->id }}/show" class="text-dark ">{{ $product->name }}</a></td>
          <td>
              <img src="products/{{ $product->image }}" class="rounded-circle" width="30" height="30"/>  
          </td>
          <td>
            <a href="products/{{ $product->id }}/edit" class="btn btn-dark btn-sm">Edit</a> 
            
            <form method="post" class="d-inline" action="products/{{ $product->id }}/delete">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>  
          </td>
        </tr>
        @endforeach
      </tbody>
   </table>
   <div class="pagination justify-content-center">{{$products->links()}}</div>
   
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 </body>
</html>