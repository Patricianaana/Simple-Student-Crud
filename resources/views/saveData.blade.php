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
    <div style="display: flex; width: 100%; height: 100%; background-color: rgb(186, 219, 184)" >
        <div>
            <img src="{{ asset('images/stud.jpg') }}" alt="Image of student" style="width: 50%; margin-left:5%;">
        </div>
        <div style="margin-right: 5%; background-color: rgb(209, 204, 204)">
            <form action="users" method="POST">
                @csrf
               <div>
                <label>Full Name</label><br>
                <input type="text" name="name" placeholder="Enter name here"><br><br>
               </div>
               <div>
                <label>Age</label><br>
                <input type="number" name="age" placeholder="Enter age here"><br><br>
               </div>
               <div>
                <label>Email</label><br>
                <input type="text" name="email" placeholder="Enter email here"><br><br>
               </div>
               <div>
                <label>Contact</label><br>
                <input type="text" name="contact" placeholder="Enter contact here"><br><br>
               </div>
               <div>
                <label for="department">Select Department</label><br>
                <select name="department" id="department">
                    <option value="department">Computer Science</option>>
                    <option value="department">Business</option>
                    <option value="department">Nursing & Midwifery</option>
                    <option value="department">Theology & Missions </option>
                    <option value="department">Development Studies</option>
                    <option value="department">Music</option>
                    <option value="department">Mathematics</option>
                    <option value="department">Biomedical Technology</option>
                    <option value="department">Languages</option>
                </select>
               </div><br>
               <div>
                <label for="program">Select Program</label><br>
                <select name="program" id="program" aria-placeholder="Select Program">
                    <option value="program">Bsc.Computer Science</option>
                    <option value="program">Dip.Computer Science</option>
                    <option value="program">Bsc.Information Technology</option>
                    <option value="program">Dip.Information Technology</option>
                    <option value="program">Bsc.Business Information Technology</option>
                    <option value="program">Dip.Business Information Technology</option>
                    <option value="program">Bsc.Business Administration</option>
                    <option value="program">Bsc.Accounting</option>
                    <option value="program">B.EdInformation Technology</option>
                    <option value="program">B.EdTheological Studies</option>
                    <option value="program">B.EdDevelopment Studies</option>
                    <option value="program">Dip.Development Studies</option>
                    <option value="program">B.Ed Accounting</option>
                    <option value="program">B.Ed Religion</option>
                    <option value="program">B.Ed Management</option>
                    <option value="program">B.Ed Music</option>
                    <option value="program">Diploma Music</option>
                    <option value="program">Bsc. Biomedical Equiment Technology</option>
                    <option value="program">Dip. Biomedical Equipment Technology</option>
                    <option value="program">B.Ed Mathematics</option>
                    <option value="program">B.Ed English</option>
                    <option value="program">Bsc. Nursing</option>
                    <option value="program">Dip Nursing</option>
                    <option value="program">Bsc. Midwifery</option>
                    <option value="program">Dip. Midwifery</option>
                </select>
               </div>
               <button type="submit">Add Student</button>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>