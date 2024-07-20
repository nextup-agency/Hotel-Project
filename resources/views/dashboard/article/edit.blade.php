@foreach ($data_article as $article)
    <div class="modal fade" id="exampleEdit{{ $article->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class=" modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create Data Article</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('article.update', ['id' => $article->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-title" class="col-form-label">Title:</label>
                            <input type="text" name="title" value="{{ $article->title }}" class="form-control"
                                id="recipient-title">
                        </div>
                        <div class="mb-3">
                            <label for="description-text" class="col-form-label">Description:</label>
                            <textarea class="form-control h-150px" rows="15" name="description" class="form-control" id="description-text">{{ $article->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-image" class="col-form-label">Image:</label>
                            <img src="{{ Storage::url($article->image) }}" class="form-control rounded"
                                style="width: 500px; height:300px;">
                        </div>
                        <div class="mb-3">
                            <label for="image-text" class="col-form-label">Image:</label>
                            <input type="file" name="image" class="form-control" id="message-text"
                                multiple></input>
                            <label>*)If the Image is not replaced, leave it blank.</label>
                        </div>
                        <div class="mb-3">
                            <label for="news-source" class="col-form-label">News Source:</label>
                            <input type="text" name="news_source" value="{{ $article->news_source }}"
                                class="form-control" id="news-source">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
