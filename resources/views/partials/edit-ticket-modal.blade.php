<!-- Modal -->
<div class="modal fade" id="editTicketModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit ticket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form id="editTicket" method="post" action="{{route('update-cart')}}">
          @csrf
              <input type="text" required class="form-control form-control-sm" name="name" id="name" placeholder="Enter name"><br/>
              <input type="text" required class="form-control form-control-sm" name="surname" id="surname" placeholder="Enter surname"><br/>
              <input type="text" required class="form-control form-control-sm" name="contact" id="contact" placeholder="Enter contact"><br/>
              <input type="number" required class="form-control form-control-sm" name="age" id="age" placeholder="Enter age"><br/>
              <input type="hidden" id="ticketAt" name="ticketAt" value="">
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick='document.getElementById("editTicket").submit()'>Update</button>
      </div>
    </div>
  </div>
</div>