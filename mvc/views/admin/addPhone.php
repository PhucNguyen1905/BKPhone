<?php
$title = 'Add';
$activeNav = 'addphone';
require_once('mvc/views/blocks/add_header.php');
?>

<!-- MAIN SECTION -->
<main>
    <h1>Phone Management</h1>
    <a href="#" class="addBtn">Back to Phone list</a>
    <h2 class="mt-2">Add New Brand</h2>
    <form class="addForm" action="">
        <div class="form-group">
            <label for="">Brand</label>
            <input type="text" class="form-control" name="name" placeholder="New Brand">
        </div>
        <button class="btn btn-primary mt-2">Add</button>

    </form>
    <h2 class="mt-3">Add New Phone</h2>
    <form class="addForm" action="">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Phone name">
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="">Base Price</label>
                <input type="number" class="form-control" name="baseprice" placeholder="Price">
            </div>
            <div class="col">
                <label for="">Fibal Price</label>
                <input type="number" class="form-control" name="finalprice" placeholder="Price">
            </div>
        </div>
        <div class="form-group mt-2">

        </div>
        <div class="form-group mt-2">
            <label for="">Description</label>
            <textarea name="description" class="form-control" cols="25" rows="7" placeholder="Describe new phone here"></textarea>
        </div>
        <div class="form-group mt-2">
            <label for="">Brand</label>
            <select name="brand" class="form-control">
                <option value="1">iPhone</option>
                <option value="2">Samsung</option>
            </select>
        </div>

        <div class="form-group mt-2">
            <label for="">Image URL</label>
            <input type="text" class="form-control" name="image" placeholder="Paste the image URL here">
        </div>

        <button class="btn btn-primary mt-2">Add</button>

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