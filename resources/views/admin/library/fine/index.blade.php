@extends('admin.layouts.admin')

@section('head')
	{!! Html::style('css/styles.css') !!}

@endsection

@section('content')
	<div class="container-fluid">


		<div class="row">
			<div class="col-md-12">
				<div class="student-box-header">
					<div class="col-md-6">
						<span class="glyphicon glyphicon-user " aria-hidden="true"></span>Fine
					</div>
					<div class="col-md-6 snt">
						<ul class="breadcrumb text-right">
							<li>
								<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
								<a href="#">Dashboard</a></li>
							<li class="active">Fine</li>
						</ul>
					</div>
				</div>
			</div>
		</div> <!--row-->


        <div class="inner-box">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 col-md-offset-3">					<div class="form-inner">	
							<form>
								<div class="form-group">
									<label class="col-sm-2 control-label">
											Day
									</label>
									<div class="col-sm-10">
										<select class="form-control">	
											<option>Select Day</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">
											Month
									</label>
									<div class="col-sm-10">
										<select class="form-control">		
											<option>Select Month</option>
											<option>January</option>
											<option>February</option>
											<option>March</option>
											<option>April</option>
											<option>May</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-2 control-label">
											Year
									</label>
									<div class="col-sm-10">
										<select class="form-control">	
											<option>Select Year</option>
											<option>2001</option>
											<option>2002</option>
											<option>2003</option>
											<option>2004</option>
											<option>2005</option>
											<option>2006</option>
											<option>2007</option>
											<option>2008</option>
											<option>2009</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12 text-right">
										<input class="btn btn-primary" type="submit" value="Fine">
									</div>
								</div>
							</form>	
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>


 @endsection


