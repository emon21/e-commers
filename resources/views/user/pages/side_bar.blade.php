<br />

<img class="rounded-circle card-img-top" style="border-radius: 50%;"
    src="{{ !empty($user->profile_photo) ? url('upload/user_images/' . $user->profile_photo) : url('upload/no_image.jpg') }}"
    alt="User Avatar" width="100%">
<br />
<br />

<ul class="list-group list-group-flush">
    <a href="{{ route('user.dashboard') }}" class="btn btn-primary btn-sm btn-block">Home</a>
    <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block">Profile Update</a>
    <a href="{{ route('user.password.change') }}" class="btn btn-primary btn-sm btn-block">Change Password</a>
    <a href="{{ route('my.order') }}" class="btn btn-primary btn-sm btn-block">My Orders</a>
    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
</ul>
