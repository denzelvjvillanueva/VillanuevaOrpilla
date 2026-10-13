
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patient Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="card shadow-sm mx-auto" style="max-width: 700px;">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Patient Details</h4>
        </div>

        <div class="card-body">
            <p><strong>Patient Number:</strong> {{ $patient->patient_number }}</p>
            <p><strong>First Name:</strong> {{ $patient->first_name }}</p>
            <p><strong>Last Name:</strong> {{ $patient->last_name }}</p>
            <p><strong>Birth Date:</strong> {{ $patient->birth_date }}</p>
            <p><strong>Sex:</strong> {{ $patient->sex }}</p>
            <p><strong>Contact Number:</strong> {{ $patient->contact_number ?? 'N/A' }}</p>
            <p><strong>Address:</strong> {{ $patient->address ?? 'N/A' }}</p>

            <a href="{{ route('patients.index') }}" class="btn btn-secondary">Back to List</a>
            <a href="{{ route('patients.edit', $patient) }}" class="btn btn-warning">Edit Patient</a>
        </div>
    </div>
</div>
</body>
</html>
