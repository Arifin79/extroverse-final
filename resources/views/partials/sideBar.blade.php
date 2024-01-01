<input type="checkbox" id="check">
    <div class="sidebar">
      <div class="profile_info">
        <img src="{{ URL::to('img/profile.jpeg') }}" class="profile_image" alt="">
        <h4>{{ Auth::user()->name }}</h4>
      </div>
      <li class="{{ set_active(['dashboard']) }}"> <a href="{{ route('dashboard') }}"><i class="fa fa-home" style="color: #0066FF;"></i> <span>Dashboard</span></a> </li>
      <li class="{{ set_active(['assignment']) }}"> <a href="{{ route('assignment') }}"><i class="fa fa-inbox" style="color: #0066FF;"></i> <span>Assignment</span></a> </li>
      <li class="{{ set_active(['information']) }}"> <a href="{{ route('information') }}"><i class="fa fa-envelope" style="color: #0066FF;"></i> <span>Information</span></a> </li>
      <li class="{{ set_active(['team']) }}"> <a href="{{ route('team') }}"><i class="fa fa-users" style="color: #0066FF;"></i> <span>Teams</span></a> </li>
      <li class="{{ set_active(['profile']) }}"> <a href="{{ route('profile') }}"><i class="fa fa-user" style="color: #0066FF;"></i> <span>Profile</span></a> </li>
</div>
