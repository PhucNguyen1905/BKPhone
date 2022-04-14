<?php
$title = 'Brand';
$activeNav = 'brand';
require_once('mvc/views/blocks/admin_header.php');
?>
<!-- MAIN SECTION -->
<main>
    <h1>Phone Brand</h1>
    <a href="http://localhost/BKPhone/AdminAdd" class="addBtn">Add New Brand</a>
    <!-- Brand -->
    <div class="tablelist">
        <h2>Brand</h2>
        <table id="orderList" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Brand Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($data['brands'] as $item) { ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $item['name']; ?></td>
                        <td><a href="<?php echo 'http://localhost/BKPhone/AdminBrand/ViewEdit/' . $item['id']; ?>" class="warning">Edit</a></td>
                        <td><a href="<?php echo 'http://localhost/BKPhone/AdminBrand/DeleteBrand/' . $item['id']; ?>" style="color: #ff7782;">Delete</a></td>
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
</script>
<script src="public/js/index.js"></script>
</body>

</html>