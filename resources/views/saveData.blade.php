<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @include('header')
    <div>
        <h3 style="text-align: center; margin-bottom:10px;">Add student</h3>
    </div>
    {{-- <div class="d-flex flex-row bd-highlight mb-3" > --}}
        {{-- <div class="p-2 bd-highlight">
            <img src="{{ asset('images/stud.jpg') }}" alt="Image of student" style="width: 50%; margin-left:5%;">
        </div> --}}
        <div class="container-fluid">
            <form action="users" method="POST">
                @csrf
               <div>
                <label>Full Name</label><br>
                <input type="text" name="name" placeholder="Enter name here"><br>
                @error('name')
                <span style="color: red">
                    {{ $message }}
                </span>
                @enderror
               </div>
               <div>
                <label>Age</label><br>
                <input type="number" name="age" placeholder="Enter age here"><br> 
                @error('age')
                <span style="color: red">
                    {{ $message }}
                </span>
                @enderror
               </div>
               <div>
                <label>Email</label><br>
                <input type="text" name="email" placeholder="Enter email here"><br>
                @error('email')
                <span style="color: red">
                    {{ $message }}
                </span>
                @enderror
               </div>
               <div>
                <label>Address</label><br>
                <input type="text" name="address" placeholder="Enter address here"><br>
                @error('address')
                <span style="color: red">
                    {{ $message }}
                </span>
                @enderror
               </div>
               <div>
                <label>Contact</label><br>
                <input type="text" name="contact" placeholder="Enter contact here"><br>
                @error('contact')
                <span style="color: red">
                    {{ $message }}
                </span>
                @enderror
               </div>
               <div>
                <label for="department">Select Department</label><br>
                <select name="department" id="department">
                    <option value="Computer Science">Computer Science</option>>
                    <option value="Business">Business</option>
                    <option value="Nursing & Midwifery">Nursing & Midwifery</option>
                    <option value="Theology & Missions ">Theology & Missions </option>
                    <option value="Development Studies">Development Studies</option>
                    <option value="Music">Music</option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Biomedical Technology">Biomedical Technology</option>
                    <option value="Languages">Languages</option>
                </select>
               </div><br>
               <div>
                <label for="program">Select Program</label><br>
                <select name="program" id="program" aria-placeholder="Select Program">
                    <option value="Bsc.Computer Science">Bsc.Computer Science</option>
                    <option value="Dip.Computer Science">Dip.Computer Science</option>
                    <option value="Bsc.Information Technology">Bsc.Information Technology</option>
                    <option value="Dip.Information Technology">Dip.Information Technology</option>
                    <option value="Bsc.Business Information Technology">Bsc.Business Information Technology</option>
                    <option value="Dip.Business Information Technology">Dip.Business Information Technology</option>
                    <option value="Bsc.Business Administration">Bsc.Business Administration</option>
                    <option value="Bsc.Accounting">Bsc.Accounting</option>
                    <option value="B.EdInformation Technology">B.Ed Information Technology</option>
                    <option value="B.EdTheological Studies">B.Ed Theological Studies</option>
                    <option value="B.EdDevelopment Studies">B.Ed Development Studies</option>
                    <option value="Dip.Development Studies">Dip.Development Studies</option>
                    <option value="B.Ed Accounting">B.Ed Accounting</option>
                    <option value="B.Ed Religion">B.Ed Religion</option>
                    <option value="B.Ed Management">B.Ed Management</option>
                    <option value="B.Ed Music">B.Ed Music</option>
                    <option value="Diploma Music">Diploma Music</option>
                    <option value="Bsc. Biomedical Equiment Technology">Bsc. Biomedical Equiment Technology</option>
                    <option value="Dip. Biomedical Equipment Technology">Dip. Biomedical Equipment Technology</option>
                    <option value="B.Ed Mathematics">B.Ed Mathematics</option>
                    <option value="B.Ed English">B.Ed English</option>
                    <option value="Bsc. Nursing">Bsc. Nursing</option>
                    <option value="Dip Nursing">Dip Nursing</option>
                    <option value="Bsc. Midwifery">Bsc. Midwifery</option>
                    <option value="Dip. Midwifery">Dip. Midwifery</option>
                </select>
               </div><br>
               <button type="submit" class="btn btn-primary">Add Student</button>
            </form>
        </div>
    {{-- </div> --}}
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>