<h1>Brand Edit</h1>
<a href="http://localhost/BKPhone/AdminBrand" class="addBtn">Back to Brand list</a>
<h2 class="mt-2">Edit</h2>
<form class="addForm" method="POST" action="<?php echo 'http://localhost/BKPhone/AdminBrand/PostEdit/' . $data['brand']['id']; ?>">
    <div class="form-group">
        <label for="">Brand</label>
        <input type="text" class="form-control" name="name" placeholder="Edit Brand" value="<?php echo $data['brand']['name']; ?>">
    </div>
    <button class="btn btn-primary mt-2">Save</button>
</form>