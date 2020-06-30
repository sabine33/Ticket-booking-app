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

                           <div class="form-group col-md-10">
                               <label for="locationName">Location Name</label>
                               <input type="text" class="form-control" id="locationName">
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
           var button = $(event.relatedTarget)
           var id = button.data('id')
           var type = button.data('type')
           let elements = ["#id", "#locationName"];
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
           let type = event.dataset.type;
           let id = event.dataset.id;

           let data = {
               name: $("#locationName").val()
           }
           alert(JSON.stringify(data));
           if (type == 'create') {
               axios.post('http://127.0.0.1:8000/api/locations/', data).then((response) => {
                   alert(JSON.stringify(response.data))
               }).catch(err => {
                   alert(JSON.stringify(err))
               });
           } else if (type == 'edit') {
               axios.put('http://127.0.0.1:8000/api/locations/' + id, data).then((response) => {
                   alert(JSON.stringify(response.data))
               }).catch(err => {
                   alert(JSON.stringify(err))
               });
           } else {

           }
       }

       function fillElement(id) {
           axios.get('http://127.0.0.1:8000/api/locations/' + id).then(response => {
               let location = response.data;
               $('#id').val(location.id)
               $('#locationName').val(location.name)
           }).catch(err => {
               alert(err)
           })
       }
   </script>


   @endpush