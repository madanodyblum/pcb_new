@extends('layouts.app')
@section('custom-style')
	<link rel="stylesheet" href="{{asset('assets/vendor/dropzone/css/basic.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/vendor/dropzone/css/dropzone.css')}}" />
@endsection
@section('content')
 
    <section role="main" class="content-body">
         <div class="row">
			<div class="col-xs-12">
				<section class="panel">
					<header class="panel-heading">
						<div class="panel-actions">
							<a href="#" class="fa fa-caret-down"></a>
							<a href="#" class="fa fa-times"></a>
						</div>
		
						<h2 class="panel-title">Drop files here to upload</h2>
					</header>

					<div class="panel-body">
                        <div class="wizard-progress wizard-progress-lg">
                            <h2 class="panel-title">Upload Gerber files</h2>

                            <div class="steps-progress">
                                <div class="progress-indicator" style="width: 0%;"></div>
                            </div>
                            <ul class="wizard-steps">
                                 
                            </ul>
                        </div>
        
                        <div class="tab-content">
                            <div id="w4-account" class="tab-pane active">
                               
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-username">Job Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="username" id="w4-username" required>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
					<div class="panel-body">
						<form action="/upload" class="dropzone dz-square dz-clickable" id="dropzone-example">
							<div class="dz-default dz-message"></div>
						</form>
					</div>
				</section>
			</div>
		</div>
		<div class="row">
			
		</div>
    </section>

@endsection
@section('custom-script')
	<script src="{{asset('assets/vendor/dropzone/dropzone.js')}}"></script>
	<script src="{{asset('assets/javascripts/forms/examples.advanced.form.js')}}"></script>
@endsection