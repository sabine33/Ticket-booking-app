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
                               <input type="date" class="form-control" id="departure_date" placeholder="2021-12-12" value="{{date('Y-m-d')}}" required>
                           </div>

                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="departure_time">Dep Time</label>
                               <input type="time" class="form-control" id="departure_time" placeholder="" required value="12:00">
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
                               <label for="max_luggage_size">Lug. Size</label>
                               <input type="number" class="form-control" id="max_luggage_size" required>
                           </div>
                           <div class="form-group col-md-4">
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox" id="status">
                                   <label class="form-check-label" for="status">
                                       Is OK ?
                                   </label>
                               </div>
                           </div>
                           <div class="form-group col-md-4">
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox" id="is_international">
                                   <label class="form-check-label" for="is_international">
                                       Is International?
                                   </label>
                               </div>
                           </div>
                       </div>
                   </form>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-primary ok-button" data-dismiss="modal" onclick='saveData(this)'>OK</button>
                   <button type="button" class="btn btn-secondary cancel-button" data-dismiss="modal">Cancel</button>

               </div>

           </div>
       </div>
   </div>

   @push('scripts')
   <script>
       let elements = ["#departure_date", "#departure_time", "#departure_type", "#ticket_type", "#max_ticket_count", "#from_location_id", "#to_location_id", "#airlines_id", "#status", "#flight_price_economy", "#flight_price_business", "#flight_duration", "#max_luggage_size", "#is_international"];



       loadModal(elements);

       function saveData(event) {
           let data = {
               departure_date: $("#departure_date").val(),
               departure_time: $("#departure_time").val(),
               departure_type: $("#departure_type").val(),
               max_ticket_count: $("#max_ticket_count").val(),
               from_location_id: $("#from_location_id").val(),
               to_location_id: $("#to_location_id").val(),
               airlines_id: $("#airlines_id").val(),
               status: $("#status").prop('checked'),
               flight_price_economy: $("#flight_price_economy").val(),
               flight_price_business: $("#flight_price_business").val(),
               flight_duration: $("#flight_duration").val(),
               max_luggage_size: $("#max_luggage_size").val(),
               is_international: $("#is_international").prop('checked')
           }
           console.log(JSON.stringify(data))
           saveElement(event, data, "flights");
       }



       function fillElement(id) {

           axios.get(API_URL + 'flights/' + id).then(response => {
               let flight = response.data;
               $('#id').val(flight.id)
               $('#departure_date').val(flight.departure_date)
               $('#departure_time').val(flight.departure_time.slice(0, flight.departure_time.lastIndexOf(":")))
               $('#from_location_id').val(flight.from_location_id).trigger('change')
               $('#to_location_id').val(flight.to_location_id).trigger('change')
               $('#max_ticket_count').val(flight.max_ticket_count)
               $('#airlines_id').val(flight.airlines_id).trigger('change')
               $('#flight_price_economy').val(flight.flight_price_economy)
               $('#flight_price_business').val(flight.flight_price_business)
               $('#flight_duration').val(flight.flight_duration)
               $('#max_luggage_size').val(flight.max_luggage_size)
               $('#is_international').prop('checked', flight.is_international);
               $('#status').prop('checked', flight.status)

           }).catch(err => {
               Swal.fire({
                   title: "Error on loading..",
                   icon: "error"
               });
           })
       }
   </script>


   @endpush