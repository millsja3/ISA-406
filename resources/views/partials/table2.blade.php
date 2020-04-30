<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How to Delete or Remove Data From Mysql in Laravel 6 using Ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <br/>
    <h3 align="center">ISA Scholarship</h3>
    <br/>
    <div align="right">
        <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Create Record
        </button>
    </div>
    <br/>
    <div class="table-responsive">
        <table id="student_table" class="table table-bordered table-striped">
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
        </table>
    </div>
    <br/>
    <br/>
</div>
</body>
</html>

<script>
    $(document).ready(function () {

        $('#student_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('facultyView') }}",
            },
            columns: [
                {
                    data: 'uniqueID',
                    name: 'uniqueID'
                },
                {
                    data: 'majors',
                    name: 'majors'
                },
                {
                    data: 'minors',
                    name: 'minors',
                },
                {
                    data: 'academicyear',
                    name: 'academicyear',
                },
                {
                    data: 'gpa',
                    name: 'gpa',
                },
                {
                    data: 'career_type',
                    name: 'career_type',
                },
                {
                    data: 'scholarship_id',
                    name: 'scholarship_id',
                },
                {
                    data: 'received_scholarship',
                    name: 'received_scholarship',
                }
            ]
        });
    });
</script>


