<!-- SET Sidebar -->
<div class="b-example-divider"></div>
<div style="height:88vh;" class="bg-dxark d-flex flex-column flex-shrink-0 p-2 bg-light">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4"><strong>PAYROLL</strong></span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <!-- <li class="nav-item">
      <a href="#" class="nav-link" aria-current="page">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
        <i class="fa fa-home"></i>
        Home
      </a>
    </li> -->
        <!-- <li>
      <a href="/layout" class="nav-link link-dark">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
        <i class="fa fa-tachometer"></i>
        Dashboard
      </a>
    </li> -->
        <li>
            <a href="/departments" class="nav-link link-dark @if($active == 'department') active @endif"
                aria-current="page">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#table"></use>
                </svg>
                <i class="fa fa-building"></i>
                Departments
            </a>
        </li>
        <li>
            <a href="/employees" class="nav-link link-dark @if($active == 'employees') active @endif">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#grid"></use>
                </svg>
                <i class="fa fa-users"></i>
                Employees
            </a>
        </li>
        <li>
            <a href="/leaves" class="nav-link link-dark @if($active == 'leaves') active @endif">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#people-circle"></use>
                </svg>
                <i class="fa fa-calendar"></i>
                Leaves
            </a>
        </li>
        <li>
            <a href="/loans" class="nav-link link-dark @if($active == 'loans') active @endif">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#people-circle"></use>
                </svg>
                <i class="fa fa-calendar"></i>
                Loans
            </a>
        </li>
        <li>
            <a href="/mandatory-deductions"
                class="nav-link link-dark @if($active == 'mandatory-deductions') active @endif">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#people-circle"></use>
                </svg>
                <i class="fa fa-money"></i>
                Mandatory Deductions
            </a>
        </li>
        <li>
            <a href="/timekeeping" class="nav-link link-dark @if($active == 'timekeeping') active @endif">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#people-circle"></use>
                </svg>
                <i class="fa fa-calendar"></i>
                Time Keeping
            </a>
        </li>
        <li>
            <a href="/payslips" class="nav-link link-dark @if($active == 'payslips') active @endif">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#people-circle"></use>
                </svg>
                <i class="fa fa-money"></i>
                Payslips
            </a>
        </li>
        <!-- <li>
      <a href="/settings" class="nav-link link-dark {{ Request::path() ==  'settings' ? 'active' : ''  }}">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
        <i class="fa fa-cog"></i>

       Settings
      </a>
    </li> -->
    </ul>
    <hr>
    <!-- <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div> -->
</div>