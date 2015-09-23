<div class="row last">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header">
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Roll No</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    {{ $slno = 1 }}
                    @foreach($studentsWithPhotos as $photo => $student) {{--@for ($i = 0; $i < 15; $i++)--}}
                    <tr>
                        <td>{{ $slno++ }}</td>
                        {{-- <td>{!!  Html::image('imagecache/table/'.$photo) !!}</td> --}}
                        <td><span class="glyphicon glyphicon-user fa-man" aria-hidden="true"></span></td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->class }}</td>
                        <td>{{ $student->section }}</td>
                        <td>{{ $student->roll }}</td>
                        <td>
                            <a class="btn btn-primary btn-xs mrg" href="{{ url('att/view',[$student->id,1]) }}">
                                <i class="fa fa-check-square-o"></i></a>
                            
                        </td>

                    </tr>
                    @endforeach




                    <tr>
                        <td>Other browsers</td>
                        <td>All others</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>

                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>

                    </tr>
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div> <!--row last-->