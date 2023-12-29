<nav class="sidebar">
    <div class="sidebar-header">
      <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">
        H<span>Resources</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Main</li>

        @if (Auth::user()->is_role == 1)

        <li class="nav-item">
          <a href="{{ route('admin.dashboard') }}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('all.employee') }}" class="nav-link">
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">Employees</span>
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('all.jobs') }}" class="nav-link">
              <i class="link-icon" data-feather="briefcase"></i>
              <span class="link-title">Jobs</span>
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('all.history') }}" class="nav-link">
              <i class="link-icon" data-feather="book-open"></i>
              <span class="link-title">Job History</span>
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('all.grade') }}" class="nav-link">
              <i class="link-icon" data-feather="star"></i>
              <span class="link-title">Grades</span>
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('all.department') }}" class="nav-link">
              <i class="link-icon" data-feather="home"></i>
              <span class="link-title">Department</span>
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('all.country') }}" class="nav-link">
              <i class="link-icon" data-feather="flag"></i>
              <span class="link-title">Countries</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('all.location') }}" class="nav-link">
              <i class="link-icon" data-feather="navigation"></i>
              <span class="link-title">Location</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('all.region') }}" class="nav-link">
              <i class="link-icon" data-feather="aperture"></i>
              <span class="link-title">Region</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('all.manager') }}" class="nav-link">
              <i class="link-icon" data-feather="user"></i>
              <span class="link-title">Manager</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('all.payroll') }}" class="nav-link">
              <i class="link-icon" data-feather="credit-card"></i>
              <span class="link-title">Pay Roll</span>
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('all.position') }}" class="nav-link">
              <i class="link-icon" data-feather="user"></i>
              <span class="link-title">Position</span>
            </a>
        </li>


        <li class="nav-item nav-category">web apps</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Email</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="emails">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/email/inbox.html" class="nav-link">Inbox</a>
              </li>
              <li class="nav-item">
                <a href="pages/email/read.html" class="nav-link">Read</a>
              </li>
              <li class="nav-item">
                <a href="pages/email/compose.html" class="nav-link">Compose</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a href="pages/apps/chat.html" class="nav-link">
            <i class="link-icon" data-feather="message-square"></i>
            <span class="link-title">Chat</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/apps/calendar.html" class="nav-link">
            <i class="link-icon" data-feather="calendar"></i>
            <span class="link-title">Calendar</span>
          </a>
        </li>






        <li class="nav-item nav-category">Pages</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#authPages" role="button" aria-expanded="false" aria-controls="authPages">
            <i class="link-icon" data-feather="unlock"></i>
            <span class="link-title">Authentication</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="authPages">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link">Login</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link">Register</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item nav-category">Docs</li>
        <li class="nav-item">
          <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
            <i class="link-icon" data-feather="hash"></i>
            <span class="link-title">Documentation</span>
          </a>
        </li>
        @endif

        @if (Auth::user()->is_role == 0)
        <li class="nav-item">
            <a href="{{ route('employess.dashboard') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
        <li class="nav-item">
            <a href="{{ route('employee.account') }}" class="nav-link">
              <i class="link-icon" data-feather="settings"></i>
              <span class="link-title">My Acount</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('all.interview') }}" class="nav-link">
              <i class="link-icon" data-feather="settings"></i>
              <span class="link-title">Interview</span>
            </a>
        </li>
        @endif
      </ul>
    </div>
  </nav>
