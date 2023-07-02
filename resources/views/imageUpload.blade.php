<!DOCTYPE html>
<html>
<head>
    <title>laravel 8 image upload example - ItSolutionStuff.com.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
    
<body>
<div class="container">
     
    <div class="panel panel-primary">
      <div class="panel-heading"><h2>laravel 8 image upload example - ItSolutionStuff.com.com</h2></div>
      <div class="panel-body">
     
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        <img src="images/{{ Session::get('image') }}">
        @endif
    
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="row g-3">
                                                <div>
                                                    <div class="form-floating">
                                                        <select class="form-select" id="brand" name="brand"
                                                            aria-label="Floating label select example">
                                                            <option selected value="Chocolate">Chocolate</option>
                                                            <option value="Vannilla">Vannilla</option>
                                                            <option value="Pista">Pista</option>
                                                        </select>
                                                        <label for="brand">Brand</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="name"
                                                            placeholder="Customer name" name="name">
                                                        <label for="name">name</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="form-floating">
                                                        <input type="number" class="form-control" id="ml"
                                                            name="ml" placeholder="ml">
                                                        <label for="ml">ML</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="form-floating">
                                                        <input type="number" class="form-control" id="price"
                                                            name="price" placeholder="price">
                                                        <label for="price">Price</label>
                                                    </div>
                                                </div>
                                            </div>
                <div class="col-md-6">
                    <input type="file" name="image" class="form-control">
                </div>
     
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
     
            </div>
        </form>
    
      </div>
    </div>
</div>
</body>
  
</html>