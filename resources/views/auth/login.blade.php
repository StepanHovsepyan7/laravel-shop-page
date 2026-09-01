<form action="{{ route('login') }}" method="POST">
    @csrf
    <input placeholder="email" type="email" name="email" value="{{ old('email') }}">
    <input placeholder="password" type="password" name="password">
    <button type="submit">Login</button>
</form>