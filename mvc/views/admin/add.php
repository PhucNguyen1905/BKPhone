<?php
$title = 'Add';
$activeNav = 'addphone';
require_once('mvc/views/blocks/add_header.php');
?>

<!-- MAIN SECTION -->
<main>
    <?php
    if ($data['type'] == 'brand') {
        require_once('mvc/views/blocks/add_brand.php');
    } else {
        require_once('mvc/views/blocks/add_phone.php');
    }
    ?>
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