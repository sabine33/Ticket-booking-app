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

                           <div class="form-group col-md-10">
                               <label for="name">Airlines Name</label>
                               <input type="text" class="form-control" id="name" required>
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
       let elements = ["#id", "#name"];
       loadModal(elements);

       function saveData(event) {
           let data = {
               name: $("#name").val(),
           };
           saveElement(event, data, "airlines");
       }

       function fillElement(id) {
           axios.get(API_URL + 'airlines/' + id).then(response => {
               let airlines = response.data;
               $('#id').val(airlines.id)
               $('#name').val(airlines.name)
           }).catch(err => {
               Swal.fire({
                   title: "Error on loading..",
                   icon: "error"
               });
           })
       }
   </script>


   @endpush