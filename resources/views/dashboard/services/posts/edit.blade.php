 
  
  <!-- Modal -->
  <div class="modal fade" id="editProduct{{$service->id}}" tabindex="-1" aria-labelledby="createCatLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Service Post</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <form enctype="multipart/form-data" action="{{route('admin.update_service_post')}}" method="post">
            @csrf
        <div class="modal-body">
                <div class="mb-3">
                    <input type="hidden" name="service_id" value="{{$service->id}}">
                    <label for="ar_name" class="form-label">Name</label>
                    <input  required type="text" class="form-control" name="name" id="ar_name" aria-describedby="helpId" value="{{$service->name}}">
                   </div>
                   <div class="mb-3">
                    <label for="price" class="form-label">  Price</label>
                    <input required type="number" step="0.1" class="form-control" name="price" id="price" value="{{$service->price}}" placeholder="$">
                   </div>
                   <div class="mb-3">
                    <label for="ar_description" class="form-label">Description</label>
                    <textarea   class="form-control" name="description" id="description" aria-describedby="helpId">{{$service->description}}</textarea>
                   </div>
               
                   <div class="mb-3">
                    <label for="photo{{$service->id}}" class="form-label">Featured Image</label>
                    <br>
                    <img id="pic" src="{{asset(str_replace('public','storage',$service->icon))}}" class="img-fluid">
                    <input   accept="image/png, image/gif, image/jpeg"  oninput="pic.src=window.URL.createObjectURL(this.files[0])" type="file"  name="icon" id="photo{{$service->id}}" style="display: none">
                    <br>
                    <label class="btn btn-primary btn-sm shadow-sm" for="photo{{$service->id}}"><i class="fas fa-image"></i> Choose Icon - Image</label>
                </div>
    
  

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>


 
 