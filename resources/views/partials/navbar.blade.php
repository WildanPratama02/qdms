<div class="container-fluid fixed-top nav-scroll">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
            <a href="{{ url('/') }}" class="navbar-brand">
                <img src="/asset/logo putih.png" alt="" width="80" height="80" style="margin-left:20px;">
                <h4 class="text-secondary fw-bold d-block"><a>PARKLAND</a>&nbsp<span class="text-white">JEPARA</span></h4>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse" style="margin-right: 40px">
                <div class="navbar-nav ms-auto ">
                    <!-- Home -->
                    <a href="{{ url('/') }}" ><h5 class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</h5></a>

                    <!-- About -->
                    <a href="{{ url('/quality_production') }}" ><h5 class="nav-item nav-link {{ Request::is('quality_production') ? 'active' : '' }}">Quality Production</h5></a>

                    <!-- Services -->

                    <div class="nav-item dropdown">
                        <a href="#" ><h5 class="nav-link dropdown-toggle {{ Request::is('rft') || Request::is('quality_kpi') || Request::is('defective_return') || Request::is('warehouse_claims') || Request::is('humidity_control') || Request::is('moisture_check') || Request::is('daily_performance') ? 'active' : '' }}" data-bs-toggle="dropdown">Quality Performance</h5></a>
                        <div class="dropdown-menu rounded">
                            <a href="{{ url('/rft') }}"><h5 class="dropdown-item {{ Request::is('rft') ? 'active' : '' }}">RFT</h5></a>
                            <a href="{{ url('/quality_kpi') }}"><h5 class="dropdown-item {{ Request::is('quality_kpi') ? 'active' : '' }}">Quality KPI</h5></a>
                            <a href="{{ url('/defective_return') }}"><h5 class="dropdown-item {{ Request::is('defective_return') ? 'active' : '' }}">Defective Return</h5></a>
                            <a href="{{ url('/warehouse_claims') }}"><h5 class="dropdown-item {{ Request::is('warehouse_claims') ? 'active' : '' }}">Warehouse Claims</h5></a>
                            <a href="{{ url('/humidity_control') }}"><h5 class="dropdown-item {{ Request::is('humidity_control') ? 'active' : '' }}">Humidity Control</h5></a>
                            <a href="{{ url('/moisture_check') }}"><h5 class="dropdown-item {{ Request::is('moisture_check') ? 'active' : '' }}">Moisture Check</h5></a>
                            <a href="{{ url('/daily_performance') }}"><h5 class="dropdown-item {{ Request::is('daily_performance') ? 'active' : '' }}">Daily Performance Quality</h5></a>
                        </div>
                    </div>
                    <!-- Projects -->
                    <div class="nav-item dropdown">
                        <h5 href="#" class="nav-link dropdown-toggle {{ Request::is('rca_library') || Request::is('audit') || Request::is('404') ? 'active' : '' }}" data-bs-toggle="dropdown">Quality System</h5>
                        <div class="dropdown-menu rounded">
                            <a href="{{ url('/rca_library') }}" ><h5 class="dropdown-item {{ Request::is('rca_library') ? 'active' : '' }}">RCA Library</h5></a>
                            <a href="{{ url('/audit') }}" ><h5 class="dropdown-item {{ Request::is('audit') ? 'active' : '' }}">Audit</h5></a>
                        </div>
                    </div>
                        <a href="{{ url('/training') }}"><h5 class="nav-item nav-link {{ Request::is('training') ? 'active' : '' }}">Digital Training</h5></a>
                        <a href="{{ url('/quality_ambassador') }}"><h5 class="nav-item nav-link {{ Request::is('quality_ambassador') ? 'active' : '' }}">Quality Ambassador</h5></a>
                        <a href="{{ url('/login') }}"><h5 class="btn btn-success {{ Request::is('login') ? 'active' : '' }}">Login</h5></a>
                </div>
            </div>
        </nav>
    </div>
</div>
