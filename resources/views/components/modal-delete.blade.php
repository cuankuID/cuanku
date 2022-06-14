<form action="{{ route('posts.destroy', $post->slug) }}" method="POST" enctype="multipart/form-data">
    @method('delete')
    @csrf
    <div class="modal fade" id="modalDelete{{$post->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Delete Item</h6>
                </div>
                <div class="modal-body">
                    <p>Are you sure, you want to delete this?</p>
                </div>
                <div class="modal-footer my-0">
                    <input type=hidden id="id" name=id>
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>    
</form>