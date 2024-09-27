<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('members.index') }}">Member Management</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h2>Member List</h2>
        <!-- Tombol Add Member dengan Ikon -->
        <a href="{{ route('members.create') }}" class="btn btn-primary mb-3">
            <i class="fas fa-plus"></i> Add Member
        </a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>NIP</th>
                    <th>Kelas</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $member)
                    <tr>
                        <td>
                            @if($member->image)
                            <img src="{{ asset('storage/' . $member->image) }}" alt="Member Image" width="150" style="display: block; margin: 0 auto;">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->nip }}</td>
                        <td>{{ $member->kelas }}</td>
                        <td>
                            <!-- Tombol Show dengan Ikon -->
                            <a href="{{ route('members.show', $member->id) }}" class="btn btn-sm btn-info">
                                <i class="fas fa-eye"></i> <!-- Ikon Show -->
                            </a>
                            <!-- Tombol Edit dengan Ikon -->
                            <a href="{{ route('members.edit', $member->id) }}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i> <!-- Ikon Edit -->
                            </a>
                            <!-- Tombol Delete dengan Ikon -->
                            <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash-alt"></i> <!-- Ikon Delete -->
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
