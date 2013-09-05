@section("header")
<div class="header">
    <div class="container">
        <h1>Laravel Application</h1>
        @if (Auth::check())
            <a href="{{URL::route('home')}}">Home</a>&nbsp;|
            <a href="{{URL::route('user/profile')}}">Profile</a>&nbsp;|
            <a href="{{URL::route('post/user')}}">My Posts</a>&nbsp;|
            <a href="{{URL::route('post/new')}}">New Post</a>&nbsp;|
            <a href="{{URL::route('user/logout')}}">Logout</a>
        @else
            <a href="{{URL::route('home')}}">Home</a>&nbsp;|
            <a href="{{URL::route('user/login')}}">Login</a>&nbsp|
            <a href="{{URL::route('user/register')}}">Register</a>
        @endif
    </div>
</div>
@show