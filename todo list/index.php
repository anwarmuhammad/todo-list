<!DOCTYPE html>


<?php
include 'db.php';
$sql=" select *from task";
$rows=$db->query($sql);



    


?>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>To Do </title>
        <script type="text/javascript" src="Resources/jquery.js"></script>
        <script type="text/javascript" src="Resources/bootstrap.min.js"></script>
        <link rel="stylesheet" href="Resources/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <center>
                    <h1>To Do List</h1></center>

                <div class="col-md-10 col-md-offset-1">
                    <table class="table table-striped">

                        <button type="button" data-target='#myModal' data-toggle='modal' class="btn btn-success">Add Task</button>
                        <button type="button" class="btn btn-default pull-right">Print</button>
                        <hr>
                        <br>
                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Add Task</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="add.php" method="post">
                                            <div class="form-group">
                                                <label class="col-md-2" for="">Task Name</label>
                                                <input class="col-md-10" type="text" required name="task" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Task Name</label>
                                                <input type="text" required name="task" class="form-control">
                                            </div>
                                            <input type="submit" name="send" value="Add" class="btn btn-success">
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>



                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Task Name</th>
                                <th class="pull-right">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php while($row=$rows->fetch_assoc()):?>




                                    <td>
                                        <?php echo $row["id"]?>
                                    </td>
                                    <td>
                                        <?php echo $row['name']?>
                                    </td>
                                    <td class="pull-right">

                                        <a href="update.php?anwar=<?php echo $row['id'];?>" class="btn btn-success"> Edit</a>



                                        <a href="delete.php?anwar=<?php echo $row['id'];?>" class="btn btn-danger"> Delete </a>

                                    </td>


                            </tr>
                            <?php endwhile;?>

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </body>

    </html>