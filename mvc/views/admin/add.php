<?php
$title = 'Add';
$activeNav = 'addphone';
require_once('mvc/views/blocks/admin_header.php');
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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

</script>
<script src="public/js/admin_index.js"></script>
</body>

</html>