<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari İşlemleri</title>
    <!-- Add your stylesheets, scripts, etc. here -->
   
    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



    
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.7.0/css/select.dataTables.min.css" rel="stylesheet" />

</head>

<body>
    <div id="app">
        @yield('content')
    </div>
    <!-- Add your scripts or footer content here -->
    <!-- Bootstrap JS ve Popper.js -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




    
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/select/1.7.0/js/dataTables.select.min.js" crossorigin="anonymous"></script>



<script>
        // Company personnel data user List Table
$(document).ready(function() {

var table = $('#tablo').DataTable( {
    dom: 'Bfrtip',
    buttons: [
        // {
        //     extend: 'copy',
        //     text: 'Kopyala',
        // },
        'copy',
        'csv',
        'excel',
        'pdf',
        {
            extend: 'print',
            text: 'Print all (not just selected)',
            exportOptions: {
                modifier: {
                    selected: null
                }
            }
        },
    ],
    select: true,
    // info: false,
    // ordering: false,
    // paging: false
} );

} );

    </script>


</body>
</html>
