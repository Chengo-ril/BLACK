<?php
include('session.php');
include('dbb.php');
$id = 1;
$sql = "SELECT * FROM form_register WHERE id='$id'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$rows = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ectasy | Report by Date</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="../login/images/logo.png" type="image/x-icon">

</head>

<body>

    <?php include 'menu.php'; ?>



    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Report by Category</h5>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                    <tr>
                                        <th>UIN</th>
                                        <th>Date Uploaded</th>
                                        <th>Headline</th>
                                        <th>Category</th>
                                        <th>Cover Photo</th>
                                        <th>Photocredit</th>
                                        <th>Embeded code</th>
                                        <th>Content</th>
                                        <th>Blockquote</th>
                                        <th>Link</th>
                                        <th>Post View</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    include('dbb.php');
                                    if ($_POST) {
                                        $datefrom = $_REQUEST["datefrom"];
                                        $dateto = $_REQUEST["dateto"];
                                        $category = $_REQUEST["category"];


                                        $sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM `blogtable` WHERE `category`='$category' AND `date` BETWEEN '$datefrom' AND '$dateto'";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_array($result)) {


                                    ?>


<tr class="gradeA">
                                            <td><?php echo $row['uin']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td><?php echo $row['headline']; ?></td>
                                            <td><?php echo $row['category']; ?></td>
                                            <td><img height="50px" class="img-square" src="coverphoto/<?php echo $row['cover'];?>" alt="passport"></td>
                                            <td><?php echo $row['photocredit']; ?></td>
                                            <td><?php echo $row['embed']; ?></td>
                                            <td><?php echo $row['content']; ?></td>      
                                            <td><?php echo $row['blockquote']; ?></td>      
                                            <td><?php echo $row['a']; ?></td>
                                            <td><?php echo $row['post_view']; ?></td>
>

                                                <td>
                                                    <div class="btn-group">
                                                        <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                                                        <ul class="dropdown-menu">

                                                        <li><a <?php echo "href='editnews.php?id=".$row['id']."'";?> 
                                            onclick="return confirm('Are you sure to edit the news');">Edit</a></li>
                                            <li><a <?php echo "href='delete.php?id=".$row['id']."'";?> 
                                            onclick="return confirm('Are you sure to delete');">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>

                                    <?php
                                            }
                                        }
                                    }
                                    ?>
                                </tbody>

                                <div id="modal-form" class="modal fade" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-12 b-r">


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </table>


                        </div>

                    </div>
                </div>
            </div>
        </div>



    </div>
    <?php include 'footer.php'; ?>

    </div>
    </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

    <script src="js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [{
                        extend: 'copy'
                    },
                    {
                        extend: 'csv'
                    },
                    {
                        extend: 'excel',
                        title: 'InventorybyDate'
                    },
                    {
                        extend: 'pdf',
                        title: 'InventorybyDate'
                    },

                    {
                        extend: 'print',
                        customize: function(win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable('../example_ajax.php', {
                "callback": function(sValue, y) {
                    var aPos = oTable.fnGetPosition(this);
                    oTable.fnUpdate(sValue, aPos[0], aPos[1]);
                },
                "submitdata": function(value, settings) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition(this)[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            });


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData([
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row"
            ]);

        }
    </script>

</body>

</html>