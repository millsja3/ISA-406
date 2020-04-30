@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

@endsection
@section('javascript')
    <link href="https://code.jquery.com/jquery-3.3.1.js">
    <link href="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
    <link href="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
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
        <th>Scholarship Name</th>
        <th>Received Scholarship</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($studentCollection as $student)
        <tr>
            <td><a href="{{ url('/getStudentDetailed') }}"> {{$student->fullname}} </a></td>
            <td>{{$student->uniqueID}}</td>
            <td>{{$student->majors}}</td>
            <td>{{$student->minors}}</td>
            <td>{{$student->academicyear}}</td>
            <td>{{$student->gpa}}</td>
            <td>{{$student->career_type}}</td>
            <td>{{$student->getscholarship()->name}}</td>
            <td>{{$student->received_scholarship}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

