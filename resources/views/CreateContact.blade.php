<div>
    <h1>Create New Contact</h1>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Contact Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Contact Name" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="contact">Contact Phone</label>
            <input type="text" name="contact" id="contact" class="form-control" placeholder="Enter Contact Phone" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="phone">Contact Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Contact Email" aria-describedby="helpId">
        </div>
        <button type="submit" class="btn btn-primary">Create Contact</button>
    </form>
</div>
