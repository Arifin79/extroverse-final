<input type="checkbox" id="check">
    <div class="sidebar">
      <div class="profile_info">
        <img src="{{ URL::to('img/profile.jpeg') }}" class="profile_image" alt="">
        <h4>Arifin</h4>
      </div>
      <li class="{{ set_active(['admin/dashboard']) }}"> <a href="{{ route('admin/dashboard') }}"><i class="fa fa-home" style="color: #0066FF;"></i> <span>Dashboard</span></a> </li>
      <li class="{{ set_active(['admin/assignment']) }}"> <a href="{{ route('admin/assignment') }}"><i class="fa fa-inbox" style="color: #0066FF;"></i> <span>Assignment</span></a> </li>
      <li class="{{ set_active(['admin/information']) }}"> <a href="{{ route('admin/information') }}"><i class="fa fa-envelope" style="color: #0066FF;"></i> <span>Information</span></a> </li>
      <li class="{{ set_active(['admin/team']) }}"> <a href="{{ route('admin/team') }}"><i class="fa fa-users" style="color: #0066FF;"></i> <span>Teams</span></a> </li>
      <li class="{{ set_active(['admin/register']) }}"> <a href="{{ route('admin/register') }}"><i class="fa fa-user" style="color: #0066FF;"></i> <span>Register Account</span></a> </li>
      <li class="{{ set_active(['admin/profile']) }}"> <a href="{{ route('admin/profile') }}"><i class="fa fa-user" style="color: #0066FF;"></i> <span>Profile</span></a> </li>
</div>
