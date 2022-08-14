<br />

@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp

{{-- <img src="{{ $currentUser->profile_photo }}" alt="" width="100%" class="mb-4"> --}}
<img class="rounded-circle card-img-top" style="border-radius: 50%;"
    src="{{ !empty($currentUser->profile_photo) ? url('upload/user_images/', $currentUser->profile_photo) : url('upload/user_images/default.png') }}"
    alt="User Avatar" width="100%">

{{-- @if (file_exists($currentUser->profile_photo))
    <img class="rounded-circle card-img-top" style="border-radius: 50%;" src="{{ asset($currentUser->profile_photo) }}"
        alt="User Avatar" width="100%">
@else
    <img class="rounded-circle card-img-top" style="border-radius: 50%;"
        src="{{ asset('upload/user_images/default.png') }}" alt="User Avatar" width="100%">
@endif --}}
<br />
<br />

<ul class="list-group list-group-flush">
    <a href="{{ route('user.dashboard') }}"
        class="btn btn-primary btn-sm btn-block {{ $route == 'user.dashboard' ? 'active btn btn-success' : '' }} ">Home</a>
    <a href="{{ route('user.profile') }}"
        class="btn btn-primary btn-sm btn-block {{ $route == 'user.profile' ? 'active btn btn-success' : '' }}">Profile
        Update</a>
    <a href="{{ route('user.password.change') }}"
        class="btn btn-primary btn-sm btn-block {{ $route == 'user.password.change' ? 'active btn btn-success' : '' }}">Change
        Password</a>
    <a href="{{ route('my.order') }}"
        class="btn btn-primary btn-sm btn-block {{ $route == 'my.order' ? 'active btn btn-success' : '' }}">My
        Orders</a>
    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
</ul>
