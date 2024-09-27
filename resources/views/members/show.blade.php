<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Member Details</h2>
        <a href="{{ route('members.index') }}" class="btn btn-secondary mb-3">
            <i class="fas fa-arrow-left"></i> Back to List
        </a>

        <div class="row">
            <!-- Bagian Gambar Member -->
            <div class="col-md-4">
                @if($member->image)
                    <img src="{{ asset('storage/' . $member->image) }}" alt="Member Image" class="img-fluid">
                @else
                    <p>No Image Available</p>
                @endif
            </div>

            <!-- Bagian Keterangan Member -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Member Info
                    </div>
                    <div class="card-body">
                        <p><strong>Name: </strong>{{ $member->name }}</p>
                        <p><strong>NIP: </strong>{{ $member->nip }}</p>
                        <p><strong>Kelas: </strong>{{ $member->kelas }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
