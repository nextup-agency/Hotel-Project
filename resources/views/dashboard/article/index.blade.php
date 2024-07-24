@extends('dashboard.layout.index')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 d-flex align-items-center">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}" class="link"><i
                                        class="mdi mdi-home-outline fs-4"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Basic Table</li>
                        </ol>
                    </nav>
                    {{-- <h1 class="mb-0 fw-bold">Basic Table</h1> --}}
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <h4 class="card-title">Data Articles</h4>
                            </div>
                            <div class="col-12">
                                <div class="text-end upgrade-btn">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" data-bs-whatever="@fat">Create Data</button>
                                </div>
                            </div>
                            <div class="col-4">
                                <form class="position-relative mt-4" action="{{ route('article.index') }}" method="GET">
                                    <input class="form-control search-chat py-2 ps-5" type="text" name="query"
                                        placeholder="Search" title="Enter search keyword">
                                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"
                                        type="submit"></i>
                                </form>
                            </div>
                            @include('dashboard.article.create')
                            @include('dashboard.article.edit')
                        </div>
                        <div class="table-responsive m-t-20">
                            <table class="table table-bordered table-responsive-lg">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">News Source</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Images</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_article as $article)
                                        <tr>
                                            <td>{{ ++$no }}</td>
                                            <td>{{ $article->title }}</td>
                                            <td>{{ $article->news_source }}</td>
                                            <td>{{ Str::limit($article->description, 50) }}</td>
                                            <td> <img src="{{ Storage::url($article->image) }}" class="rounded"
                                                    style="width: 100px"></td>
                                            <td class="text-center">
                                                <form action="{{ route('article.destroy', $article->id) }}" method="post">
                                                    @csrf
                                                    <button type="button" class="btn btn-primary mb-3"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleEdit{{ $article->id }}"
                                                        data-bs-whatever="@fat">Edit
                                                    </button>
                                                    <button class="btn btn-danger mb-3"
                                                        onClick="return confirm('Yakin mau dihapus?')">Hapus</button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            © Copyright Union Square</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
@endsection
