 <!-- Modal -->
  <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="createCatLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <form enctype="multipart/form-data" action="{{route('admin.save_user')}}" method="post">

        <div class="modal-body">
                @csrf
                <div class="mb-3">
                    <label for="ar_name" class="form-label">Name</label>
                    <input required type="text" class="form-control" name="name" id="ar_name" aria-describedby="helpId" placeholder="">
                   </div>
                   <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input required type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="">
                   </div>

                   <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input required minlength="8" type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">
                   </div>          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>

      </div>
    </div>
  </div>