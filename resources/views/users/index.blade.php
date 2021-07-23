@forelse ($users as $user)
    <p>{{ $user->name }}</p>
@empty
    <p>No user found</p>
@endforelse
