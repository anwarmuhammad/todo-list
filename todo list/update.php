<!DOCTYPE html>


<?php
include 'db.php';
$id=$_GET['anwar'];
$sql=" select *from task where id='$id'";
$rows=$db->query($sql);
$row=$rows->fetch_assoc();
$sql="update from task set name='task'";




    


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
                    <form action="update.php" method="post">
                        <div class="form-group">
                            <label for="">Task Name</label>
                            <input type="text" required name="task" value="<?php echo $row['name']; ?>" class="form-control">
                        </div>
                        <input type="submit" name="send" value="Update" class="btn btn-success">
                    </form>

                </div>

            </div>
        </div>
    </body>

    </html>