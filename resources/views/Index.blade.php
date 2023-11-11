<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    @auth
        <h3>User Logged: {{auth()->user()->email}}</h3>

        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    @endauth
    <h1>Contacts</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{$contact->id}}</td>
                <td><a href="{{route('contacts.show', $contact->id)}}">{{$contact->name}}</a></td>
                <td>{{$contact->phone}}</td>
                <td>
                    <a href="{{route('contacts.edit', $contact->id)}}" class="btn btn-primary">Edit</a>
                    <form action="{{route('contacts.destroy', $contact->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @auth
        <h1><a href="{{route('contacts.create')}}">Create New Contact</a></h1>
    @else
        <h1><a href="{{route('login')}}">Login to Create New Contact</a></h1>
    @endauth
</div>
