
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Tables</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
</head>
<body>
<div class="container">
    <h2>Simple Pagination Example using Datatables Js Library</h2>
    <table class="table table-fluid" id="myTable">
    <thead>
    <tr><th>Name</th><th>Email</th><th>Password</th></tr>
    </thead>
    <tbody>
    <tr><td>Daniel Danny</td><td>danny.daniel@gmail.com</td><td>Pass1234</td></tr>
    <tr><td>Samuel</td><td>samuel@gmail.com</td><td>Pass1234</td></tr>
    <tr><td>Jack</td><td>jack@gmail.com</td><td>Pass1234</td></tr>
    <tr><td>Eureka</td><td>eureka@gmail.com</td><td>Pass1234</td></tr>
    <tr><td>Pinky</td><td>pinky@gmail.com</td><td>Pass1234</td></tr>
    <tr><td>Mishti</td><td>mishti@gmail.com</td><td>Pass1234</td></tr>
    <tr><td>Puneet</td><td>puneet@gmail.com</td><td>Pass1234</td></tr>
    <tr><td>Nick</td><td>nick@gmail.com</td><td>Pass1234</td></tr>
    <tr><td>Danika</td><td>danika@gmail.com</td><td>Pass1234</td></tr>
    <tr><td>Vishakha</td><td>vishakha@gmail.com</td><td>Pass1234</td></tr>
    <tr><td>Nitin</td><td>ni3@gmail.com</td><td>Pass1234</td></tr>
    <tr><td>Latika</td><td>latika@gmail.com</td><td>Pass1234</td></tr>
    <tr><td>Kaavya</td><td>kaavya@gmail.com</td><td>Pass1234</td></tr>
    <tr><td>Ishika</td><td>ishika@gmail.com</td><td>Pass1234</td></tr>
    <tr><td>Veronika</td><td>veronika@gmail.com</td><td>Pass1234</td></tr>
    </tbody>
    </table>
</div>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
</body>
</html>