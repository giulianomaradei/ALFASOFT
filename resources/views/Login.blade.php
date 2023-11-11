<div>
    <h1>Login</h1>
    <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Enter Email</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Enter Password</small>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
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


    <h2>Don't have an account yet?</h2>
    <h1><a href="{{route('registerForm')}}">Register</a></h1>
</div>
