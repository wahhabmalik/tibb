@extends('dashboard.layouts.app')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/css/plugins/dataTables/datatables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/css/plugins/jasny/jasny-bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/css/plugins/chosen/bootstrap-chosen.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/css/plugins/dualListbox/bootstrap-duallistbox.min.css') }}">
<style type="text/css">
.nav.nav-tabs li {
    width: 25%;
}
</style>
@endsection


@section('content')
{{-- <div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Patient detail</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="active">
                <strong>Patient detail</strong>
            </li>
        </ol>
    </div>
</div> --}}

{{-- <form id="update_form2" method="post" action="{{ route('import_csv') }}" enctype="multipart/form-data">
    <div class="modal-body">
        
        @csrf
        
        <div class="form-group row">
            <label class="col-sm-4 control-label">Attach File:</label>
            <div class="col-sm-8">
                <input 
                type="file"
                name="import_csv"
                class="form-control"
                accept=".csv" 
                >
            </div>
        </div>

    </div>

    <br>
    <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary">Upload</button>
    </div>
</form> --}}




<div class="row">
    <div class="col-lg-9">
        <div class="wrapper wrapper-content animated fadeInUp">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="m-b-md">
                                <a href="#" class="btn btn-white btn-xs pull-right">Patient History</a>
                                <h2>Patient Name: {{ $user->name . ' ' . $user->l_name  }}</h2>
                            </div>
                            {{-- <dl class="dl-horizontal">
                                <dt>Status:</dt>
                                <dd><span class="label label-primary">Active</span></dd>
                            </dl> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <dl class="dl-horizontal">
                                <dt>Created by:</dt>
                                <dd>{{ $user->name . ' ' . $user->l_name  }}</dd>
                                <dt>Age:</dt>
                                <dd>{{ \Carbon::parse($user->dob)->age }}</dd>
                                <dt>Mr-no:</dt>
                                <dd>2545</dd>
                                <dt>Last visit date:</dt>
                                <dd>16.08.2014 12:15:57</dd>
                            </dl>
                        </div>
                        
                    </div>
                    {{-- <div class="row">
                        <div class="col-lg-12">
                            <dl class="dl-horizontal">
                                <dt>Completed:</dt>
                                <dd>
                                    <div class="progress progress-striped active m-b-sm">
                                        <div style="width: 60%;" class="progress-bar"></div>
                                    </div>
                                    <small>Project completed in <strong>60%</strong>. Remaining close the project, sign a contract and invoice.</small>
                                </dd>
                            </dl>
                        </div>
                    </div> --}}
                    <div class="row m-t-sm">
                        <div class="col-lg-12">
                            <div class="panel blank-panel">
                                <div class="panel-heading">
                                    <div class="panel-options">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab-1" data-toggle="tab">Diagnosis</a></li>
                                            <li class=""><a href="#tab-2" data-toggle="tab">Alergies</a></li>
                                            <li class=""><a href="#tab-3" data-toggle="tab">Diet</a></li>
                                            <li class=""><a href="#tab-4" data-toggle="tab">Medication</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab-1">
                                            {{-- <div class="feed-activity-list">
                                                <div class="feed-element">
                                                    <a href="#" class="pull-left">
                                                    <img alt="image" class="img-circle" src="{{ asset('backend_assets/img/a2.jpg') }}">
                                                    </a>
                                                    <div class="media-body ">
                                                        <small class="pull-right">2h ago</small>
                                                        <strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                                        <small class="text-muted">Today 2:10 pm - 12.06.2014</small>
                                                        <div class="well">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                            Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="feed-element">
                                                    <a href="#" class="pull-left">
                                                    <img alt="image" class="img-circle" src="{{ asset('backend_assets/img/a3.jpg') }}">
                                                    </a>
                                                    <div class="media-body ">
                                                        <small class="pull-right">2h ago</small>
                                                        <strong>Janet Rosowski</strong> add 1 photo on <strong>Monica Smith</strong>. <br>
                                                        <small class="text-muted">2 days ago at 8:30am</small>
                                                    </div>
                                                </div>
                                                
                                            </div> --}}
                                            <table class="table table-striped" id="diag-table">
                                                <thead>
                                                    <tr>
                                                        <th>ICD-10</th>
                                                        <th>Symptoms</th>
                                                        <th>Comments</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr id="diag">
                                                    	<td style="width: 50%">
                                                    		<select data-placeholder="Choose ICD Code..." class="chosen-select"  tabindex="2">
												                <option value="">Select</option>
												                @foreach($diseases as $disease)
												                	<option>{{ $disease->code . ' ' . $disease->description }}</option>
												                @endforeach
											                </select>
                                                    	</td>
                                                        <td>
                                                            <input 
                                                            type="text" 
                                                            class="form-control"
                                                            name="symptoms[]" 
                                                            >
                                                        </td>
                                                        <td>
                                                            <input 
                                                            type="text" 
                                                            class="form-control"
                                                            name="symptoms[]" 
                                                            >
                                                        </td>
                                                        
                                                        <td>
                                                            <button class="btn btn-success btn-sm" onClick="clone()"><i class="fa fa-plus" ></i></button>
                                                        </td>
                                                    </tr>
                                                    
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab-2">
                                            
                                            <h3>
				                                Select ICD-10/Disease
				                            </h3>

				                            <form id="form" action="#" class="wizard-big">
				                                <select class="form-control dual_select" multiple>
				                                    <option>Food Allergy</option>
				                                    <option>Skin Allergy</option>
				                                    <option>Dust Allergy</option>
				                                    <option>Insect Sting Allergy</option>
				                                    <option>Pet Allergy</option>
				                                    <option>Eye Allergy</option>
				                                    <option>Drug Allergies</option>
				                                    <option>Allergic Rhinitis</option>
				                                    <option>Latex Allergy</option>
				                                </select>
				                            </form>
                                        </div>
                                        <div class="tab-pane" id="tab-3">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>ICD-10</th>
                                                        <th>Symptoms</th>
                                                        <th>Comments</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    	<td>
                                                    		<div>
												                <select data-placeholder="Choose ICD Code..." class="chosen-select"  tabindex="2">
													                <option value="">Select</option>
													                <option value="United States">United States</option>
													                <option value="United Kingdom">United Kingdom</option>
													                <option value="Zimbabwe">Zimbabwe</option>
												                </select>
												            </div>
                                                    	</td>
                                                        <td>
                                                            <input 
                                                            type="text" 
                                                            class="form-control"
                                                            name="symptoms[]" 
                                                            >
                                                        </td>
                                                        <td>
                                                            <input 
                                                            type="text" 
                                                            class="form-control"
                                                            name="symptoms[]" 
                                                            >
                                                        </td>
                                                        
                                                        <td>
                                                            <button class="btn btn-primary btn-sm"><i class="fa fa-minus"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td>
                                                    		<div>
												                <select data-placeholder="Choose ICD Code..." class="chosen-select"  tabindex="2">
													                <option value="">Select</option>
													                <option value="United States">United States</option>
													                <option value="United Kingdom">United Kingdom</option>
													                <option value="Zimbabwe">Zimbabwe</option>
												                </select>
												            </div>
                                                    	</td>
                                                        <td>
                                                            <input 
                                                            type="text" 
                                                            class="form-control"
                                                            name="symptoms[]" 
                                                            >
                                                        </td>
                                                        <td>
                                                            <input 
                                                            type="text" 
                                                            class="form-control"
                                                            name="symptoms[]" 
                                                            >
                                                        </td>
                                                        
                                                        <td>
                                                            <button class="btn btn-primary btn-sm"><i class="fa fa-minus"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td>
                                                    		<div>
												                <select data-placeholder="Choose ICD Code..." class="chosen-select"  tabindex="2">
													                <option value="">Select</option>
													                <option value="United States">United States</option>
													                <option value="United Kingdom">United Kingdom</option>
													                <option value="Zimbabwe">Zimbabwe</option>
												                </select>
												            </div>
                                                    	</td>
                                                        <td>
                                                            <input 
                                                            type="text" 
                                                            class="form-control"
                                                            name="symptoms[]" 
                                                            >
                                                        </td>
                                                        <td>
                                                            <input 
                                                            type="text" 
                                                            class="form-control"
                                                            name="symptoms[]" 
                                                            >
                                                        </td>
                                                        
                                                        <td>
                                                            <button class="btn btn-primary btn-sm"><i class="fa fa-minus"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td>
                                                    		<div>
												                <select data-placeholder="Choose ICD Code..." class="chosen-select"  tabindex="2">
													                <option value="">Select</option>
													                <option value="United States">United States</option>
													                <option value="United Kingdom">United Kingdom</option>
													                <option value="Zimbabwe">Zimbabwe</option>
												                </select>
												            </div>
                                                    	</td>
                                                        <td>
                                                            <input 
                                                            type="text" 
                                                            class="form-control"
                                                            name="symptoms[]" 
                                                            >
                                                        </td>
                                                        <td>
                                                            <input 
                                                            type="text" 
                                                            class="form-control"
                                                            name="symptoms[]" 
                                                            >
                                                        </td>
                                                        
                                                        <td>
                                                            <button class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab-4">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>ICD-10</th>
                                                        <th>Symptoms</th>
                                                        <th>Comments</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    	<td>
                                                    		<div>
												                <select data-placeholder="Choose ICD Code..." class="chosen-select"  tabindex="2">
													                <option value="">Select</option>
													                <option value="United States">United States</option>
													                <option value="United Kingdom">United Kingdom</option>
													                <option value="Zimbabwe">Zimbabwe</option>
												                </select>
												            </div>
                                                    	</td>
                                                        <td>
                                                            <input 
                                                            type="text" 
                                                            class="form-control"
                                                            name="symptoms[]" 
                                                            >
                                                        </td>
                                                        <td>
                                                            <input 
                                                            type="text" 
                                                            class="form-control"
                                                            name="symptoms[]" 
                                                            >
                                                        </td>
                                                        
                                                        <td>
                                                            <button class="btn btn-primary btn-sm" onClick="clone()"><i class="fa fa-minus"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td>
                                                    		<div>
												                <select data-placeholder="Choose ICD Code..." class="chosen-select"  tabindex="2">
													                <option value="">Select</option>
													                <option value="United States">United States</option>
													                <option value="United Kingdom">United Kingdom</option>
													                <option value="Zimbabwe">Zimbabwe</option>
												                </select>
												            </div>
                                                    	</td>
                                                        <td>
                                                            <input 
                                                            type="text" 
                                                            class="form-control"
                                                            name="symptoms[]" 
                                                            >
                                                        </td>
                                                        <td>
                                                            <input 
                                                            type="text" 
                                                            class="form-control"
                                                            name="symptoms[]" 
                                                            >
                                                        </td>
                                                        
                                                        <td>
                                                            <button class="btn btn-primary btn-sm"><i class="fa fa-minus"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td>
                                                    		<div>
												                <select data-placeholder="Choose ICD Code..." class="chosen-select"  tabindex="2">
													                <option value="">Select</option>
													                <option value="United States">United States</option>
													                <option value="United Kingdom">United Kingdom</option>
													                <option value="Zimbabwe">Zimbabwe</option>
												                </select>
												            </div>
                                                    	</td>
                                                        <td>
                                                            <input 
                                                            type="text" 
                                                            class="form-control"
                                                            name="symptoms[]" 
                                                            >
                                                        </td>
                                                        <td>
                                                            <input 
                                                            type="text" 
                                                            class="form-control"
                                                            name="symptoms[]" 
                                                            >
                                                        </td>
                                                        
                                                        <td>
                                                            <button class="btn btn-primary btn-sm"><i class="fa fa-minus"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td>
                                                    		<div>
												                <select data-placeholder="Choose ICD Code..." class="chosen-select"  tabindex="2">
													                <option value="">Select</option>
													                <option value="United States">United States</option>
													                <option value="United Kingdom">United Kingdom</option>
													                <option value="Zimbabwe">Zimbabwe</option>
												                </select>
												            </div>
                                                    	</td>
                                                        <td>
                                                            <input 
                                                            type="text" 
                                                            class="form-control"
                                                            name="symptoms[]" 
                                                            >
                                                        </td>
                                                        <td>
                                                            <input 
                                                            type="text" 
                                                            class="form-control"
                                                            name="symptoms[]" 
                                                            >
                                                        </td>
                                                        
                                                        <td>
                                                            <button class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="wrapper wrapper-content project-manager">
            <h2>Vitals</h2>
            <i class="fa fa-stethoscope fa-5x" ></i>
            
			<br>
			<div class="m-t-sm"></div>
			<dl class="vitals float-right">
                <dt>BP:</dt>
                <dd><span class="label label-primary vital-status">120</span></dd>
            </dl>
            <br>
            <dl class="vitals float-right">
                <dt>Temprature:</dt>
                <dd><span class="label label-primary vital-status">100</span></dd>
            </dl>
            <br>
            <dl class="vitals float-right">
                <dt>Fever:</dt>
                <dd><span class="label label-primary vital-status">Nill</span></dd>
            </dl>
            <br>
            <dl class="vitals float-right">
                <dt>Height:</dt>
                <dd><span class="label label-primary vital-status">5.8</span></dd>
            </dl>
            <br>
            <dl class="vitals float-right">
                <dt>Weight:</dt>
                <dd><span class="label label-primary vital-status">70</span></dd>
            </dl>
            <br>
            <dl class="vitals float-right">
                <dt>Skin Color:</dt>
                <dd><span class="label label-primary vital-status">Dark</span></dd>
            </dl>
            <br>
            <dl class="vitals float-right">
                <dt>Eye Condition:</dt>
                <dd><span class="label label-primary vital-status">Normal</span></dd>
            </dl>
            <br>
            <dl class="vitals float-right">
                <dt>Pulse:</dt>
                <dd><span class="label label-primary vital-status">65</span></dd>
            </dl>
            <br>
            <dl class="vitals float-right">
                <dt>Oxygen Sat Rate:</dt>
                <dd><span class="label label-primary vital-status">65</span></dd>
            </dl>
                

            <div class="text-center m-t-md">
                <a href="#" class="btn btn-default">Add Vitals</a>
                
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script src="{{ asset('backend_assets/js/plugins/dataTables/datatables.min.js') }} "></script>
<script src="{{ asset('backend_assets/js/plugins/jasny/jasny-bootstrap.min.js') }} "></script>
<script src="{{ asset('backend_assets/js/plugins/chosen/chosen.jquery.js') }} "></script>
<script src="{{ asset('backend_assets/js/plugins/dualListbox/jquery.bootstrap-duallistbox.js') }} "></script>


<script type="text/javascript">

$('.chosen-select').chosen({width: "100%"});

$('.dual_select').bootstrapDualListbox({
    selectorMinimalHeight: 160
});

function clone(){
	var tr = $('#diag').clone();
	$('#diag-table').append(tr);
    $('.chosen-select').chosen({width: "100%"});
    $( '#diag-table tbody tr:last-child td:first-child .chosen-container:last-child' ).hide();
}

function openPatientRegistration(){
    $('#statusModal').modal();
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