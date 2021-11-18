<?php include "header.php"?>

<?php

if(isset($_GET['user_id']))
{
    $userid = $_GET['user_id'];
}
$query="SELECT * FROM users WHERE id = $userid ";
$view_users= mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($view_users))
{
    $id = $row['id'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $birthdate = $row['birthdate'];
    $phone = $row['phone'];
    $address = $row['address'];
    $gender = $row['gender'];

}

if(isset($_POST['update']))
{
    $firstname= $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthdate = $_POST['birthdate'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    $query = "UPDATE users SET firstname= '{$firstname}' , lastname = '{$lastname}',birthdate = '{$birthdate}' , phone= '{$phone}' , address = '{$address}',gender = '{$gender}'  WHERE id = $userid";
    $update_user = mysqli_query($conn, $query);
    echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
}
?>

<h1 class="text-center">ویرایش اطلاعات کاربر</h1>
<div class="container ">
    <form action="" method="post">
        <div class="form-group">
            <label for="firstname" >firs tname</label>
            <input type="text" name="firstname" class="form-control" value="<?php echo $firstname ?>">
        </div>

        <div class="form-group">
            <label for="lastname" > last name</label>
            <input type="text" name="lastname" class="form-control" value="<?php echo $lastname  ?>">
        </div>

        <div class="form-group">
            <label for="birthdate" >birthdate</label>
            <input type="date" name="birthdate"  class="form-control" value="<?php echo $birthdate  ?>">
        </div>

        <div class="form-group">
            <label for="phone" > phone</label>
            <input type="text" name="phone" class="form-control" value="<?php echo $phone  ?>">
        </div>

        <div class="form-group">
            <label for="address" >address</label>
            <input type="text" name="address"  class="form-control" value="<?php echo $address  ?>">
        </div>

        <div class="form-group">
            <label for="gender" class="form-label">gender</label>
            <br>
			<select name="gender">
				<option value="male">male</option>
				<option value="female">female</option>
			</select>
        </div>

        <div class="form-group">
            <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
        </div>
    </form>
</div>

<div class="container text-center mt-5">
    <a href="Includes/home.php" class="btn btn-warning mt-5"> بازگشت </a>
    <div>

<?php include "footer.php" ?>