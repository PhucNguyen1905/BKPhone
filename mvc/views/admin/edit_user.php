<?php
$title = 'Edit';
$activeNav = 'customer';
require_once('mvc/views/blocks/add_header.php');

$user = $data['user'];
?>

<!-- MAIN SECTION -->
<main>
    <h3 class="fs-4 mb-3">Edit user</h3>
    <a href="http://localhost/BKPhone/AdminCustomer" class="btn btn-outline-primary">Back to User list</a>
    <form class="addForm" action="<?php echo 'http://localhost/BKPhone/AdminCustomer/PostEdit/' . $user['id']; ?>" method="POST">

        <div class="row mt-2">
            <div class="col">
                <label for="">Full Name</label>
                <input type="text" class="form-control" name="fullname" value="<?php echo $user['fullname']; ?>" placeholder="Full name">
            </div>
            <div class="col">
                <label for="">Phone number</label>
                <input type="text" class="form-control" name="phone" value="<?php echo $user['phone_number']; ?>" placeholder="Phone number">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" readonly="readonly" value="<?php echo $user['email']; ?>" placeholder="Email">
            </div>
            <div class="col">
                <label for="">New Password</label>
                <input type="text" class="form-control" name="password" value="" placeholder="password">
            </div>
        </div>
        <div class="form-group mt-2">

        </div>
        <div class="form-group mt-2">
            <label for="">Address</label>
            <textarea name="address" class="form-control" cols="25" rows="3" placeholder="Your address">
            <?php echo $user['address']; ?>
            </textarea>
        </div>


        <button class="btn btn-primary mt-2" type="submit">Save</button>

    </form>



</main>
<div class="top">
    <button id="menu-btn">
        <span class="material-icons-sharp">menu</span>
    </button>
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#orderList').DataTable();
    });
</script>
<script src="public/js/index.js"></script>
</body>

</html>