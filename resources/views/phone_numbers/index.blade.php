<h3>My numbers</h3>
@foreach ($phoneNumbers as $phoneNumber)
    <p>{{ $phoneNumber->number }}</p>
@endforeach
