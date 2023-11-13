<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h3>Employee Management System</h3>
            </div>
            <div class="col-md-4">
            <a href="{{ route('employee.create') }}" class="btn btn-success">Add New Employee</a>
            </div>
        </div>
        <table class="table table-bordered mt-5">
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Employee Designation</th>
            <th>Experience</th>
            <th>Status</th>
        </table>
    </div>
</body>
</html>