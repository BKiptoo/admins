<main id="main" class="main">
    <div class="pagetitle">
        <h1>Add Slide</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route("user.home") }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('user.slide.add')}}">Add</a></li>
                <li class="breadcrumb-item active">Slides</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Slide List</h5>
                    <div class="row">
                        <div class="col-md-9">
                            <input type="search" wire:model.live="search" placeholder="Search..." class="form-control">
                        </div>
                        <div class="col-md-1">
                            <a href="{{ route('user.slide.add') }}" class="btn btn-outline-primary"><span class="bx bx-plus-square"></span> Add</a>
                        </div>
                        <div class="col-md-2">
                            <button wire:loading.class="disabled" wire:click="loadMore" wire:offline.attr="disabled" class="btn btn-outline-primary"><span wire:target="loadMore" wire:loading.class="spinner-border spinner-border-lg"></span><span class="fa fa-cloud-download-alt"></span> Load More</button>
                        </div>
                        <div class="col-md-2">
                            <!-- Unused Column - Remove or Add Content Here -->
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Slide</th>
                                <th scope="col">Action</th>
                                <th scope="col">Date/Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($slides as $slide)
                                <tr>
                                    <th scope="row">{{ $slide->id }}</th>
                                    <td>
                                        <img class="img-thumbnail zoom_img" src="{{ $slide->image_url }}" alt="Slide Image" width="100">
                                    </td>
                                    <td>{{ $slide->title }}</td>
                                    <td><a href="#" class="btn btn-outline-primary"><span class="bx bx-edit-alt"></span></a></td>
                                    <td>{{ $slide->created_at->format('F d, Y h:i A') }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @if($slides->isEmpty())
                            <div class="d-flex justify-content-center">
                                <img src="https://shiftenant.co.ke/assets/images/no-items.gif" alt="No Items Found">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
