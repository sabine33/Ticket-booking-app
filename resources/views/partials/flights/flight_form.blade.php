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
                               <label for="airlines_id">Airlines Name</label>
                               <select id="airlines_id" class="form-control" required>
                                   <option>Choose...</option>
                                   @foreach ($airlines as $airline)
                                   <option value="{{$airline->id}}"> {{ $airline->name }}</option>
                                   @endforeach
                               </select>
                           </div>
                           <div class="form-group col-md-5">
                               <label for="departure_date">Departure Date</label>
                               <input type="date" class="form-control" id="departure_date" placeholder="2021-12-12" required>
                           </div>

                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="departure_time">Dep Time</label>
                               <input type="time" class="form-control" id="departure_time" placeholder="" required>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="departure_type">Dep Type</label>
                               <select id="departure_type" class="form-control" required>
                                   <option>Choose...</option>
                                   <option value="one_way" selected> One Way</option>
                                   <option value="two_way"> Two Way</option>
                               </select>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="ticket_type">Ticket Class</label>
                               <select id="ticket_type" class="form-control" required>
                                   <option>Choose...</option>
                                   <option value="economy" selected>Economy</option>
                                   <option value="business">Business</option>
                               </select>
                           </div>




                       </div>

                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="max_ticket_count">#of Tickets</label>
                               <input type="number" class="form-control" id="max_ticket_count" required>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="from_location_id">From Location</label>
                               <select id="from_location_id" class="form-control" required>
                                   <option>Choose...</option>
                                   @foreach ($locations as $location)
                                   <option value="{{$location->id}}"> {{ $location->name }}</option>
                                   @endforeach

                               </select>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="to_location_id">To Location</label>
                               <select id="to_location_id" class="form-control" required>
                                   <option>Choose...</option>
                                   @foreach ($locations as $location)
                                   <option value="{{$location->id}}"> {{ $location->name }}</option>
                                   @endforeach
                               </select>
                           </div>

                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="flight_duration">Duration(Hours)</label>
                               <input type="number" class="form-control" id="flight_duration" value="2" required>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="flight_price_economy">Economy Price</label>
                               <input type="number" class="form-control" id="flight_price_economy" required>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="flight_price_business">Business Price</label>
                               <input type="number" class="form-control" id="flight_price_business" required>
                           </div>

                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="flight_price_both_way_ratio">2Way Ratio</label>
                               <input type="text" class="form-control" id="flight_price_both_way_ratio" required>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="max_luggage_size">Max Luggage Size</label>
                               <input type="number" class="form-control" id="max_luggage_size" required>
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
       let elements = ["#id", "#departure_date", "#departure_time", "#departure_type", "#ticket_type", "#max_ticket_count", "#from_location_id", "#to_location_id", "#airlines_id", "#status", "#flight_price_economy", "#flight_price_business", "#flight_price_both_way_ratio", "#flight_duration", "#max_luggage_size"];
       $('#editModal').on('shown.bs.modal', function(event) {
           var button = $(event.relatedTarget)
           var id = button.data('id')
           var type = button.data('type')

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

           let data = {
               departure_date: $("#departure_date").val(),
               departure_time: $("#departure_time").val(),
               departure_type: $("#departure_type").val(),
               max_ticket_count: $("#max_ticket_count").val(),
               from_location_id: $("#from_location_id").val(),
               to_location_id: $("#to_location_id").val(),
               airlines_id: $("#airlines_id").val(),
               status: $("#status").val(),
               flight_price_economy: $("#flight_price_economy").val(),
               flight_price_business: $("#flight_price_business").val(),
               flight_price_both_way_ratio: $("#flight_price_both_way_ratio").val(),
               flight_duration: $("#flight_duration").val(),
               max_luggage_size: $("#max_luggage_size").val(),
           }
           alert(JSON.stringify(data));
           if (type == 'create') {
               axios.post(API_URL + 'flights/', data).then((response) => {
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
               axios.put(API_URL + 'flights/' + id, data).then((response) => {
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

           axios.get(API_URL + 'flights/' + id).then(response => {
               let flight = response.data;
               $('#id').val(flight.id)
               $('#departure_date').val(flight.departure_date)
               $('#departure_time').val(flight.departure_time)
               $('#departure_type').val(flight.departure_type).trigger('change')
               $('#from_location_id').val(flight.from_location_id).trigger('change')
               $('#to_location_id').val(flight.to_location_id).trigger('change')
               $('#airlines_id').val(flight.airlines_id).trigger('change')
               $('#status').prop('checked', flight.status)
               $('#flight_price_economy').val(flight.flight_price_economy)

               $('#flight_price_business').val(flight.flight_price_business)
               $('#flight_price_both_way_ratio').val(flight.flight_price_both_way_ratio)
               $('#flight_duration').val(flight.flight_duration)
               $('#max_luggage_size').val(flight.max_luggage_size)

           }).catch(err => {
               Swal.fire({
                   title: "Error on loading..",
                   icon: "error"
               });
           })
       }
   </script>


   @endpush