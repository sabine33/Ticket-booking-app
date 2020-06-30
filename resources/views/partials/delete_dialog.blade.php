<!-- Logout Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a class="btn btn-primary ok-button" href="javascript:void(0);" onclick="deleteFlight(this)" data-dismiss="modal">OK</a>
            </div>
        </div>
    </div>
</div>


@push('scripts')
<script>
    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id') // Extract info from data-* attributes
        var modal = $(this)
        modal.find('.modal-title').text("Are you sure want to delete ?")
        modal.find('.modal-body').text(`Deleting will remove ${id} from database.`)
        modal.find('.ok-button').attr("data-id", id);

    })
    $('#deleteModal').on('hide.bs.modal', function(e) {

    })

    function deleteFlight(e) {
        let id = e.dataset.id;
        axios.delete('http://127.0.0.1:8000/api/flights/' + id).then(response => {
            alert(JSON.stringify(response.data))
            $('#deleteModal').modal('hide');
        }).catch(err => {
            alert(err)
        })
    };
</script>
@endpush