<h3>My contacts</h3>
@foreach ($contacts as $contact)
    <p>{{ $contact->name }}</p>
@endforeach
