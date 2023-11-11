<div>
    <h1>Register</h1>
    <form action="{{route('register')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">User Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Enter User Email" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Enter User Email</small>
        </div>
        <div class="form-group">
            <label for="password">User Password</label>
            <input type="text" name="password" id="password" class="form-control" placeholder="Enter User Password" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Enter User Password</small>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h2>Already have an account?</h2>
    <h1><a href="{{route('loginForm')}}">Login</a></h1>
</div>
