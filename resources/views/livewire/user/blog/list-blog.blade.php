<main id="main" class="main">
    <div class="pagetitle">
        <h1>Blog List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route("user.home") }}">Home</a></li>
                <li class="breadcrumb-item active">Blog List</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Blogs List</h5>
                    <div class="row">
                        <div class="col-md-10">
                            <label>
                                <input type="search" wire:model="search" placeholder="Search..." class="form-control">
                            </label>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('user.add_blog') }}" class="btn btn-outline-primary"><span class="fa fa-plus-square"></span> Add Blog</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Property Type</th>
                                <th scope="col">Title</th>
                                <th scope="col">Views</th>
                                <th scope="col">Likes</th>
                                <th scope="col">Comments</th>
                                <th scope="col">Action</th>
                                <th scope="col">Date/Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($blogs as $index => $blog)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>
                                        <img class="img-thumbnail zoom_img" src="{{ $blog->photo }}" alt="Blog Image" width="100">
                                    </td>
                                    <td>{{ $blog->property_type }}</td>
                                    <td>{{ $blog->name }}</td>
                                    <td>{{ $blog->views }}</td>
                                    <td>{{ $blog->likes }}</td>
                                    <td>
                                        <a href="{{ route('blog.comments', $blog->id) }}" class="btn btn-outline-primary"><span class="fa fa-comment-alt"></span> {{ $blog->comments_count }}</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-outline-primary"><span class="fa fa-edit"></span></a>
                                    </td>
                                    <td>
                                        <button type="button" wire:click="delete('{{ $blog->id }}')" class="btn btn-outline-danger"><span class="fa fa-trash"></span></button>
                                    </td>
                                    <td>{{ $blog->created_at->format('F d, Y h:i a') }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
