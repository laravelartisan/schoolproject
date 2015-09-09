@extends('admin.layouts.admin')

@section('head')
	{!! Html::style('css/styles.css') !!}

@endsection

@section('content')
	<div class="container-fluid">

		<div class="row first">
			<div class="col-md-12">
				<div class="student-box-header">
					<div class="col-md-6">
						<span class="glyphicon glyphicon-book" aria-hidden="true"></span>Report
					</div>
					<div class="col-md-6 snt">
						<ul class="breadcrumb text-right">
							<li>
								<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
								<a href="#">Dashboard</a></li>
							<li class="active">Student</li>
						</ul>
					</div>
				</div>
			</div>
		</div> <!--row first-->
        <div class="inner-box">
			<div class="row margin-top-area">
				<div class="col-md-12 snt media">
					<div class="row">
						<div class="col-sm-12">
							<div class="row">
								<form>
									<div class="form-group">
										<label class="col-sm-2 control-label">
											Teacher Report
										</label>
										<div class="col-sm-2">
											<select class="form-control">
												<option value="0">Select Teacher</option>
												<option value="1">Shipu Ahamed</option>
												<option value="2">Rid Islam</option>
												<option value="3">Dipok Halder</option>
												<option value="4">Shemanto Islam</option>
												<option value="5">Imran Sarkar</option>
											</select>
										</div>
										<div class="col-sm-8">
											<input type="submit" value="Generate" class="btn btn-primary">
										</div>
									</div>
								</form>
							</div>

							<div class="row">
								<form>
									<div class="form-group">
										<label class="col-sm-2 control-label">
											Student Report
										</label>
										<div class="col-sm-2">
											<select class="form-control">
												<option>Select Class</option>
												<option>Student Report </option>
												<option>Student Report </option>
											</select>
										</div>

										<div class="col-sm-2">
											<select class="form-control">
												<option>Select Section</option>
												<option>Select Section</option>
												<option>Select Section</option>
											</select>
										</div>

										<div class="col-sm-6">
											<input type="submit" value="Generate" class="btn btn-primary">
										</div>
									</div>
								</form>
							</div>
							<div class="row">
								<form>
									<div class="form-group">
										<label class="col-sm-2 control-label">
											Class Routine Report
										</label>
										<div class="col-sm-2">
											<select class="form-control">
												<option>Select Class</option>
											</select>
										</div>

										<div class="col-sm-2">
											<select class="form-control">
												<option value="0">Select Section</option>
											</select>
										</div>
										<div class="col-sm-6">
											<input type="submit" value="Generate" class="btn btn-primary">
										</div>
									</div>
								</form>
							</div>
							<div class="row">
								<form>
									<div class="form-group">
										<label class="col-sm-2 control-label">
											Balance Report
										</label>
										<div class="col-sm-2">
											<select class="form-control">
												<option>Select Class</option>
											</select>
										</div>

										<div class="col-sm-2">
											<select class="form-control">
												<option value="0">Select Section</option>
											</select>
										</div>

										<div class="col-sm-6">
											<input type="submit" value="Generate" class="btn btn-primary">
										</div>
									</div>
								</form>
							</div>
							<div class="row">
								<form>
									<div class="form-group">
										<label class="col-sm-2 control-label">
											Student Mark Report                        </label>
										<div class="col-sm-2">
											<select class="form-control">
												<option value="">Select Exam</option>
											</select>
										</div>
										<div class="col-sm-2">
											<select class="form-control">
												<option>Select Class</option>
											</select>
										</div>
										<div class="col-sm-2">
											<select class="form-control">
												<option value="0">Select Subject</option>
											</select>
										</div>
										<div class="col-sm-1">
											<input type="submit" value="Generate" class="btn btn-primary">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div> <!--col-md-12 snt mail-->
			</div> <!--row second-->
		</div>
	</div>

	@endsection


