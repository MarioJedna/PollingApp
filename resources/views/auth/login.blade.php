@include('common.navigation')


<h1>Login View</h1>

<form action="{{ route('login') }}" method="post">

    @csrf

    email
    <input type="email" name="email" value="{{ old('email') }}">

    password
    <input type="password" name="password" value="">

    <button>Login</button>

</form>
