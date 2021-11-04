 
  
  <!-- Modal -->
  <div class="modal fade" id="deleteCat{{$work->id}}" tabindex="-1" aria-labelledby="createCatLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Work</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('admin.delete_work')}}" method="post">
            @csrf
            <input type="hidden" name="work_id" value="{{$work->id}}">
        <div class="modal-body">
            Are You Sure to Delete This Work?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Yes</button>
        </div>
        </form>
      </div>
    </div>
  </div>