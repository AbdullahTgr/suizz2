 
  
  <!-- Modal -->
  <div class="modal fade" id="addState" tabindex="-1" aria-labelledby="createCatLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add State</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <form enctype="multipart/form-data" action="{{route('admin.save_state')}}" method="post">

        <div class="modal-body">
                @csrf
                <div class="mb-3">
                    <label for="country_id" class="form-label">Country</label>
                     <select class="form-control" name="country_id" id="country_id">
                         @foreach ($countries as $country)
                              <option value="{{$country->id}}">{{$country->name}}</option>
                         @endforeach
                     </select>
                   </div>
                   <div class="mb-3">
                    <label for="service_id" class="form-label">Service</label>
                     <select class="form-control" name="service_id" id="service_id">
                         @foreach ($services as $service)
                              <option value="{{$service->id}}">{{$service->name}}</option>
                         @endforeach
                     </select>
                   </div>
                   <div class="mb-3">
                    <label for="traffic" class="form-label">Traffics</label>
                    <input type="number" class="form-control" name="traffic" id="traffic" aria-describedby="helpId" placeholder="">
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