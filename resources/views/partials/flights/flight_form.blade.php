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
                               <label for="airlinesName">Airlines Name</label>
                               <select id="airlinesName" class="form-control">
                                   <option>Choose...</option>
                                   @foreach ($airlines as $airline)
                                   <option value="{{$airline->id}}"> {{ $airline->name }}</option>
                                   @endforeach

                               </select>
                           </div>
                           <div class="form-group col-md-5">
                               <label for="flightDate">Flight Date</label>
                               <input type="date" class="form-control" id="flightDate" placeholder="2021-12-12">
                           </div>
                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-6">
                               <label for="fromLocation">From Location</label>
                               <select id="fromLocation" class="form-control">
                                   <option>Choose...</option>
                                   @foreach ($locations as $location)
                                   <option value="{{$location->id}}"> {{ $location->name }}</option>
                                   @endforeach

                               </select>
                           </div>
                           <div class="form-group col-md-6">
                               <label for="toLocation">To Location</label>
                               <select id="toLocation" class="form-control">
                                   <option>Choose...</option>
                                   @foreach ($locations as $location)
                                   <option value="{{$location->id}}"> {{ $location->name }}</option>
                                   @endforeach
                               </select>
                           </div>
                       </div>

                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="departureTime">Departure Time</label>
                               <input type="time" class="form-control" id="departureTime" placeholder="12:20" value="12:00">
                           </div>
                           <div class="form-group col-md-4">
                               <label for="flightDuration">Duration(Hours)</label>
                               <input type="number" class="form-control" id="flightDuration" value="2">
                           </div>
                           <div class="form-group col-md-4">
                               <label for="ticketCount">#s</label>
                               <input type="number" class="form-control" id="ticketCount">
                           </div>
                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="flightPrice">Flight Price</label>
                               <input type="number" class="form-control" id="flightPrice">
                           </div>
                           <div class="form-group col-md-4">
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox" id="status">
                                   <label class="form-check-label" for="status">
                                       Is Flight OK ?
                                   </label>
                               </div>
                           </div>
                       </div>
                   </form>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-primary ok-button" data-dismiss="modal" onclick='saveElement(this)'>OK</button>
                   <button type="button" class="btn btn-secondary cancel-button" data-dismiss="modal">Cancel</button>

               </div>

           </div>
       </div>
   </div>

   @push('scripts')
   <script>
       $('#flightModal').on('shown.bs.modal', function(event) {
           var button = $(event.relatedTarget) // Button that triggered the modal
           var id = button.data('id') // Extract info from data-* attributes
           var type = button.data('type')




           let elements = ["#id", "#airlinesName", "#flightDate", "#fromLocation", "#toLocation", "#departureTime", "#flightDuration", "#ticketCount", "#flightPrice", "#status"];
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
               airlines_id: $("#airlinesName").val(),
               date: $("#flightDate").val(),
               from_location_id: $('#fromLocation').val(),
               to_location_id: $('#toLocation').val(),
               departure_time: $("#departureTime").val(),
               flight_duration: $("#flightDuration").val(),
               flight_price: $("#flightPrice").val(),
               ticket_count: $("#ticketCount").val(),
               status: $("#status").val() == 'on' ? true : false
           }
           alert(JSON.stringify(data));
           if (type == 'create') {
               axios.post('http://127.0.0.1:8000/api/flights/', data).then((response) => {
                   alert(JSON.stringify(response.data))
               }).catch(err => {
                   alert(JSON.stringify(err))
               });
           } else if (type == 'edit') {
               axios.put('http://127.0.0.1:8000/api/flights/' + id, data).then((response) => {
                   alert(JSON.stringify(response.data))
               }).catch(err => {
                   alert(JSON.stringify(err))
               });
           } else {

           }
       }

       function fillElement(id) {
           axios.get('http://127.0.0.1:8000/api/flights/' + id).then(response => {
               //name,airlines_name,date,from_location,to_location,departure_time,flight_duration,ticket_count,flight_price,status
               let flight = response.data;
               $('#id').val(flight.id)
               $('#airlinesName').val(flight.airlines.id).trigger('change')
               $('#flightDate').val(flight.date)
               $('#fromLocation').val(flight.from_location.id).trigger('change')
               $('#toLocation').val(flight.to_location.id).trigger('change')
               $('#departureTime').val(flight.departure_time)
               $('#flightDuration').val(flight.flight_duration)
               $('#ticketCount').val(flight.ticket_count)
               $('#flightPrice').val(flight.flight_price)
               $('#status').val(flight.status)

           }).catch(err => {
               alert(err)
           })
       }
   </script>


   @endpush