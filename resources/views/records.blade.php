<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form"><br/><center>
                        <h2>Student Management Records</h2>
                        <table border="2">
                            <thead>
                                <th>Name</th>
                                <th>Roll Number</th>
                                <th>Name Surname</th> 
                                <th>DOB</th>   
                                <th>Email ID</th>
                                <th>Mobile Number</th>
                                <th>Status</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($list_of_records as $record)
                                <tr>
                                    <td>{{ $record->name }}</td>
                                    <td>{{ $record->rollno }}</td>
                                    <td>{{ $record->name }}  {{ $record->surname }}</td>
                                    <td>{{ strftime("%d %b %Y",strtotime( $record->dob)) }}</td>
                                    <td>{{ $record->email }}</td>
                                    <td>{{ $record->mobile_no }}</td>
                                    <td style="color:green">Active</td>
                                    <td>
                                    <a href="{{ url('/student/editRecord/' .$record->id) }}"><button style="background-color:green">Edit</button></a>
                                    <a href="{{ url('/student/dropRecord/' .$record->id) }}"><button style="background-color:red">Delete</button></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>

    </div>
  
</body>
</html>