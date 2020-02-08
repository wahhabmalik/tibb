@extends('dashboard.layouts.app')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/css/plugins/dataTables/datatables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/css/plugins/jasny/jasny-bootstrap.min.css') }}">
<style type="text/css">
.ibox-tools {
    width: 50%;
    float: right;
}
.btn-group-sm>.btn, .btn-sm {
    padding: 2px 7px;
    margin-bottom: 0px !important;
}
.group {
    margin-top: 10px;
}
#company_name_opt,#company_web_opt{
    display: none;
}
</style>
@endsection

@section('content')
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-success pull-right">Today</span>
                    <h5>Patient Treated</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">40</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Total Patient Treated</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-info pull-right">Today</span>
                    <h5>Patient Awaited</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">27</h1>
                    <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                    <small>Total Patient Awaited</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-primary pull-right">Monthly</span>
                    <h5>Scheduled</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">10</h1>
                    <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
                    <small>New visits</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-danger pull-right">Low value</span>
                    <h5>User activity</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">80,600</h1>
                    <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
                    <small>In first month</small>
                </div>
            </div>
        </div>
    </div>


    
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>User project list</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="close-link">
                                <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <table class="table table-hover no-margins">
                                <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>User</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><small>Pending...</small></td>
                                        <td><i class="fa fa-clock-o"></i> 11:20pm</td>
                                        <td>Samantha</td>
                                        <td class="text-navy"> <i class="fa fa-level-up"></i> 24% </td>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-warning">Canceled</span> </td>
                                        <td><i class="fa fa-clock-o"></i> 10:40am</td>
                                        <td>Monica</td>
                                        <td class="text-navy"> <i class="fa fa-level-up"></i> 66% </td>
                                    </tr>
                                    <tr>
                                        <td><small>Pending...</small> </td>
                                        <td><i class="fa fa-clock-o"></i> 01:30pm</td>
                                        <td>John</td>
                                        <td class="text-navy"> <i class="fa fa-level-up"></i> 54% </td>
                                    </tr>
                                    <tr>
                                        <td><small>Pending...</small> </td>
                                        <td><i class="fa fa-clock-o"></i> 02:20pm</td>
                                        <td>Agnes</td>
                                        <td class="text-navy"> <i class="fa fa-level-up"></i> 12% </td>
                                    </tr>
                                    <tr>
                                        <td><small>Pending...</small> </td>
                                        <td><i class="fa fa-clock-o"></i> 09:40pm</td>
                                        <td>Janet</td>
                                        <td class="text-navy"> <i class="fa fa-level-up"></i> 22% </td>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-primary">Completed</span> </td>
                                        <td><i class="fa fa-clock-o"></i> 04:10am</td>
                                        <td>Amelia</td>
                                        <td class="text-navy"> <i class="fa fa-level-up"></i> 66% </td>
                                    </tr>
                                    <tr>
                                        <td><small>Pending...</small> </td>
                                        <td><i class="fa fa-clock-o"></i> 12:08am</td>
                                        <td>Damian</td>
                                        <td class="text-navy"> <i class="fa fa-level-up"></i> 23% </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Messages</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                        <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content ibox-heading">
                    <h3><i class="fa fa-envelope-o"></i> New messages</h3>
                    <small><i class="fa fa-tim"></i> You have 22 new messages and 16 waiting in draft folder.</small>
                </div>
                <div class="ibox-content">
                    <div class="feed-activity-list">
                        <div class="feed-element">
                            <div>
                                <small class="pull-right text-navy">1m ago</small>
                                <strong>Monica Smith</strong>
                                <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</div>
                                <small class="text-muted">Today 5:60 pm - 12.06.2014</small>
                            </div>
                        </div>
                        <div class="feed-element">
                            <div>
                                <small class="pull-right">2m ago</small>
                                <strong>Jogn Angel</strong>
                                <div>There are many variations of passages of Lorem Ipsum available</div>
                                <small class="text-muted">Today 2:23 pm - 11.06.2014</small>
                            </div>
                        </div>
                        <div class="feed-element">
                            <div>
                                <small class="pull-right">5m ago</small>
                                <strong>Jesica Ocean</strong>
                                <div>Contrary to popular belief, Lorem Ipsum</div>
                                <small class="text-muted">Today 1:00 pm - 08.06.2014</small>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><button class="btn btn-sm btn-success" onclick="openPatientRegistration()">Add Patient</button></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Appointment Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($patients as $key => $patient)
                                    <tr class="gradeX">
                                        <td>{{ $key++ }}</td>
                                        <td>{{ $patient->user->name . ' ' . $patient->user->l_name  }}</td>
                                        <td>{{ \Carbon::parse($patient->dob)->age }}</td>
                                        <td><i class="fa fa-clock-o"></i> 01:30pm
                                        </td>
                                        <td><span class="label label-custom">Awaited</span></td>
                                        <td>
                                            <a title="Edit record" href="#" class="btn btn-custom btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('rx_order', $patient) }}" class="btn btn-primary btn-sm">Treat Patient</a>
                                            <button  class="btn btn-warning btn-sm" onclick="openVitals()">Add Vitals</button>
                                        </td>
                                    </tr>     
                                @endforeach                           
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- Vitals Modal --}}
<div class="modal inmodal" id="vitalsModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated bounceInRight">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <i class="fa fa-stethoscope modal-icon"></i>
                <h4 class="modal-title">Add Vitals</h4>
                <small class="font-bold">Add Vitals details here</small>
            </div>
            <form id="update_form" action="" method="POST">
            <div class="modal-body">
                 @csrf
                <input type="hidden" name="user_type" value="patient">
                <div class="row">
                    
                    <div class="group col-sm-12">
                        <label for="name" class="label mt-2">Blood Pressure</label>
                        <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        value="{{ old('name') }}" 
                        class="input form-control @error('name') is-invalid @enderror" 
                        required >

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="group col-sm-12">
                        <label for="name" class="label mt-2">Temprature</label>
                        <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        value="{{ old('name') }}" 
                        class="input form-control @error('name') is-invalid @enderror" 
                        required >

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="group col-sm-12">
                        <label for="name" class="label mt-2">Fever</label>
                        <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        value="{{ old('name') }}" 
                        class="input form-control @error('name') is-invalid @enderror" 
                        required >

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="group col-sm-12">
                        <label for="name" class="label mt-2">Height</label>
                        <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        value="{{ old('name') }}" 
                        class="input form-control @error('name') is-invalid @enderror" 
                        required >

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="group col-sm-12">
                        <label for="name" class="label mt-2">Weight</label>
                        <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        value="{{ old('name') }}" 
                        class="input form-control @error('name') is-invalid @enderror" 
                        required >

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="group col-sm-12">
                        <label for="name" class="label mt-2">Skin Color</label>
                        <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        value="{{ old('name') }}" 
                        class="input form-control @error('name') is-invalid @enderror" 
                        required >

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="group col-sm-12">
                        <label for="name" class="label mt-2">Eye Condition</label>
                        <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        value="{{ old('name') }}" 
                        class="input form-control @error('name') is-invalid @enderror" 
                        required >

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="group col-sm-12">
                        <label for="name" class="label mt-2">Pulse</label>
                        <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        value="{{ old('name') }}" 
                        class="input form-control @error('name') is-invalid @enderror" 
                        required >

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="group col-sm-12">
                        <label for="name" class="label mt-2">Oxygen Sat Rate</label>
                        <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        value="{{ old('name') }}" 
                        class="input form-control @error('name') is-invalid @enderror" 
                        required >

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    


                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
{{-- Vitals Modal --}}



{{-- Patient Modal --}}

<div class="modal inmodal" id="patientModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated bounceInRight">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <i class="fa fa-user-plus modal-icon"></i>
                <h4 class="modal-title">Add Patient</h4>
                <small class="font-bold">Add patient details here</small>
            </div>
            <form id="update_form" action="" method="POST">
            <div class="modal-body">
                {{-- @csrf --}}
                
                {{-- <div class="form-group">
                    <label class="col-sm-2 control-label" required>Status</label>

                    <div class="col-sm-10">
                        <select class="form-control" name="status">
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                    
                    </div>
                </div> --}}
                
                                @csrf
                                <input type="hidden" name="user_type" value="patient">
                                <div class="row">
                                    <div class="group col-sm-6">
                                        <label for="name" class="label mt-2">First Name</label>
                                        <input 
                                        type="text" 
                                        name="name" 
                                        id="name" 
                                        value="{{ old('name') }}" 
                                        class="input form-control @error('name') is-invalid @enderror" 
                                        required >

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="group col-sm-6">
                                        <label for="l_name" class="label mt-2">Last Name</label>
                                        <input 
                                        type="text" 
                                        name="l_name" 
                                        id="l_name" 
                                        value="{{ old('l_name') }}" 
                                        class="input form-control @error('l_name') is-invalid @enderror" 
                                        required >

                                        @error('l_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="group col-sm-6">
                                        <div class="form-wrapper">
                                            <label for="dp1" class="label mt-2">Date of Birth</label>
                                            
                                            <input 
                                            type="date" 
                                            name="dob" 
                                            {{-- class="input form-control datepicker-here" --}}
                                            class="input form-control" 
                                            {{-- data-language='en'  --}}
                                            {{-- data-date-format="dd M yyyy"  --}}
                                            value="{{ old('dob') }}" 
                                            {{-- id="dp1" --}}
                                            >

                                            @error('dob')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                    </div>


                                    <div class="group col-sm-6">
                                        <label for="emp_status" class="label mt-2">Employee Status</label>
                                        
                                        <select 
                                        id="emp_status"
                                        name="emp_status" 
                                        class="input form-control @error('emp_status') is-invalid @enderror"
                                        required>
                                            <option value="">Select Employee Status</option>
                                            <option value="Employeed">Employeed</option>
                                            <option value="Unemployeed">Unemployeed</option>
                                        </select>

                                        @error('emp_status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="group col-sm-6" id="company_name_opt">
                                        <label for="company_name" class="label mt-2">Organisation Name</label>
                                        
                                        <input 
                                        type="text" 
                                        name="company_name" 
                                        id="company_name" 
                                        class="input form-control @error('company_name') is-invalid @enderror"
                                        value="{{ old('company_name') }}" 
                                        >

                                        @error('company_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="group col-sm-6" id="company_web_opt">
                                        <label for="company_web" class="label mt-2">Organisation Website</label>
                                        
                                        <input 
                                        type="text" 
                                        name="company_web" 
                                        id="company_web" 
                                        class="input form-control @error('company_web') is-invalid @enderror"
                                        value="{{ old('company_web') }}" 
                                        >

                                        @error('company_web')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="group col-sm-6">
                                        <label for="marital_status" class="label mt-2">Marital Status</label>
                                        
                                        <select 
                                        id="marital_status"
                                        name="marital_status" 
                                        class="input form-control @error('marital_status') is-invalid @enderror">
                                            <option>Single</option>
                                            <option>Married</option>
                                            <option>Divorced</option>
                                            <option>Widow</option>
                                        </select>

                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="group col-sm-6">
                                        <label for="family_size" class="label mt-2">Family Size</label>
                                        <input 
                                        type="number" 
                                        name="family_size" 
                                        id="family_size" 
                                        class="input form-control @error('family_size') is-invalid @enderror"
                                        value="{{ old('family_size') }}" 
                                        required >

                                        @error('family_size')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="group col-sm-12">
                                        <label for="address" class="label mt-2">Address</label>
                                        <input 
                                        type="text" 
                                        name="address" 
                                        id="address" 
                                        value="{{ old('address') }}"
                                        class="input form-control @error('address') is-invalid @enderror"
                                        required >

                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="group col-sm-12">
                                        <label for="nic_no" class="label mt-2">NIC #</label>
                                        <input 
                                        type="text" 
                                        name="nic_no" 
                                        id="nic_no" 
                                        value="{{ old('nic_no') }}"
                                        class="form-control @error('nic_no') is-invalid @enderror"
                                        data-mask="99999-9999999-9"
                                        required >
                                        <span class="help-block">99999-9999999-9</span>

                                        @error('nic_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="group col-sm-6">
                                        <label for="email" class="label mt-2">Email</label>
                                        <input 
                                        type="email" 
                                        name="email" 
                                        id="email" 
                                        class="input form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" 
                                        required >

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="group col-sm-6">
                                        <label for="phone" class="label mt-2">Telephone #</label>
                                        <input 
                                        type="number" 
                                        name="phone" 
                                        id="phone" 
                                        class="input form-control @error('phone') is-invalid @enderror"
                                        value="{{ old('phone') }}" 
                                        required >

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    
                                    {{-- <div class="group col-sm-6">
                                        <label for="password" class="label mt-2">Password</label>
                                        <input 
                                        id="password" 
                                        type="password" 
                                        class="input form-control @error('password') is-invalid @enderror" 
                                        name="password" 
                                        autocomplete="new-password" 
                                        data-type="password"
                                        required >

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="group col-sm-6">
                                        <label for="password-confirm" class="label mt-2">Confirm Password</label>
                                        <input 
                                        id="password-confirm" 
                                        type="password" 
                                        class="input form-control" 
                                        name="password_confirmation" 
                                        required 
                                        autocomplete="new-password" 
                                        data-type="password">
                                    </div> --}}
                                </div>

                                
                                {{-- <div class="group mt-4">
                                    <button class="input button btn-danger" value="Sign In">Register</button>
                                </div> --}}
                                {{-- <div class="hr"></div> --}}
                            

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>


{{-- Patient Modal --}}
@endsection


@section('scripts')
<script src="{{ asset('backend_assets/js/plugins/dataTables/datatables.min.js') }} "></script>
<script src="{{ asset('backend_assets/js/plugins/jasny/jasny-bootstrap.min.js') }} "></script>
<script>
    $(document).ready(function(){
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                {extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},
                {extend: 'print',
                    customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                }
            ]

        });

    });

</script>

<script type="text/javascript">
function openVitals(){

    $('#vitalsModal').modal();
    $('#update_form').attr('action', 'vitals');
}

function openPatientRegistration(){
    $('#patientModal').modal();
    $('#update_form').attr('action', 'manual-patient-registration');
    // $('#update_form').attr('method', 'post');
}

$('#emp_status').change(function(){
    if($('#emp_status').val() == 'Employeed'){
        $('#company_name_opt').show('slow');
        $('#company_web_opt').show('slow');
    }
    else{
        $('#company_name_opt').hide('slow');
        $('#company_web_opt').hide('slow');
    }
});

</script>
@endsection