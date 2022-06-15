<?php
$title = 'User';
$activeNav = 'customer';
require_once('mvc/views/blocks/admin_header.php');
?>

<!-- ===========Main Content============ -->
<div class="container-fluid px-4">
    <h3 class="fs-4 mb-3">User Management</h3>
    <a href="http://localhost/BKPhone/AdminCustomer/Add" class="btn btn-outline-primary">Add New Admin Account</a>
    <div class="row mt-3">

        <div class="col">
            <table id="phoneList" class="table bg-white rounded shadow-sm table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fullname</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Address</th>
                        <th>Role</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data['users'] as $user) { ?>
                        <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['fullname']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><?php echo $user['phone_number']; ?></td>
                            <td><?php echo $user['address']; ?></td>

                            <?php if ($user['role_id'] == 1) { ?>
                                <td>Customer</td>

                            <?php } else { ?>
                                <td>Admin</td>
                            <?php } ?>

                            <td><a href="<?php echo 'http://localhost/BKPhone/AdminCustomer/ViewEdit/' . $user['id']; ?>" class="editLink">Edit</a></td>
                            <td><a class="delLink" href="<?php echo 'http://localhost/BKPhone/AdminCustomer/DeleteUser/' . $user['id']; ?>" style="color: #ff7782;">Delete</a></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- ===========Main Content============ -->
</div>
</div>
<!-- ===========Page Content============ -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#phoneList').DataTable();
    });
    jQuery(".delLink").on("click", function(e) {
        e.preventDefault();
        var clicked = jQuery(this);
        var clicked_url = clicked.attr("href");

        var msg = confirm("Are you sure you want to delete this account?");
        if (msg == true) {
            window.location.href = clicked_url;
        }
    });
</script>
<script src="public/js/admin_index.js"></script>
</body>

</html>