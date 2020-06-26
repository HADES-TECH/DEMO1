<html>
    <body>
    <div>
        <div>
            <br />
            <h3 align="center">Add Data</h3>
            <br />
            @if (count($errors) > 0)
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{$error}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (\Session::has('Success'))
                <div>
                    <p>
                        {{\Session::get('Success')}}
                    </p>
                </div>
            @endif
        <form method="POST" action="{{url('student')}}" align="center">
            {{ csrf_field() }}
            <div>
                <input type="text" name="first_name"  placeholder="Enter First Name" required/>
            </div>
            <div>
                <input type="text" name="last_name"  placeholder="Enter Last Name" required/>
            </div>
            <div>
                <input type="submit"/>
            </div>

        </form>

        </div>
    </div>
</body>
</html>