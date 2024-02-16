<main id="main" class="main">
    <div class="pagetitle">
        <h1>Add Blog</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route("user.home")}}">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Editors</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="card">
        <div class="card-body">
            <br>
            <form class="row g-3" action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <label for="category_id" class="form-label">Select Category</label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        <option selected>Select Category</option>
                        <option value="e7adbb8f-4063-48d4-9165-b43cedf53af4">Sabbath Service</option>
                        <option value="eee560fc-a8b3-4e20-892b-3610c2c22431">Bible Study</option>
                        <option value="b122075a-cb0a-4e95-9383-35e75c33dcc1">Prayer Meeting</option>
                        <option value="ede13e11-46d8-41dd-9d05-6eca60e55124">Youth Fellowship</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="name" class="form-label">Blog Title</label>
                    <input type="text" class="form-control" id="name" name="name" required placeholder="Enter blog title...">
                </div>
                <div class="col-md-12">
                    <label for="tags" class="form-label">Church-related Tags Separated By Commas i.e <i class="text-primary">worship, prayer, community</i></label>
                    <input type="text" class="form-control" id="tags" name="tags" placeholder="Enter church-related tags...">
                </div>
                <div class="col-md-12">
                    <label for="description" class="form-label">Blog Description</label>
                    <!-- Integrate a text editor here -->
                    <textarea id="description" name="description" rows="6" class="form-control editor"></textarea>
                </div>
                <div class="col-md-12">
                    <label for="photo" class="form-label">Blog Banner</label>
                    <input type="file" class="form-control" id="photo" name="photo" accept="image/*" required placeholder="Upload image...">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-lg float-end">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
