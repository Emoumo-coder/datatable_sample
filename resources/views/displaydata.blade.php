<html lang="en">

<head>
    <title>Laravel DataTables Tutorial Example</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <h2>Laravel DataTables Tutorial Example</h2>
        <table class="table table-bordered" id="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Umar</td>
                    <td>Umar@gmail.com</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script>
        $(function() {
            $('#table').DataTable({
                // processing: true,
                // serverSide: true,
                // ajax: '{{ url('
                // index ') }}',
                // columns: [{
                //         data: 'id',
                //         name: 'id'
                //     },
                //     {
                //         data: 'name',
                //         name: 'name'
                //     },
                //     {
                //         data: 'email',
                //         name: 'email'
                //     }
                // ]
            });
        });
    </script>

</body>

</html>