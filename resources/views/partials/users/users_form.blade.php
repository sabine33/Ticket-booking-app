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
                               <label for="name">Name</label>
                               <input type="text" class="form-control" id="name" required>
                           </div>
                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-6">
                               <label for="email">Email</label>
                               <input type="email" class="form-control" id="email" required>
                           </div>

                           <div class="form-group col-md-6">
                               <label for="password">Password</label>
                               <input type="password" class="form-control" id="password" required>
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
       let elements = ["#id", "#name", "#email", "#password"];

       loadModal(elements);

       function saveData(event) {
           let data = {
               name: $("#name").val(),
               email: $("#email").val(),
               password: $("#password").val(),

           };
           saveElement(event, data, "users");
       }

       function fillElement(id) {
           axios.get(API_URL + 'users/' + id).then(response => {
               let user = response.data;
               $('#id').val(user.id)
               $('#name').val(user.name)
               $('#email').val(user.email)
               $('#password').val(user.password)

           }).catch(err => {
               alert(err)
           })
       }
   </script>


   @endpush