
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clinic Patient Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h2 class="mb-4">Clinic Patient Records</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('patients.create') }}" class="btn btn-primary mb-3">
        Add New Patient
    </a>

    <div class="table-responsive bg-white rounded shadow-sm">
        <table class="table table-bordered table-hover mb-0">
            <thead class="table-dark">
                <tr>
                    <th>Patient No.</th>
                    <th>Full Name</th>
                    <th>Birth Date</th>
                    <th>Sex</th>
                    <th>Contact Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($patients as $patient)
                    <tr>
                        <td>{{ $patient->patient_number }}</td>
                        <td>{{ $patient->first_name }} {{ $patient->last_name }}</td>
                        <td>{{ $patient->birth_date }}</td>
                        <td>{{ $patient->sex }}</td>
                        <td>{{ $patient->contact_number ?? 'N/A' }}</td>
                        <td class="text-nowrap">
                            <a href="{{ route('patients.show', $patient) }}"
                               class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('patients.edit', $patient) }}"
                               class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('patients.destroy', $patient) }}"
                                  method="POST" class="d-inline"
                                  onsubmit="return confirm('Delete this patient?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-4">
                            No patient records yet.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
