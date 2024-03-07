<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg">
    @include('header')
    <div class="container-fluid">
        <h5>Welcome Admin!</h5>
    </div>
    <div>
        <h1 style="text-align: center">Students List</h1>
    </div>
    <div class="container-fluid">
        <td><a href="users"><button type="submit" class="btn btn-primary">Add New</button></a></td>
    </div>
    <br>
    {{-- <div class="input-group mb-3">
        <form action="/search" method="get">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
            <input type="search" class="form-control" placeholder="Search..." aria-label="search" aria-describedby="basic-addon1">
            <button type="submit" class="btn btn-secondary">Search</button>
        </form>
      </div> --}}
    <div class="container-fluid">
        <form action="/search" method="get">
            <label for="search">Search:</label>
            <input type="search" id="search" name="search" placeholder="Search..." value="{{ isset($search) ? $search : ''}}">
            <button type="submit" class="btn btn-secondary">Search</button>
        </form>
        <br>
    </div>

    <div class="container-fluid">
        <table class="table"  border="2">
            <tr>
                <td style="font-weight:bold">ID</td>
                <td style="font-weight:bold">Name</td>
                <td style="font-weight:bold">Age</td>
                <td style="font-weight:bold">Email</td>
                <td style="font-weight:bold">Address</td>
                <td style="font-weight:bold">Contact</td>
                <td style="font-weight:bold">Department</td>
                <td style="font-weight:bold">Program</td>
                <td style="font-weight:bold">Actions</td>
            </tr>
            
            @foreach($data as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['age']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['address']}}</td>
                <td>{{$user['contact']}}</td>
                <td>{{$user['department']}}</td>
                <td>{{$user['program']}}</td>
                <td><a href="{{'edit/'.$user['id']}}"><button type="button" class="btn btn-success">Edit</button></a></td>
                <td><a href="{{'delete/'.$user['id']}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                
                {{-- <td><a href="{{'view/'.$user['id']}}">View</a></td> --}}
            </tr>
            @endforeach
        </table>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>