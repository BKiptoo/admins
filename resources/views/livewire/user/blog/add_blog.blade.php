<main id="main" class="main">
    <div class="pagetitle">
        <h1>Add Blog</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route("user.home")}}">Home</a></li>
                <li class="breadcrumb-item">Blogs</li>
                <li class="breadcrumb-item active">Add</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div>
        <div class="page-content">
            <div class="main-wrapper">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Add Blog</h5>
                                <form class="row g-3" wire:submit.prevent="submit">
                                    <div class="col-md-6">
                                        <label for="property_type_id" class="form-label">Select Property Type</label>
                                        <select name="property_type_id" id="property_type_id" class="form-control" required wire:model="form.property_type_id">
                                            <option value="">Select Property Type</option>
                                            <option value="apartment">Apartment</option>
                                            <option value="bungalow">Bungalow</option>
                                            <!-- BlogAdd other options here -->
                                        </select>
                                        @error('form.property_type_id') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Blog Title</label>
                                        <input type="text" class="form-control" id="name" required placeholder="Enter name..." wire:model="form.name">
                                        @error('form.name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="tags" class="form-label">Blog Tags Separated By Commas i.e <i class="text-primary">fashion, kids, collections</i></label>
                                        <input type="text" class="form-control" id="tags" placeholder="Enter tags..." wire:model="form.tags">
                                        @error('form.tags') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Blog Description</label>
                                        <textarea id="description" name="description" rows="6" class="form-control" wire:model="form.description"></textarea>
                                        @error('form.description') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="photo" class="form-label">Blog Banner</label>
                                        <input type="file" class="form-control" id="photo" accept="image/*" required wire:model="form.photo">
                                        @error('form.photo') <span class="text-danger">{{ $message }}</span> @enderror
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
    </div>

</main>
