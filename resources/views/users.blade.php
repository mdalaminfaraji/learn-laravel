<h1>Users</h1>

<ul>
    @foreach ($users as $user)
        <li>{{ $user['name'] }} - {{ $user['email'] }}
            <a href="/users/{{ $user['id'] }}">View</a>
        </li>
    @endforeach
</ul>