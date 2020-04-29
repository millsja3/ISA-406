@section('css')
    <link href="{{asset('css/jquery.dataTables.min.css')}}" rel="stylesheet">
@endsection
@section('javascript')
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#AliasTable').DataTable({
                "order":[[0, "asc"]],
                "processing":true,
                "serverSide": true,
                "columns": [{data: 'student_info', name: 'uniqueid', name:'full_name'}, {data: 'scholarship.name', name: 'scholarship.name'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}],
                "ajax":'{{url("/getStudents")}}'
            });
        });
    </script>
@endsection


<table cellspacing="0" class="table table-miami display compact" id="AliasTable" role="grid"  style ="word-break: break-all" width="100%">
    <thead>
    <tr>
        <th>Student</th>
        <th>Info</th>
        <th></th>
    </tr>
    </thead>
</table>

