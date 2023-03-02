@include('common.navigation')


<h1>Register view</h1>

<form action="{{ route('register') }}" method="post">

    @csrf

    name
    <input type="text" name="name" value="{{ old('name') }}">

    email
    <input type="email" name="email" value="{{ old('email') }}">

    password
    <input type="password" name="password" value="">

    password again
    <input type="password" name="password_confirmation" value="">

    <button>Register</button>

</form>
