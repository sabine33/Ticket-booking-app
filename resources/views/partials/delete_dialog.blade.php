@section('dialog')
<!-- Logout Modal -->
<div class="modal" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure want to delete?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Deleting will remove from database.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary ok-button" href="javascript:void(0);" onclick="deleteItem(this)" data-dismiss="modal">OK</a>
            </div>
        </div>
    </div>
</div>

@endsection


@push('scripts')
<script>
    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        let model = button.data('model');
        var modal = $(this)
        modal.find('.modal-title').text("Are you sure want to delete ?")
        modal.find('.modal-body').text(`Deleting will remove ${id} from database.`)
        modal.find('.ok-button').attr("data-id", id);
        modal.find('.ok-button').attr("data-model", model);


    })
    $('#deleteModal').on('hide.bs.modal', function(e) {

    })

    function deleteItem(e) {
        let id = e.dataset.id;
        let model = e.dataset.model;
        axios.delete(API_URL + model + "/" + id).then(response => {
            Swal.fire({
                title: "Successfully deleted",
                icon: "success"
            })
            $('#deleteModal').modal('hide');
        }).catch(err => {
            Swal.fire({
                title: "Error on deleting...",
                icon: "error"
            })
        })
    };
</script>
@endpush