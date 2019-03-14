<?php
include"core/session.php";
include('core/select.php');
include('inc/header.php');


?>


    <body>

        <!-- Begin page -->
        <div id="wrapper">
<?php
include('inc/nav.php');

?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                 <div class="topbar">

                    <nav class="navbar-custom">

                      <?php include"inc/nav2.php"; ?>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Properties </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#">Properties</a></li>
                                        
                                    </ol>
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->
 


                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <!-- <h4 class="m-t-0 header-title">Properties</h4> -->
                                <div class="col-sm-4">
                                    <a href="add_property.php">
                                <button type="button" class="btn btn-custom btn-rounded w-md waves-effect waves-light mb-4"><i class="mdi mdi-plus-circle"></i>Add New</button></a>
                            </div>

                                    <table id="datatable-buttons" class="table table-hover m-0 tickets-list table-actions-bar dt-responsive nowrap responsive"  cellspacing="0" width="100%" >


                                       <thead>
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th></th>
                                            <th>Property Title</th>
                                            <th>Price(N)</th>
                                            <th>Status</th>
                                          
                                            <th>Upload Date</th>
                                          <!--   <th>Due Date</th> -->
                                            <th class="hidden-sm">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                          <?php
                                       while ($rw5 = mysqli_fetch_array($query5)) {
                                       
                                         
                                             ?>
                                        <tr>
                                            <td><b>#<?php echo $rw5["property_no"]; ?></b></td>
                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="../<?php echo $rw5["pic"]; ?>"  />
                                                   
                                                </a>
                                            </td>

                                            <td>
                                                <?php echo $rw5["title"]; ?>
                                            </td>

                                            <td>
                                              <?php echo $rw5["price"]; ?>
                                            </td>

                                            <td>
                                                <?php

                                                if ($rw5['status'] == 1){
                                                echo '
                                                 <a href="inc/status.php?id='.$rw5['id'].'">
                                                <span class="badge badge-success">Active</span>
                                                </a>';
                                            }
                                            ?>


                                             <?php

                                                if ($rw5['status'] == 0){
                                                echo '
                                                 <a href="inc/status.php?id='.$rw5['id'].'">
                                                <span class="badge badge-danger">Not Active</span>
                                                </a>';
                                            }
                                            ?>

                                            </td>

                                            

                                            <td>
                                                <?php echo $rw5["upload_date"]; ?>
                                            </td>

                                           <!--  <td>
                                                2018/05/28
                                            </td> -->

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="property.php?pro=<?php echo $rw5["property_no"]; ?>"><i class="fa fa-search mr-2 text-muted font-18 vertical-middle"></i>view</a>

                                                         <a class="dropdown-item"  href="edit_property.php?pro=<?php echo $rw5["property_no"]; ?>"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit</a>
                                                         <a class="dropdown-item" href="core/approve.php?id=<?php echo $rw5["id"]; ?>"><i class="mdi mdi-check mr-2 text-muted font-18 vertical-middle"></i>Approve</a>
                                                        <a class="dropdown-item" href="inc/delete.php?id=<?php echo $rw5["id"];?> " onclick="return confirm('Are you sure you want to DELETE PROPERTY ?')"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                        <!-- <a class="dropdown-item" href="inc/rent_status.php?id=<?php echo $rw5["property_no"]; ?>"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Rentout</a> -->
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                      

                                        <?php
                                               
                                            }

                                            ?>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                       



        


                       

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2018 © Highdmin. - Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- Required datatable js -->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="plugins/datatables/jszip.min.js"></script>
        <script src="plugins/datatables/pdfmake.min.js"></script>
        <script src="plugins/datatables/vfs_fonts.js"></script>
        <script src="plugins/datatables/buttons.html5.min.js"></script>
        <script src="plugins/datatables/buttons.print.min.js"></script>

        <!-- Key Tables -->
        <script src="plugins/datatables/dataTables.keyTable.min.js"></script>

        <!-- Responsive examples -->
        <script src="plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Selection table -->
        <script src="plugins/datatables/dataTables.select.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>

    </body>

<!-- Mirrored from coderthemes.com/highdmin/default/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Apr 2018 10:34:30 GMT -->
</html>