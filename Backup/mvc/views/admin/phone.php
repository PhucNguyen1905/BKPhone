<?php
$title = 'Phone List';
$activeNav = 'phone';
require_once('mvc/views/blocks/admin_header.php');
?>

<!-- MAIN SECTION -->
<main>
    <h1>Phone Management</h1>
    <a href="http://localhost/BKPhone/AdminPhone/Add" class="addBtn">Add New Phone</a>
    <!-- Brand -->
    <div class="tablelist">
        <h2>Phone</h2>
        <table id="orderList" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th class="imgCol">Image</th>
                    <th>Brand</th>
                    <th>Name</th>
                    <th>Base Price</th>
                    <th>Final Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($data['phones'] as $item) { ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td class="imgCol"><img src="<?php echo $item['thumbnail']; ?>" alt=""></td>
                        <td><?php echo $item['brand']; ?></td>
                        <td><?php echo $item['name']; ?></td>
                        <td><?php echo $item['base_price']; ?></td>
                        <td><?php echo $item['final_price']; ?></td>
                        <td><a href="<?php echo 'http://localhost/BKPhone/AdminPhone/ViewEdit/' . $item['id']; ?>" class="warning">Edit</a></td>
                        <td><a class="delLink" href="<?php echo 'http://localhost/BKPhone/AdminPhone/DeletePhone/' . $item['id']; ?>" style="color: #ff7782;">Delete</a></td>
                    </tr>
                <?php $i = $i + 1;
                } ?>

            </tbody>
        </table>
    </div>
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
    jQuery(".delLink").on("click", function(e) {
        e.preventDefault();
        var clicked = jQuery(this);
        var clicked_url = clicked.attr("href");

        var msg = confirm("Are you sure you want to delete this phone?");
        if (msg == true) {
            window.location.href = clicked_url;
        }
    });
</script>
<script src="public/js/index.js"></script>
</body>

</html>