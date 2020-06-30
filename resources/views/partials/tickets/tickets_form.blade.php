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
                           <div class="form-group col-md-5">
                               <label for="departure_type">Departure Type</label>
                               <select id="departure_type" class="form-control" required>
                                   <option>Choose...</option>
                                   <option value="one_way">One Way</option>
                                   <option value="two_way">Two Way</option>
                               </select>
                           </div>
                           <div class="form-group col-md-5">
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
                       </div>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-primary ok-button" data-dismiss="modal" onclick='saveElement(this)'>OK</button>
                   <button type="button" class="btn btn-secondary cancel-button" data-dismiss="modal">Cancel</button>

               </div>
               </form>
           </div>
       </div>
   </div>

   @push('scripts')
   <script>
       $('#editModal').on('shown.bs.modal', function(event) {
           var button = $(event.relatedTarget) // Button that triggered the modal
           var id = button.data('id') // Extract info from data-* attributes
           var type = button.data('type')

           let elements = ["#id", "#user_id", "#flight_id", "#adults_count", "#kids_count", "#passenger_name", "#passenger_email", "#passenger_address", "#passenger_phone", "#total_cost", "#departure_type", "#ticket_type", "#status"];
           elements.forEach(elem => {
               $(elem).attr('disabled', type == 'view')
           })

           switch (type) {
               case "view":
                   fillElement(id);
                   break;
               case "create":
                   break;
               case "edit":
                   fillElement(id)
                   break;
           }


           var modal = $(this);
           //    modal.find('.modal-title').text("Are you sure want to delete ?")
           //    modal.find('.modal-body').text(`Deleting will remove ${id} from database.`)
           modal.find('.ok-button').attr("data-id", id);
           modal.find('.ok-button').attr('data-type', type);

       })

       function saveElement(event) {

           if (!document.getElementById("form").checkValidity()) {
               Swal.fire({
                   icon: 'error',
                   title: 'Oops...',
                   text: 'Please fill form carefully!',
               })
               return false;
           }

           let type = event.dataset.type;
           let id = event.dataset.id;

           //    let elements = ["#id", "#user_id", "#flight_id", "#adults_count", "#kids_count", "#passenger_name", "#passenger_email", "#passenger_address", "#passenger_phone", "#total_cost", "#departure_type", "#ticket_type", "#status"];

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
               departure_type: $('#departure_type').val(),
               ticket_type: $('#ticket_type').val(),
               status: $("#status").val() == 'on' ? true : false
           }
           if (type == 'create') {
               axios.post(API_URL + 'tickets/', data).then((response) => {
                   Swal.fire({
                       title: "Successfully saved",
                       icon: "success"
                   });
               }).catch(err => {
                   Swal.fire({
                       title: "Error on saving..",
                       icon: "error"
                   });
               });
           } else if (type == 'edit') {
               axios.put(API_URL + 'tickets/' + id, data).then((response) => {
                   Swal.fire({
                       title: "Successfully saved",
                       icon: "success"
                   });
               }).catch(err => {
                   Swal.fire({
                       title: "Error on saving..",
                       icon: "error"
                   });
               });
           } else {

           }
       }

       function fillElement(id) {
           //    let elements = ["#id", "#user_id", "#flight_id", "#adults_count", "#kids_count", "#passenger_name", "#passenger_email", "#passenger_address", "#passenger_phone", "#total_cost", "#departure_type", "#ticket_type", "#status"];
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
               $('#departure_type').val(ticket.departure_type).trigger('change')
               $('#ticket_type').val(ticket.ticket_type).trigger('change')
               $('#status').prop('checked', ticket.status);

           }).catch(err => {
               Swal.fire({
                   title: "Error on loading..",
                   icon: "error"
               });
           })
       }
   </script>


   @endpush