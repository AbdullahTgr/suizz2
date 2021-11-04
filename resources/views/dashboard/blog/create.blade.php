 
  
  <!-- Modal -->
  <div class="modal fade" id="addCat" tabindex="-1" aria-labelledby="createCatLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Post</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <form enctype="multipart/form-data" action="{{route('admin.save_blog')}}" method="post">

        <div class="modal-body">
                @csrf
                <div class="mb-3">
                    <label for="ar_name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="ar_name" aria-describedby="helpId" placeholder="">
                   </div>
                   <div class="mb-3">
                    <label for="ar_description" class="form-label">Description</label>
                    <textarea   class="form-control" name="description" id="ar_description" aria-describedby="helpId" placeholder=""></textarea>
                   </div>

                   <div class="mb-3">
                    <label for="photo" class="form-label">Featured Image</label>
                    <br>
                    <img id="pic" class="img-fluid">
                    <input   accept="image/png, image/gif, image/jpeg"  oninput="pic.src=window.URL.createObjectURL(this.files[0])" type="file"  name="image" id="photo" style="display: none">
                    <br>
                    <label class="btn btn-primary btn-sm shadow-sm" for="photo"><i class="fas fa-image"></i> Choose Image</label>
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