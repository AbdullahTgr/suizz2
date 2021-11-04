 
  
  <!-- Modal -->
  <div class="modal fade" id="deleteProduct{{$payment->id}}" tabindex="-1" aria-labelledby="createCatLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Approve Payment</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('admin.approve_payment')}}" method="post">
            @csrf
            <input type="hidden" name="payment_id" value="{{$payment->id}}">
        <div class="modal-body">
            Are You Sure to Approve This payment?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Yes</button>
        </div>
        </form>
      </div>
    </div>
  </div>