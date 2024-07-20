<form method="post" action="{{ route('article.store') }}" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class=" modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Article</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-title" class="col-form-label">Title:</label>
                        <input type="text" name="title" class="form-control" id="recipient-title">
                        @if ($errors->has('title'))
                            <div class="text-danger">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="description-text" class="col-form-label">Description:</label>
                        <textarea class="form-control h-150px" rows="15" name="description" class="form-control" id="description-text"></textarea>
                        @if ($errors->has('description'))
                            <div class="text-danger">
                                {{ $errors->first('description') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="image-text" class="col-form-label">Image:</label>
                        <input type="file" name="image" class="form-control" id="message-text" multiple></input>
                        @if ($errors->has('image'))
                            <div class="text-danger">
                                {{ $errors->first('image') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="news-source" class="col-form-label">News Source:</label>
                        <input type="text" name="news_source" class="form-control" id="news-source">
                        @if ($errors->has('news_source'))
                            <div class="text-danger">
                                {{ $errors->first('news_source') }}
                            </div>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
