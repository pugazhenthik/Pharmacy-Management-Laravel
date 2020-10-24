<nav id="sidebar">
    <div class="shadow-bottom"></div>
    <ul class="list-unstyled menu-categories" id="accordionExample">
        <li class="menu">
            <a href="{{url('/admin')}}" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <i data-feather="home"></i>
                    <span>Dashboard</span>
                </div>
            </a>
        </li>

        <li class="menu">
            <a href="#Medicine" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <i data-feather="plus-circle"></i>
                    <span>Medicine</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="Medicine" data-parent="#accordionExample">
                <li>
                    <a href="{{ url('/admin/medicine/create') }}"> Add Medicine </a>
                </li>
                <li>
                    <a href="{{ url('/admin/medicine') }}">Medicine List</a>
                </li>
                <li>
                    <a href="{{ url('/admin/category') }}">Medicine Category</a>
                </li>
                <li>
                    <a href="{{ url('/admin/type') }}">Medicine Type</a>
                </li>
                <li>
                    <a href="{{ url('/admin/unit') }}">Unit</a>
                </li>

            </ul>
        </li>

        <li class="menu">
            <a href="{{ url('/admin/manufacture') }}" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <i data-feather="archive"></i>
                    <span>Manufacture</span>
                </div>
            </a>
        </li>
        <li class="menu">
            <a href="{{ url('/admin/generic') }}" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <i data-feather="layers"></i>
                    <span>Generic</span>
                </div>
            </a>
        </li>

        <li class="menu">
            <a href="{{ url('/admin/supplier') }}" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <i data-feather="truck"></i>
                    <span>Supplier</span>
                </div>
            </a>
        </li>



        <li class="menu">
            <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                    <span>Sale</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="app" data-parent="#accordionExample">
                <li>
                    <a href=""> Sale List </a>
                </li>
                <li>
                    <a href="{{ url('/admin/sell') }}"> Add Sale  </a>
                </li>
                <li>
                    <a href="/admin/customar"> Customer</a>
                </li>                            
               
            </ul>
        </li>

    </ul>
</nav>