<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

     <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
             @if(session('msg'))
             <div class="alert alert-danger my-5">
                {{session('msg')}}
             </div>
             @endif
            <a href="{{url('form')}}" class="btn btn-success mt-5">Add Record</a>
            <table class="table table-bordered my-5">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Age</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        @php
        $i = 1;
        @endphp
        @foreach ($crud as $item)
        <tr>
            <td>{{$i++}}</td>
         <td>{{$item->name}}</td>
         <td>{{$item->address}}</td>
         <td>{{$item->age}}</td>
         <td>

            <img src="{{asset('image/'.$item->image)}}" width="70" height="80" alt="">
         </td>
         <td>

            <a href="{{asset('edit/'.$item->id)}}" class="btn btn-success">Edit</a>
            <a href="{{asset('delete/'.$item->id)}}" class="btn btn-danger">Delete</a>

         </td>
        </tr>
        @endforeach
    </table>

            </div>
            <div class="col-2"></div>
        </div>
     </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
