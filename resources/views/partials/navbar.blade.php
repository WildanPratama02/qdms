<div class="container-fluid fixed-top nav-scroll">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top px-3 px-md-4">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
            <img src="/asset/logo putih.png" alt="Parkland Logo" width="80" height="80" class="logo-img">
            <div class="brand-text ms-2">
                <h4 class="text-secondary fw-bold d-block mb-0">PARKLAND</h4>
                <h4 class="text-white d-block mb-0">JEPARA</h4>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto">
                <!-- Home -->
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                </li>

                <!-- Quality Production -->
                <li class="nav-item">
                    <a href="{{ url('/quality_production') }}" class="nav-link {{ Request::is('quality_production') ? 'active' : '' }}">Quality Production</a>
                </li>

                <!-- Quality Performance -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('rft') || Request::is('quality_kpi') || Request::is('defective_return') || Request::is('warehouse_claims') || Request::is('humidity_control') || Request::is('moisture_check') || Request::is('daily_performance') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Quality Performance
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end rounded">
                        <li><a class="dropdown-item {{ Request::is('rft') ? 'active' : '' }}" href="{{ url('/rft') }}">RFT</a></li>
                        <li><a class="dropdown-item {{ Request::is('quality_kpi') ? 'active' : '' }}" href="{{ url('/quality_kpi') }}">Quality KPI</a></li>
                        <li><a class="dropdown-item {{ Request::is('defective_return') ? 'active' : '' }}" href="{{ url('/defective_return') }}">Defective Return</a></li>
                        <li><a class="dropdown-item {{ Request::is('warehouse_claims') ? 'active' : '' }}" href="{{ url('/warehouse_claims') }}">Warehouse Claims</a></li>
                        <li><a class="dropdown-item {{ Request::is('humidity_control') ? 'active' : '' }}" href="{{ url('/humidity_control') }}">Humidity Control</a></li>
                        <li><a class="dropdown-item {{ Request::is('moisture_check') ? 'active' : '' }}" href="{{ url('/moisture_check') }}">Moisture Check</a></li>
                        <li><a class="dropdown-item {{ Request::is('daily_performance') ? 'active' : '' }}" href="{{ url('/daily_performance') }}">Daily Performance Quality</a></li>
                    </ul>
                </li>

                <!-- Quality System -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('rca_library') || Request::is('audit') || Request::is('404') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Quality System
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end rounded">
                        <li><a class="dropdown-item {{ Request::is('rca_library') ? 'active' : '' }}" href="{{ url('/rca_library') }}">RCA Library</a></li>
                        <li><a class="dropdown-item {{ Request::is('policy_library') ? 'active' : '' }}" href="{{ url('/policy_library') }}">Policy</a></li>
                        <li><a class="dropdown-item {{ Request::is('work_intruction') ? 'active' : '' }}" href="{{ url('/work_instruction_library') }}">Work Instruction</a></li>
                        <li><a class="dropdown-item {{ Request::is('audit') ? 'active' : '' }}" href="{{ url('/audit_library') }}">Audit</a></li>
                    </ul>
                </li>

                <!-- Quality Ambassador -->
                <li class="nav-item">
                    <a href="{{ url('/quality_ambassador') }}" class="nav-link {{ Request::is('quality_ambassador') ? 'active' : '' }}">Quality Ambassador</a>
                </li>

                @if(auth()->check())
                    <!-- Admin Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-warning" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-cog me-1"></i>Admin
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end rounded">
                            <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                            </a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.files.index') }}">
                                <i class="fas fa-file-alt me-2"></i>File Management
                            </a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.quality_ambassadors.index') }}">
                                <i class="fas fa-users me-2"></i>Quality Ambassadors
                            </a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="fas fa-sign-out-alt me-2"></i>Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ url('/login') }}" class="btn btn-success {{ Request::is('login') ? 'active' : '' }} px-4">Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</div>
