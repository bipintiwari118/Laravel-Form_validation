<htmL>
    <head>
        <title>Add User Form
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

<body>

<div class='container'>
    <div class='row'>
        <div class='col-4'>
            <h1>Add New User</h1>
           
            <form action="{{route('addUser')}}" method='POST'>
            @csrf
            <div class="mb-3">
                <label class='form-label'>Name</label>
                <input type='text' value="{{old('username')}}" class='form-control @error("username") is-invalid @enderror' name='username'>
                <span class="text-danger">
                @error("username")
                    {{$message}}
                @enderror
                </span>
            </div>
                <div class="mb-3">
                <label class='form-label'>Email</label>
                <input type='email' value="{{old('useremail')}}" class='form-control @error("useremail") is-invalid @enderror 'name='useremail'>
                 <span class="text-danger">
                @error("useremail")
                    {{$message}}
                @enderror
                </span>
            </div>
             <div class="mb-3">
                <label class='form-label'>Password</label>
                <input type='password' value="{{old('userpassword')}}" class='form-control @error("userpassword") is-invalid @enderror 'name='userpassword'>
                 <span class="text-danger">
                @error("userpassword")
                    {{$message}}
                @enderror
                </span>
            </div>
            <div class="mb-3">
                <label class='form-label'>Age</label>
                <input type='number' value="{{old('userage')}}" class='form-control @error("userage") is-invalid @enderror' name='userage'>
                 <span class="text-danger">
                @error("userage")
                    {{$message}}
                @enderror
                </span>
            </div>
            <div class="mb-3">
                <label class='form-label'>Address</label>
                <select class="form-control" name="useraddress">
                <option value="kathmandu">kathmandu</option>
                <option value="pokhara">Pokhara</option>
                <option value="gorkha">Gorkha</option>
                <option value="dhading">Dhading</option>
                </select>
            </div>
            <button type='submit' class='btn btn-primary'>Submit</button>

            </form>
        {{-- @if ($errors->any())
         <ul class="alert alert-danger" style=" list-style-position: inside;">
            @foreach ($errors->all() as $error)
            <li>
            {{$error}}
            </li>
                
            @endforeach
            </ul>   
        @endif
     --}}
        </div>
    </div>

</div>




</body>
</htmL>