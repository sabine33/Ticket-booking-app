function loadModal(elements) {
    $("#editModal").on("shown.bs.modal", function (event) {
        var button = $(event.relatedTarget);
        var id = button.data("id");
        var type = button.data("type");

        elements.forEach((elem) => {
            $(elem).attr("disabled", type == "view");
        });
        switch (type) {
            case "view":
                fillElement(id);
                break;
            case "create":
                break;
            case "edit":
                fillElement(id);
                break;
        }
        var modal = $(this);
        modal.find(".ok-button").attr("data-id", id);
        modal.find(".ok-button").attr("data-type", type);
    });
}

function saveElement(event, data, modelName) {
    if (!document.getElementById("form").checkValidity()) {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Please fill form carefully!",
        });
        return false;
    }

    let type = event.dataset.type;
    let id = event.dataset.id;

    let post_url = `${API_URL}${modelName}/`;
    let put_url = `${API_URL}${modelName}/${id}`;

    if (type == "create") {
        axios
            .post(post_url, data)
            .then((response) => {
                Swal.fire({
                    title: "Successfully saved",
                    icon: "success",
                }).then(() => {
                    location.reload();
                });
            })
            .catch((err) => {
                Swal.fire({
                    title: "Error on saving..",
                    icon: "error",
                    text: err.message,
                }).then(() => {});
            });
    } else if (type == "edit") {
        axios
            .put(put_url, data)
            .then((response) => {
                Swal.fire({
                    title: "Successfully saved",
                    icon: "success",
                }).then(() => {
                    location.reload();
                });
            })
            .catch((err) => {
                Swal.fire({
                    title: "Error on saving..",
                    icon: "error",
                    text: err.message,
                });
                console.log(err);
            });
    } else {
    }
}
