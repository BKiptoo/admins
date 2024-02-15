<main id="main" class="main">
    <style>
        /* Additional CSS styles */
        .pagetitle {
            margin-bottom: 20px;
        }

        .breadcrumb {
            margin-bottom: 0;
        }

        .card {
            margin-top: 20px;
            border: 1px solid #ffffff;
            border-radius: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            margin-bottom: 15px;
        }

        .trix-editor {
            margin-bottom: 15px;
        }

        .float-end {
            float: right;
        }
    </style>

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
            <form class="row g-3" wire:submit="submit">
                <div class="col-md-6">
                    <label for="form.category_id" class="form-label">Select Category</label>
                    <select name="form.category_id" id="form.category_id" class="form-control" required wire:model.blur="form.category_id">
                        <option selected>Select Category</option>
                        <option value="e7adbb8f-4063-48d4-9165-b43cedf53af4">Sabbath Service</option>
                        <option value="eee560fc-a8b3-4e20-892b-3610c2c22431">Bible Study</option>
                        <option value="b122075a-cb0a-4e95-9383-35e75c33dcc1">Prayer Meeting</option>
                        <option value="ede13e11-46d8-41dd-9d05-6eca60e55124">Youth Fellowship</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="form.name" class="form-label">Blog Title</label>
                    <input type="text" class="form-control" id="form.name" required placeholder="Enter blog title..." wire:model.blur="form.name">
                </div>
                <div class="col-md-12" wire:ignore.self>
                    <label for="form.tags" class="form-label">Church-related Tags Separated By Commas i.e <i class="text-primary">worship, prayer, community</i></label>
                    <input type="text" class="form-control" id="form.tags" placeholder="Enter church-related tags..." wire:model.blur="form.tags">
                </div>
                <div class="col-md-12" wire:model.debounce.365ms="form.description" wire:ignore>
                    <label for="blogDescription" class="form-label">Blog Description</label>
                    <quill-editor id="blogDescription" wire:model.lazy="form.description"></quill-editor>
                </div>


                <div class="col-md-12">
                    <label for="form.photo" class="form-label">Blog Banner</label>
                    <input type="file" class="form-control" id="form.photo" accept="image/*" required placeholder="Upload image..." wire:model.blur="form.photo">
                </div>
                <div wire:loading wire:target="form.photo"><span class="spinner-border spinner-border-sm"></span> Uploading</div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-lg float-end" wire:loading.class="disabled" wire:offline.attr="disabled">
                        <span wire:target="submit" wire:loading.class="spinner-border spinner-border-lg"></span> Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
