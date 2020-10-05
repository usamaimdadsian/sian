<div class="col-lg-4">
    <div class="card card-fluid">
      <h6 class="card-header"> Your Details</h6>
      <nav class="nav nav-tabs flex-column border-0">
        @if (Request::routeIs('student.*'))
          <a href="{{route('student.edit',$student->id ?? '')}}" class="nav-link {{Request::routeIs('student.edit') ? 'active' : ''}}">Profile</a> 
          <a href="{{route('student.accountedit',$student->id ?? '')}}" class="nav-link  {{Request::routeIs('student.accountedit') ? 'active' : ''}}">Account</a>
          <a href="user-billing-settings.html" class="nav-link">Billing</a>
          <a href="user-notification-settings.html" class="nav-link">Notifications</a>
        @endif
        @if (Request::routeIs('teacher.*'))
          <a href="{{route('teacher.edit',$teacher->id ?? '')}}" class="nav-link {{Request::routeIs('teacher.edit') ? 'active' : ''}}">Profile</a> 
          <a href="{{route('teacher.accountedit',$teacher->id ?? '')}}" class="nav-link  {{Request::routeIs('teacher.accountedit') ? 'active' : ''}}">Account</a>
          <a href="user-billing-settings.html" class="nav-link">Billing</a>
          <a href="user-notification-settings.html" class="nav-link">Notifications</a>
        @endif
      </nav>
    </div>
</div>