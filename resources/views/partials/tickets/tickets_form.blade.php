   <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-body">
                   <form>
                       <div class="form-row">
                           <div class="form-group col-md-2">
                               <label for="id">ID</label>
                               <input type="number" class="form-control" id="id" readonly>
                           </div>
                           <div class="form-group col-md-5">
                               <label for="username">User</label>
                               <select id="username" class="form-control">
                                   <option>Choose...</option>
                                   @foreach ($users as $user)
                                   <option value="{{$user->id}}"> {{ $user->name }}</option>
                                   @endforeach

                               </select>
                           </div>

                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-6">
                               <label for="flightName">Flight </label>
                               <select id="flightName" class="form-control">
                                   <option>Choose...</option>
                                   @foreach ($flights as $flight)
                                   <option value="{{$flight->id}}"> {{ $flight->airlines->name }}</option>
                                   @endforeach

                               </select>
                           </div>
                           <div class="form-group col-md-6">
                               <label for="ticketCount">Ticket Count</label>
                               <input type="number" class="form-control" id="ticketCount">
                           </div>
                       </div>


                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox" id="status">
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
       $('#flightModal').on('shown.bs.modal', function(event) {
           var button = $(event.relatedTarget) // Button that triggered the modal
           var id = button.data('id') // Extract info from data-* attributes
           var type = button.data('type')




           let elements = ["#id", "#username", "#flightName", "#ticketCount", "#status"];
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
       //    protected $fillable = ['name', 'airlines_id', 'date', 'from_location_id', 'to_location_id', 'departure_time', 'flight_duration', 'flight_price', 'ticket_count', 'status'];

       function saveElement(event) {
           let type = event.dataset.type;
           let id = event.dataset.id;

           let data = {
               user_id: $("#username").val(),
               flight_id: $("#flightName").val(),
               ticket_count: $('#ticketCount').val(),
               status: $("#status").val() == 'on' ? true : false
           }
           alert(JSON.stringify(data));
           if (type == 'create') {
               axios.post('http://127.0.0.1:8000/api/tickets/', data).then((response) => {
                   alert(JSON.stringify(response.data))
               }).catch(err => {
                   alert(JSON.stringify(err))
               });
           } else if (type == 'edit') {
               axios.put('http://127.0.0.1:8000/api/tickets/' + id, data).then((response) => {
                   alert(JSON.stringify(response.data))
               }).catch(err => {
                   alert(JSON.stringify(err))
               });
           } else {

           }
       }

       function fillElement(id) {
           axios.get('http://127.0.0.1:8000/api/tickets/' + id).then(response => {
               //name,airlines_name,date,from_location,to_location,departure_time,flight_duration,ticket_count,flight_price,status
               let ticket = response.data;
               $('#id').val(ticket.id)
               $('#username').val(ticket.user_id).trigger('change')
               $('#flightName').val(ticket.flight_id).trigger('change')
               $('#ticketCount').val(ticket.ticket_count)
               $('#status').val(flight.status)

           }).catch(err => {
               alert(err)
           })
       }
   </script>


   @endpush