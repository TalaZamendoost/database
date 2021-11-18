<?php  include "header.php" ?>

<?php
if(isset($_POST['create']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthdate = $_POST['birthdate'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    $query= "INSERT INTO users(id , firstname, lastname, birthdate, phone, address, gender) VALUES(NULL,'{$firstname}','{$lastname}','{$birthdate}','{$phone}','{$address}','{$gender}')";
    $add_user = mysqli_query($conn,$query);

    if (!$add_user) {
        echo "something went wrong ". mysqli_error($conn);
    }

    else { echo "<script type='text/javascript'>alert('User added successfully!')</script>";
    }
}
?>

<h1 class="text-center">افزودن کاربر </h1>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label for="firstname" class="form-label">firstname</label>
            <input type="text" name="firstname"  class="form-control">
        </div>

        <div class="form-group">
            <label for="lastname" class="form-label">lastname</label>
            <input type="text" name="lastname"  class="form-control">
        </div>

        <div class="form-group">
            <label for="birthdate" class="form-label">birthdate</label>
            <input type="date" name="birthdate"  class="form-control">
        </div>

        <div class="form-group">
            <label for="phone" class="form-label">phone</label>
            <input type="text" name="phone"  class="form-control">
        </div>

        <div class="form-group">
            <label for="address" class="form-label">address</label>
            <input type="text" name="address"  class="form-control">
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
            <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
        </div>

    </form>
</div>


<div class="container text-center mt-5">
    <a href="Includes/home.php" class="btn btn-warning mt-5"> بازگشت </a>
    <div>

<?php include "footer.php" ?>