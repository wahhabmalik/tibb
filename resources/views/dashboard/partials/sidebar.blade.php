@inject('request', 'Illuminate\Http\Request')

<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                    <a href="{{ route('/') }}"><img alt="image"  src="{{ asset('frontend_assets/img/tibb-maroon-logo.png') }}" class="img img-responsive" /></a>
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"></a>
                    <span class="clear"></span> <span class="block m-t-xs"> <strong class="font-bold" style="color:#ce3024">Health care powered by AI</strong>
                    </span> 
                </div>
                <div class="logo-element">
                    Tibb
                </div>
            </li>

            <li class="{{ (Request::is('dashboard') || Request::is('home'))? 'active' : '' }}" >
                <a href="{{ route('dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dasboard</span></a>
            </li>

           
            
            <li class="{{ (Request::is('physician') || $request->segment(1) == 'physician')? 'active' : '' }}">
                <a href="#"><i class="fa fa-stethoscope"></i><span class="nav-label">physician</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{ (Request::is('physician'))? 'active' : '' }}" >
                        <a href="{{ route('physician.index')}}">All physician</a>
                    </li>
                    <li class="{{ (Request::is('physician'))? 'active' : '' }}" >
                        <a href="{{ route('physician.create')}}">Add New</a>
                    </li>
                    
                </ul>
            </li>
            
            <li class="{{ (Request::is('pharmacist') || $request->segment(1) == 'pharmacist')? 'active' : '' }}">
                <a href="#"><i class="fa fa-plus-square"></i><span class="nav-label">Pharmacist</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{ (Request::is('pharmacist'))? 'active' : '' }}" >
                        <a href="{{ route('pharmacist.index')}}">All Pricing</a>
                    </li>
                    <li class="{{ (Request::is('pharmacist'))? 'active' : '' }}" >
                        <a href="{{ route('pharmacist.create')}}">Add New</a>
                    </li>
                    
                </ul>
            </li>
            
            <li class="{{ (Request::is('patient') || $request->segment(1) == 'patient')? 'active' : '' }}">
                <a href="#"><i class="fa fa-user-plus"></i><span class="nav-label">Patients</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{ (Request::is('patient'))? 'active' : '' }}" >
                        <a href="{{ route('patient.index')}}">All Patients</a>
                    </li>
                    <li class="{{ (Request::is('patient'))? 'active' : '' }}" >
                        <a href="{{ route('patient.create')}}">Add New</a>
                    </li>
                    
                </ul>
            </li>
            
            <li class="{{ (Request::is('participants') || $request->segment(1) == 'add_participant' || $request->segment(1) == 'participant')? 'active' : '' }}">
                <a href="#"><i class="fa fa-users"></i> <span class="nav-label">users</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{ (Request::is('participants'))? 'active' : '' }}" >
                        {{-- <a href="{{ route('participants')}}">All Participants</a> --}}
                    </li>
                    <li class="{{ (Request::is('add_participant'))? 'active' : '' }}" >
                        {{-- <a href="{{ route('add_participant')}}">Add New</a> --}}
                    </li>
                    
                </ul>
            </li>

             <li class="{{ (Request::is('organisations') || $request->segment(1) == 'add_organisation' || $request->segment(1) == 'organisation')? 'active' : '' }}">
                <a href="#"><i class="fa fa-building"></i> <span class="nav-label">Organisation</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{ (Request::is('organisations'))? 'active' : '' }}" >
                        {{-- <a href="{{ route('organisations')}}">All Organisation</a> --}}
                    </li>
                    <li class="{{ (Request::is('add_organisation'))? 'active' : '' }}" >
                        {{-- <a href="{{ route('add_organisation')}}">Add New</a> --}}
                    </li>
                    
                </ul>
            </li>
            
            <li class="{{ (Request::is('invoices') || $request->segment(1) == 'generate_invoice' || $request->segment(1) == 'invoice_prefilled' || $request->segment(1) == 'prefilled_data')? 'active' : '' }}">
                <a href="#"><i class="fa fa-money"></i> <span class="nav-label">Invoices</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{ (Request::is('invoices') || $request->segment(1) == 'prefilled_data')? 'active' : '' }}" >
                        {{-- <a href="{{ route('invoices')}}">All Invoices</a> --}}
                    </li>
                    <li class="{{ (Request::is('generate_invoice') || $request->segment(1) == 'prefilled_data')? 'active' : '' }}" >
                        {{-- <a href="{{ route('generate_invoice')}}">Generate Invoice</a> --}}
                    </li>
                    {{-- <li class="{{ (Request::is('invoice_prefilled'))? 'active' : '' }}" >
                        <a href="{{ route('invoice_prefilled')}}"></a>
                    </li>
                     --}}
                     <li>
                        <a href="#">Invoice Prefilled<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                {{-- <a href="{{ route('invoice_prefilled')}}">Add New</a> --}}
                            </li>
                            <li>
                                {{-- <a href="{{ route('prefilled_data', 'q=HEADER_TEXT_FIELD') }}">HEADER_TEXT_FIELD</a> --}}
                            </li>
                            <li>
                                {{-- <a href="{{ route('prefilled_data', 'q=Text_HT') }}">Text_HT</a> --}}
                            </li>
                            <li>
                                {{-- <a href="{{ route('prefilled_data', 'q=Text_Field') }}">Text_Field</a> --}}
                            </li>
                            <li>
                                {{-- <a href="{{ route('prefilled_data', 'q=Text_uc') }}">Text_uc</a> --}}
                            </li>

                        </ul>
                    </li>
                    
                </ul>
            </li>
            
            

            {{-- <li class="{{ (Request::is('Organization') || $request->segment(1) == 'add_program')? 'active' : '' }}">
                <a href="#"><i class="fa fa-building"></i> <span class="nav-label">Programs</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{ (Request::is('programs'))? 'active' : '' }}" >
                        <a href="{{ route('programs')}}">All Programs</a>
                    </li>
                    <li class="{{ (Request::is('add_program'))? 'active' : '' }}" >
                        <a href="{{ route('add_program')}}">Add New</a>
                    </li>
                    
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-search"></i> <span class="nav-label">Search (under dev)</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('search_followup')}}">Search Followup (under dev)</a></li>
                    <li><a href="{{ route('create_company')}}">Dollar Value Client (under dev)</a></li>
                    
                </ul>
            </li> --}}
        </ul>
    </div>
</nav>