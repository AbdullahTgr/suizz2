 
  
  <!-- Modal -->
  <div class="modal fade" id="deleteUser{{$user->id}}" tabindex="-1" aria-labelledby="createCatLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('admin.delete_user')}}" method="post">
            @csrf
            <input type="hidden" name="user_id" value="{{$user->id}}">
        <div class="modal-body">
            Are You Sure to Delete This User?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Yes</button>
        </div>
        </form>
      </div>
    </div>
  </div>