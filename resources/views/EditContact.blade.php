<div>
    <h1>Edit Contact</h1>
    <form action="{{route('contacts.update', $contact->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" value="{{$contact->name}}" class="form-control" name="name" id="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" value="{{$contact->contact}}" class="form-control" name="contact" id="contact" placeholder="Enter contact">
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
