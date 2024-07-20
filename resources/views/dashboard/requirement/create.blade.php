<form method="post" action="{{ route('requirement.store') }}">
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createModalLabel">Tambah Data Requirement</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                        @if ($errors->has('name'))
                            <div class="text-danger">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                        @if ($errors->has('email'))
                            <div class="text-danger">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="col-form-label">Phone Number:</label>
                        <input type="text" name="phone_number" class="form-control" id="phone_number" required>
                        @if ($errors->has('phone_number'))
                            <div class="text-danger">
                                {{ $errors->first('phone_number') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="message" class="col-form-label">Message:</label>
                        <textarea name="message" class="form-control h-150px" rows="10" id="message" required></textarea>
                        @if ($errors->has('message'))
                            <div class="text-danger">
                                {{ $errors->first('message') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
