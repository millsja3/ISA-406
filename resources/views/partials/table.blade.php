@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

@endsection
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#AliasTable').DataTable();
        });
    </script>
@endsection
<table cellspacing="0" class="table table-miami display compact" id="AliasTable" role="grid"
       style="word-break: break-all" width="100%">
    <thead>
    <tr>
        <th>Student Name</th>
        <th>Student Unique ID</th>
        <th>Major(s)</th>
        <th>Minor(s)</th>
        <th>Academic Year</th>
        <th>GPA</th>
        <th>Career Type</th>
        <th>Received Scholarship</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($studentCollection as $student)
        <tr>
            <td><a href="{{ url('/getStudentDetailed') }}"> {{$student->full_name}} </a></td>
            <td>{{$student->uniqueid}}</td>
            <td>{{$student->majors}}</td>
            <td>{{$student->minors}}</td>
            <td>{{$student->academicyear}}</td>
            <td>{{$student->gpa}}</td>
            <td>{{$student->career_type}}</td>
            <td>{{$student->recieved_scholarship}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

