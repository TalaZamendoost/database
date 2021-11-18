<?php  include 'header.php'?>

<h1 class="text-center">اطلاعات کاربر</h1>
<div class="container">
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
        <tr>
            <th  scope="col">firstname</th>
            <th  scope="col">lastname</th>
            <th  scope="col">birthdate</th>
            <th  scope="col">phone</th>
            <th  scope="col">address</th>
            <th  scope="col">gender</th>
        </tr>
        </thead>
        <tbody>
        <tr>

            <?php
            if (isset($_GET['user_id'])) {
                $userid = $_GET['user_id'];

                $query="SELECT * FROM users WHERE id = {$userid} ";
                $view_users= mysqli_query($conn,$query);

                while($row = mysqli_fetch_assoc($view_users))
                {
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                    $birthdate = $row['birthdate'];
                    $phone = $row['phone'];
                    $address = $row['address'];
                    $gender = $row['gender'];

                    echo "<tr >";
                    echo " <td > {$firstname}</td>";
                    echo " <td > {$lastname}</td>";
                    echo " <td >{$birthdate} </td>";
                    echo " <td > {$phone}</td>";
                    echo " <td > {$address}</td>";
                    echo " <td >{$gender} </td>";
                    echo " </tr> ";
                }
            }
            ?>
        </tr>
        </tbody>
    </table>
</div>

<div class="container text-center mt-5">
    <a href="Includes/home.php" class="btn btn-warning mt-5"> بازگشت </a>
    <div>

<?php include "footer.php" ?>