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
                   <button type="button" class="btn btn-primary ok-button" data-dismiss="modal" onclick='saveElement(this)'>OK</button>
                   <button type="button" class="btn btn-secondary cancel-button" data-dismiss="modal">Cancel</button>

               </div>
               </form>
           </div>
       </div>
   </div>

   @push('scripts')
   <script>
       let elements = ["#id", "#name", "#email", "#password"];

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
               name: $("#name").val(),
               email: $("#email").val(),
               password: $("#password").val()
           }
           if (type == 'create') {
               elements.forEach(elem => {
                   $(elem).val('');
               })
               axios.post(API_URL + 'users/', data).then((response) => {
                   //    alert(JSON.stringify(response.data))

                   Swal.fire({
                       title: 'Success...',
                       text: 'User is created successfully. Please reload this page .!',
                       icon: "success"
                   })
               }).catch(err => {
                   Swal.fire({
                       icon: 'error',
                       title: 'Oops...',
                       text: 'Unable to create user!',
                   })
                   console.log(err)
               });
           } else if (type == 'edit') {
               axios.put(API_URL + 'users/' + id, data).then((response) => {
                   Swal.fire({
                       title: 'Success...',
                       text: 'User is created successfully. Please reload this page .!',
                       icon: "success"
                   })
               }).catch(err => {
                   Swal.fire({
                       icon: 'error',
                       title: 'Oops...',
                       text: 'Unable to create user!',
                   })
                   console.log(err)
               });
           } else {

           }
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