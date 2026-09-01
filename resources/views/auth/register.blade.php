<form action="{{ route('register') }}" method="POST">
    @csrf
    <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="Name">
    <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Surname">
    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
    <input type="password" name="password" placeholder="password">
    <input type="password" name="password_confirmation" placeholder="Confirm password">
    <button type="submit">Register</button>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</form>