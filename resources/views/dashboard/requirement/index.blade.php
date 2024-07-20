@extends('dashboard.layout.index')

@section('content')
    <div class="page-wrapper">
        <!-- Bread crumb and right sidebar toggle -->
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 d-flex align-items-center">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard.index') }}" class="link">
                                    <i class="mdi mdi-home-outline fs-4"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Requirements Table</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Bread crumb and right sidebar toggle -->

        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <h4 class="card-title">Data Requirements</h4>
                            </div>
                            <div class="col-12">
                                <div class="text-end upgrade-btn">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#createModal" data-bs-whatever="@fat">Create Data</button>
                                </div>
                            </div>
                            @include('dashboard.requirement.create')
                            @include('dashboard.requirement.edit')
                        </div>
                        <div class="table-responsive m-t-20">
                            <table class="table table-bordered table-responsive-lg">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Message</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_requirement as $requirement)
                                        <tr>
                                            <td>{{ ++$no }}</td>
                                            <td>{{ $requirement->name }}</td>
                                            <td>{{ $requirement->email }}</td>
                                            <td>{{ $requirement->phone_number }}</td>
                                            <td>{{ $requirement->message }}</td>
                                            <td class="text-center">
                                                <form action="{{ route('requirement.destroy', $requirement->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-primary mb-3"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editModal{{ $requirement->id }}"
                                                        data-bs-whatever="@fat">Edit</button>
                                                    <button class="btn btn-danger mb-3"
                                                        onClick="return confirm('Are you sure you want to delete it?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $data_requirement->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page Content -->
        </div>
        <!-- End Container fluid  -->

        <!-- footer -->
        <footer class="footer text-center">
            © Copyright Union Square.
        </footer>
        <!-- End footer -->
    </div>
@endsection
