<?php
$title = 'Add';
$activeNav = 'customer';
require_once('mvc/views/blocks/admin_header.php');
?>

<!-- MAIN SECTION -->
<main>
    <h3 class="fs-4 mb-3">Add New Admin Account</h3>
    <a href="http://localhost/BKPhone/AdminCustomer" class="btn btn-outline-primary">Back to User list</a>
    <form class="addForm" action="http://localhost/BKPhone/AdminCustomer/NewAccount" method="POST">

        <div class="row mt-2">
            <div class="col">
                <label for="">Full Name</label>
                <input type="text" class="form-control" name="fullname" placeholder="Full name">
            </div>
            <div class="col">
                <label for="">Phone number</label>
                <input type="text" class="form-control" name="phone" placeholder="Phone number">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="col">
                <label for="">Password</label>
                <input type="text" class="form-control" name="password" placeholder="password">
            </div>
        </div>
        <div class="form-group mt-2">

        </div>
        <div class="form-group mt-2">
            <label for="">Address</label>
            <textarea name="address" class="form-control" cols="25" rows="3" placeholder="Your address"></textarea>
        </div>


        <button class="btn btn-primary mt-2" type="submit">Add</button>

    </form>
</main>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

</script>
<script src="public/js/admin_index.js"></script>
</body>

</html>