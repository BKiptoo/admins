<main id="main" class="main">
    <div class="pagetitle">
        <h1>Add Slide</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route("user.home")}}">Home</a></li>
                <li class="breadcrumb-item">Add</li>
                <li class="breadcrumb-item active">Slides</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body"><br>
                            <form class="row g-3" wire:submit="submit">
                                <div class="col-md-6">
                                    <label for="form.name" class="form-label">Name</label>
                                    <input type="text" class="form-control "
                                           id="form.name" required placeholder="Enter name..."
                                           wire:model.blur="form.name">
                                </div>
                                <div class="col-md-6">
                                    <label for="form.description" class="form-label">Description</label>
                                    <input type="text"
                                           class="form-control "
                                           id="form.description" required placeholder="Enter description..."
                                           wire:model.blur="form.description">
                                </div>
                                <div class="col-md-6">
                                    <label for="form.buttonName" class="form-label">Button Name
                                        <b class="text-info"><i>optional</i></b></label>
                                    <input type="text"
                                           class="form-control "
                                           id="form.buttonName" placeholder="Enter buttonName..."
                                           wire:model.blur="form.buttonName">
                                </div>
                                <div class="col-md-6">
                                    <label for="form.buttonLink" class="form-label">Button URL
                                        <b class="text-info"><i>optional</i></b></label>
                                    <input type="url"
                                           class="form-control "
                                           id="form.buttonLink" placeholder="Enter buttonLink..."
                                           wire:model.blur="form.buttonLink">
                                </div>
                                <div class="col-md-12">
                                    <label for="form.photo" class="form-label">Slider Banner</label>
                                    <input type="file"
                                           class="form-control "
                                           id="form.photo" accept="image/*" placeholder="Upload image..." required
                                           wire:model.blur="form.photo">
                                </div>
                                <div wire:loading wire:target="form.photo"><span
                                        class="spinner-border spinner-border-sm"></span> Uploading
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg float-end"
                                            wire:loading.class="disabled"
                                            wire:offline.attr="disabled"><span wire:target="submit"
                                                                               wire:loading.class="spinner-border spinner-border-lg"></span>
                                        Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

