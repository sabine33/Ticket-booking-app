   <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-body">
                   <form id="form">
                       <div class="form-row">
                           <div class="form-group col-md-2">
                               <label for="id">ID</label>
                               <input type="number" class="form-control" id="id" readonly>
                           </div>
                           <div class="form-group col-md-5">
                               <label for="user_id">User</label>
                               <select id="user_id" class="form-control" required>
                                   <option>Choose...</option>
                                   @foreach ($users as $user)
                                   <option value="{{$user->id}}"> {{ $user->name }}</option>
                                   @endforeach

                               </select>
                           </div>

                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-6">
                               <label for="flight_id">Flight </label>
                               <select id="flight_id" class="form-control" required>
                                   <option>Choose...</option>
                                   @foreach ($flights as $flight)
                                   <option value="{{$flight->id}}"> {{ $flight->airlines->name }}</option>
                                   @endforeach

                               </select>
                           </div>
                           <div class="form-group col-md-3">
                               <label for="adults_count">Adults Count</label>
                               <input type="number" class="form-control" id="adults_count" required>
                           </div>
                           <div class="form-group col-md-3">
                               <label for="kids_count">Kids Count</label>
                               <input type="number" class="form-control" id="kids_count" required>
                           </div>
                       </div>
                       <div class="form-row">

                           <div class="form-group col-md-6">
                               <label for="passenger_name">Name</label>
                               <input type="text" class="form-control" id="passenger_name" required>
                           </div>
                           <div class="form-group col-md-6">
                               <label for="passenger_email">Email</label>
                               <input type="email" class="form-control" id="passenger_email" required>
                           </div>
                           <div class="form-group col-md-6">
                               <label for="passenger_address">Address</label>
                               <input type="text" class="form-control" id="passenger_address" required>
                           </div>
                           <div class="form-group col-md-6">
                               <label for="passenger_phone">Phone(+977)</label>
                               <input type="text" class="form-control" id="passenger_phone" required>
                           </div>
                       </div>
                       <div class="form-row">

                           <div class="form-group col-md-6">
                               <label for="total_cost">Total Cost</label>
                               <input type="number" class="form-control" id="total_cost" required>
                           </div>

                           <div class="form-group col-md-6">
                               <label for="ticket_type">Ticket Type</label>
                               <select id="ticket_type" class="form-control" required>
                                   <option>Choose...</option>
                                   <option value="economy">Economy</option>
                                   <option value="business">Business</option>
                               </select>
                           </div>
                       </div>


                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox" id="status" required>
                                   <label class="form-check-label" for="status">
                                       Is Ticket OK ?
                                   </label>
                               </div>
                           </div>
                           <div class="form-group col-md-8">
                               <label for="remarks">Remarks</label>
                               <input type="text" class="form-control" id="remarks" required>
                           </div>
                       </div>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-primary ok-button" data-dismiss="modal" onclick='saveData(this)'>OK</button>
                   <button type="button" class="btn btn-secondary cancel-button" data-dismiss="modal">Cancel</button>

               </div>
               </form>
           </div>
       </div>
   </div>

   @push('scripts')
   <script>
       let elements = ["#id", "#user_id", "#flight_id", "#adults_count", "#kids_count", "#passenger_name", "#passenger_email", "#passenger_address", "#passenger_phone", "#total_cost", "#ticket_type", "#status", "#remarks"];
       loadModal(elements);

       function saveData(event) {
           let data = {
               user_id: $("#user_id").val(),
               flight_id: $("#flight_id").val(),
               adults_count: $('#adults_count').val(),
               kids_count: $('#kids_count').val(),
               passenger_name: $('#passenger_name').val(),
               passenger_email: $('#passenger_email').val(),
               passenger_address: $('#passenger_address').val(),
               passenger_phone: $('#passenger_phone').val(),
               total_cost: $('#total_cost').val(),
               ticket_type: $('#ticket_type').val(),
               status: $("#status").prop('checked'),
               remarks: $("#remarks").val()
           }
           saveElement(event, data, "tickets");

       }

       function fillElement(id) {
           axios.get(API_URL + 'tickets/' + id).then(response => {
               let ticket = response.data;
               $('#id').val(ticket.id)
               $('#user_id').val(ticket.user_id).trigger('change')
               $('#flight_id').val(ticket.flight_id).trigger('change')
               $('#adults_count').val(ticket.adults_count)
               $('#kids_count').val(ticket.kids_count)
               $('#passenger_name').val(ticket.passenger_name)
               $('#passenger_email').val(ticket.passenger_email)
               $('#passenger_address').val(ticket.passenger_address)
               $('#passenger_phone').val(ticket.passenger_phone)
               $('#total_cost').val(ticket.total_cost)
               $('#ticket_type').val(ticket.ticket_type).trigger('change')
               $('#status').prop('checked', ticket.status);
               $('#remarks').val(ticket.remarks);

           }).catch(err => {
               Swal.fire({
                   title: "Error on loading..",
                   icon: "error"
               });
           })
       }
   </script>


   @endpush