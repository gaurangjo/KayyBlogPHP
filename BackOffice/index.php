<?php include('config.php'); ?>
<html>
<head>
        <?php include('links.php'); ?>
        
        <title> Blank Page </title>
    </head>
<body>
    <?php include('header.php'); ?>
    <div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="Dashboard.php"> Dashboard </a>
            </li>
            <li class="breadcrumb-item active">User List</li>
        </ol>
        <!-- Page Content -->
        <h1>User Details</h1>
        <hr>
        <a href="AddNewUser.php" class="btn btn-primary"> Add New </a>
        <br /><br />
        <?php
        $sql = "SELECT * FROM tblUser";
        if ($result = mysqli_query($link, $sql)) {

        ?>
            <table class="table table-active table-bordered">
                <thead>
                    <tr>
                        <th> # </th>
                        <th> Name </th>
                        <th> Email</th>
                        <th> Contact No </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {

                    ?>
                        <tr>
                            <td> <?php echo ($row['UserID']); ?> </td>
                            <td> <?php echo ($row['FullName']); ?> </td>
                            <td> <?php echo ($row['Email']); ?> </td>
                            <td> <?php echo ($row['ContactNo']); ?> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php
        }
        ?>
    </div>
    </div>
    </div>
    <?php include('footer.php');?>
</body>
<?php include('scripts.php');?>
</html>