<h1>Phone Edit</h1>
<a href="http://localhost/BKPhone/AdminPhone" class="addBtn">Back to Phone list</a>
<h2 class="mt-3">Edit</h2>
<form class="addForm" method="POST" action="<?php echo 'http://localhost/BKPhone/AdminPhone/PostEdit/' . $data['phone']['id']; ?>">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Phone name" value="<?php echo $data['phone']['name']; ?>">
    </div>
    <div class="row mt-2">
        <div class="col">
            <label for="">Base Price</label>
            <input type="number" class="form-control" name="base_price" placeholder="Price" value="<?php echo $data['phone']['base_price']; ?>">
        </div>
        <div class="col">
            <label for="">Fibal Price</label>
            <input type="number" class="form-control" name="final_price" placeholder="Price" value="<?php echo $data['phone']['final_price']; ?>">
        </div>
    </div>
    <div class="form-group mt-2">

    </div>
    <div class="form-group mt-2">
        <label for="">Description</label>
        <textarea name="description" class="form-control" cols="25" rows="7" placeholder="Describe new phone here"><?php echo $data['phone']['description']; ?></textarea>
    </div>
    <div class="form-group mt-2">
        <label for="">Brand</label>
        <select name="brand" class="form-control">
            <?php foreach ($data['brands'] as $b) { ?>
                <option value="<?php echo $b['id'] ?>" <?php if ($b['id'] == $data['phone']['category_id']) {
                                                            echo 'selected';
                                                        } ?>><?php echo $b['name'] ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group mt-2">
        <label for="">Image URL</label>
        <input type="text" class="form-control" name="image" value="<?php echo $data['phone']['thumbnail']; ?>" placeholder="Paste the image URL here">
    </div>

    <button class="btn btn-primary mt-2">Add</button>

</form>