<h1>Phone Management</h1>
<a href="http://localhost/BKPhone/AdminPhone" class="addBtn">Back to Phone list</a>
<h2 class="mt-3">Add New Phone</h2>
<form class="addForm" action="http://localhost/BKPhone/AdminPhone/NewPhone" method="POST">
    <div class="form-group mt-2 mb-2">
        <label for="">Brand</label>
        <select name="brand" class="form-control">
            <?php foreach ($data['brands'] as $b) { ?>
                <option value="<?php echo $b['id'] ?>"><?php echo $b['name'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Phone name">
    </div>
    <div class="row mt-2">
        <div class="col">
            <label for="">Base Price</label>
            <input type="number" class="form-control" name="base_price" placeholder="Price">
        </div>
        <div class="col">
            <label for="">Fibal Price</label>
            <input type="number" class="form-control" name="final_price" placeholder="Price">
        </div>
    </div>
    <div class="form-group mt-2">

    </div>
    <div class="form-group mt-2">
        <label for="">Description</label>
        <textarea name="description" class="form-control" cols="25" rows="7" placeholder="Describe new phone here"></textarea>
    </div>


    <div class="form-group mt-2">
        <label for="">Image URL</label>
        <input type="text" class="form-control" name="image" placeholder="Paste the image URL here">
    </div>

    <button class="btn btn-primary mt-2" type="submit">Add</button>

</form>