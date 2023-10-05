<form action='' method='post'>
    <h2>Add product</h2>
    <!-- name -->
    <div class="form-group mb-3">
        <label for="name">Product's name</label>
        <input type="text" class="form-control" id="name" placeholder="Name of product">
    </div>
    <!-- category -->
    <div class="dropdown mb-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Category
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Desktop</a>
            <a class="dropdown-item" href="#">Laptop</a>
            <a class="dropdown-item" href="#">Mini desktop</a>
            <a class="dropdown-item" href="#">Tablet</a>
            <a class="dropdown-item" href="#">Smarthpone</a>
        </div>
    </div>
    <!-- image -->
    <div class="form-group mb-3">
        <label for="image">Image</label>
        <input type="text" class="form-control" id="image" placeholder="Image">
    </div>
</form>
