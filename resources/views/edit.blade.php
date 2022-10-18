<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
</head>
<body>
     <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <!-- working section -->
            <div class="col-8 my-5">
                @if(session('msg'))
                <div class="alert alert-success">
                   {{session('msg')}}
                </div>
                @endif
                <a href="{{url('table')}}" class="btn btn-outline-primary mb-3">Back</a>
            <form action="{{url('update/'.$crud->id)}}" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="card-4 text-center d-">Edit Crud

                        </div>
                    </div>
                    <div class="card-body">
                    <div class="mt-2">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{$crud->name}}">
                    </div>
                    <div class="mt-2">
                        <label>Age</label>
                        <input type="text" class="form-control" name="age" value="{{old('age',$crud->age)}}">
                    </div>
                    <div class="mt-2">
                        <label>Address</label>
                        <textarea name="address"  cols="30" rows="10" class="form-control"> {{old('address',$crud->address)}} </textarea>
                    </div>

                    <div class="my-3">
                        <label>Image</label>
                        <input type="file" class="form-control mb-1" name="image">
                        <div>
                          <img src="{{asset('image/'.$crud->image)}}" width="70" height="70" alt="">
                        </div>
                    </div>

                     <input type="submit" class="btn btn-success" value="Save">
                    </form>
                    </div>
                    <div class="card-footer">
                        Crud Created by Brandz
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
     </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
