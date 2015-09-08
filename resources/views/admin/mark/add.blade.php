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
						<span class="glyphicon glyphicon-user " aria-hidden="true"></span>Parents
					</div>
					<div class="col-md-6 snt">
						<ul class="breadcrumb text-right">
							<li>
								<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
								<a href="#">Dashboard</a></li>
							<li class="active">Parents</li>
						</ul>
					</div>
				</div>
			</div>
		</div> <!--row-->



		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6 col-md-offset-3">
					<div class="class-holder">
						<form>
							<label for="">Exam</label>
							<select id='classname' class="form-control">
								<option>Select Class</option>
								<option>One</option>
								<option>Two</option>
								<option>Three</option>
								<option>Four</option>
								<option>Five</option>
							</select>
								<br>
							<label for="">Class</label>
							<select id='classname' class="form-control">
								<option>Select Class</option>
								<option>One</option>
								<option>Two</option>
								<option>Three</option>
								<option>Four</option>
								<option>Five</option>
							</select>
							<br>
							<label for="">Subject</label>
							<select id='classname' class="form-control">
								<option>Select Class</option>
								<option>One</option>
								<option>Two</option>
								<option>Three</option>
								<option>Four</option>
								<option>Five</option>
							</select>
							<input type="submit" value="Submit">

						</form>
					</div>
				</div>
			</div>

		</div>




		</div>

	</div>


 @endsection


