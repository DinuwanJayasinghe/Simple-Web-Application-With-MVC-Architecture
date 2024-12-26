<!DOCTYPE html>
<html>

<head>
    <title>Department wise Subjects</title>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js" charset="utf8" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

</head>

<body>
    <h1 align="center">Department wise Subjects</h1>
    <form action="" method="get">
        <section name="department">
            <?php
            $url = 'http://localhost/PHP_API/api/getDpt.php';
            $sjson = file_get_contents($url);
            $result = json_decode($sjson);
            echo '<select name="department">';
            foreach ($result->data as $row) {
                echo '<option value="' . $row->department . '" name = "department">' . $row->department . '</option>';
            }
            ?>
        </section>
        <input type="submit" value="Submit">
    </form>
    </br>
    </br>
    <table id="example" style="width:50%">
        <thead>
            <tr>
                <th>Subject Code</th>
                <th>Subject</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_GET['department'])) {
                $department = $_GET['department'];
                // Encode the department value before appending it to the URL
                $encodedDepartment = urlencode($department);
                $url = 'http://localhost/PHP_API/api/read_d.php?department=' . $encodedDepartment;
                $sjson = file_get_contents($url);

                $result = json_decode($sjson);

                //  echo "<table >";
                //  echo "<tr><th>Subject Code</th><th>Subject</th></tr>";
                foreach ($result->data as $row) {
                    echo "<tr><td>$row->subject_code</td><td>$row->subject</td></tr>";
                }
                //  echo "</table>";
            } else {

                // Encode the department value before appending it to the URL

                $url = 'http://localhost/PHP_API/api/read.php';
                $sjson = file_get_contents($url);

                $result = json_decode($sjson);

                //  echo "<table >";
                //  echo "<tr><th>Subject Code</th><th>Subject</th></tr>";
                foreach ($result->data as $row) {
                    echo "<tr><td>$row->subject_code</td><td>$row->subject</td></tr>";
                }
                //  echo "</table>";
            }

            ?>
        </tbody>
    </table>

</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>