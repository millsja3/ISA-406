@section('css')
    <link href="{{asset('css/jquery.dataTables.min.css')}}" rel="stylesheet">
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
    @php($viewType = $_POST('viewtype'))
    @php($scholarship= $_POST(['scholarship']))
        @if ($viewType == 'scholarship')
            @foreach ($studentCollection as $student)
                @if($scholarship === $student->getscholarship()->name)
                    <tr>
                        <td><a href="{{ url('/getStudentDetailed') }}"> {{$student->fullname}} </a> </td>
                        <td>{{$student->uniqueID}}</td>
                        <td>{{$student->majors}}</td>
                        <td>{{$student->minors}}</td>
                        <td>{{$student->academicyear}}</td>
                        <td>{{$student->gpa}}</td>
                        <td>{{$student->career_type}}</td>
                        <td>{{$student->getscholarship()->name}}</td>
                        <td>{{$student->received_scholarship}}</td>
                    </tr>
                @endif
            @endforeach
        @endif

        @if ($viewType == 'pastRecipients')
            @foreach ($studentCollection as $student)
                @if ($student->received_scholarship == 'Yes')
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
    @endif
    @endforeach
    @endif
    </tbody>
</table>

