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
    <div class="card">
        <div class="card-body">
            <br>
            @if($blogs->count() > 0)
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Tags</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $blog->name }}</td>
                                <td>{{ $blog->category->name }}</td>
                                <td>{{ $blog->tags }}</td>
                                <td>
                                    <a href="{{ route("blog.show", $blog->id) }}" class="btn btn-sm btn-primary">View</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p>No blogs found.</p>
            @endif
        </div>
    </div>
</main>
