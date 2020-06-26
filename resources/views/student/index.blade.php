<html>
    <body>
        <div>
            <br />
            <h3 align="center"> Student Data </h3>
            <br />
            @if ($message = Session::get('Success'))
                <div>
                    <p>{{$message}}</p>
                </div>
            @endif
            <div align="center">
            <a href = "{{route('student.create')}}">Add</a>
            </div>
            <table align="center" border="1">
                <tr>
                    <th>
                        First Name
                    </th>
                    <th>
                        Last Name
                    </th>
                    <th>
                        
                        Edit
                    </th>
                    <th>
                        Delete
                    </th>
                </tr>
                @foreach ($students as $row)
                    <tr>
                        <td>{{$row['first_name']}}</td>
                        <td>{{$row['last_name']}}</td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </body>
    </html>