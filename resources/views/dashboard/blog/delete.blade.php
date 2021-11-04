 
  
  <!-- Modal -->
  <div class="modal fade" id="deleteCat{{$blog->id}}" tabindex="-1" aria-labelledby="createCatLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('admin.delete_blog')}}" method="post">
            @csrf
            <input type="hidden" name="blog_id" value="{{$blog->id}}">
        <div class="modal-body">
            Are You Sure to Delete This Post?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Yes</button>
        </div>
        </form>
      </div>
    </div>
  </div>