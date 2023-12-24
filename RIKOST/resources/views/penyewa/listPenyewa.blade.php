@extends('layouts.main')

@section('title', 'RIKOST | Cabang')
<!-- di titik-titik masukin title -->

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyewa</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Optional: Add your custom styles here */
    </style>
</head>
<body>

<div class="container mt-4">
    <h2>Penyewa RIKOST</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID Penyewa</th>
                <th>Nama Penyewa</th>
                <th>ID Kamar</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>123</td>
                <td>John Doe</td>
                <td>A101</td>
                <td>
                    <!-- Button Detail -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailModal">
                        Detail
                    </button>
                    <!-- Button Create -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createModal">
                        Create
                    </button>
                    <!-- Button Delete -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                        Delete
                    </button>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

<!-- Detail Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Penyewa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add detailed information here -->
                <p>ID Penyewa: 123</p>
                <p>Nama Penyewa: John Doe</p>
                <p>ID Kamar: A101</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Create Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Penyewa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add form for creating new entry here -->
                <form>
                    <div class="form-group">
                        <label for="newId">ID Penyewa:</label>
                        <input type="text" class="form-control" id="newId" placeholder="Enter ID Penyewa">
                    </div>
                    <div class="form-group">
                        <label for="newName">Nama Penyewa:</label>
                        <input type="text" class="form-control" id="newName" placeholder="Enter Nama Penyewa">
                    </div>
                    <div class="form-group">
                        <label for="newRoom">ID Kamar:</label>
                        <input type="text" class="form-control" id="newRoom" placeholder="Enter ID Kamar">
                    </div>
                    <button type="button" class="btn btn-primary">Create</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Penyewa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this entry?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger">Delete</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Link to Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
@endsection