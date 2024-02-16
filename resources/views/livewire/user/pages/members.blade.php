<main id="main" class="main">
    <div class="pagetitle">
        <h1>Members</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('user.home') }}">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">General</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row mb-3">
            <div class="col">
                <div class="text-end">
                    <button class="btn btn-success"><i class="bx bx-export"></i></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table id="members-table" class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Joined</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Loop through members data here -->
                        @foreach($members as $member)
                            <tr>
                                <td>{{ $member->id }}</td>
                                <td>{{ $member->name }}</td>
                                <td>{{ $member->email }}</td>
                                <td>{{ $member->role }}</td>
                                <td>{{ $member->created_at->format('d/m/Y') }}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary"><i class="bx bx-edit-alt"></i></a>
                                    <a href="#" wire:click="deleteMember({{ $member->id }})" class="btn btn-sm btn-danger" data-bs-original-title="Delete user"><i class="bx bx-trash"></i></a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $members->links() }}
            </div>
        </div>
    </section>
</main><!-- End #main -->
