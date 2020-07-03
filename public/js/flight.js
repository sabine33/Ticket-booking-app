var _flight = {};

$(document).ready(() => {
    if (!window.location.href.split("/").pop()) {
        $("#from_location_id").val(2).trigger("change");
        $("#to_location_id").val(3).trigger("change");
    } else {
    }
    $("#from_location_id").on("change", function (e) {
        filterFlights();
    });
    $("#to_location_id").on("change", function (e) {
        filterFlights();
    });

    $("#flight_id").on("change", function (e) {
        fetchFlightDetails(e.target.value);
    });
    $("#flight_id").on("click", function (e) {
        fetchFlightDetails(e.target.value);
    });

    $("#ticket_type").on("change", function (e) {
        calculateCostForDisplay();
    });
    $("#kids_count").on("change", function (e) {
        calculateCostForDisplay();
    });
    $("#adults_count").on("change", function (e) {
        calculateCostForDisplay();
    });
    $("#ticket_id").on("change", function (e) {
        calculateCostForDisplay();
    });
});

function validateForm() {
    if (!document.getElementById("form").checkValidity()) {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Please fill form carefully!",
        });
        return false;
    }
    return true;
}

function getData() {
    let data = {
        user_id: 1,
        flight_id: $("#flight_id").val(),
        adults_count: $("#adults_count").val(),
        kids_count: $("#kids_count").val(),
        passenger_name: $("#passenger_name").val(),
        passenger_email: $("#passenger_email").val(),
        passenger_address: $("#passenger_address").val(),
        passenger_phone: $("#passenger_phone").val(),
        total_cost: calculateTotal() || 0,
        ticket_type: $("#ticket_type").val(),
        status: true,
        remarks: $("#remarks").val() ? $("#remarks").val().addSlashes() : "-",
    };
    return data;
}

function disableBooking() {
    $("#btnBookTicket").text("Booking...");
    $("#btnBookTicket").prop("disabled", true);
}
function enableBooking() {
    $("#btnBookTicket").text("Book Now");
    $("#btnBookTicket").prop("disabled", false);
}
if (!String.prototype.hasOwnProperty("addSlashes")) {
    String.prototype.addSlashes = function () {
        return this.replace(
            /&/g,
            "&amp;"
        ) /* This MUST be the 1st replacement. */
            .replace(
                /'/g,
                "&apos;"
            ) /* The 4 other predefined entities, required. */
            .replace(/"/g, "&quot;")
            .replace(/\\/g, "\\\\")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/\u0000/g, "\\0");
    };
}
function onBookTicket() {
    if (!validateForm()) return;
    let data = getData();
    let POST_URL = `${API_URL}tickets`;
    console.log(JSON.stringify(data));
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, submit it!",
    }).then((result) => {
        if (result.value) {
            disableBooking();
            axios
                .post(POST_URL, data)
                .then((response) => {
                    if (!response.data.status) {
                        Swal.fire({
                            customClass: "swal-size-sm",
                            title: "Error occured while saving ticket",
                            icon: "warning",
                            text: response.data.message,
                        });
                        return;
                    }
                    Swal.fire({
                        title: "Success",
                        text: `TICKET BOOKED SUCCESSFULLY!Your Ticket is mailed to your email!\nYour ticket is is ${response.data.id} and token is ${response.data.token}`,
                        icon: "success",
                    }).then(() => {
                        setTimeout(() => {
                            if (document.location.href.search("/admin/") < 0) {
                                // document.location.href = "/";
                            } else {
                                // location.reload();
                            }
                        }, 2000);
                    });
                })
                .catch((err) => {
                    Swal.fire({
                        customClass: "swal-size-sm",
                        title: "Error occured while saving ticket",
                        icon: "warning",
                        text: err.message,
                    });
                    console.log(err);
                    enableBooking();
                });
        } else {
        }
    });
}

var filtered_flights = [];

function calculateCostForDisplay() {
    if (_flight) {
        let total_cost = calculateTotal();
        $("#total_cost").val(total_cost);
        $("#total_cost_text").val(numbered.stringify(total_cost)) + " only.";
    }
}

function filterFlights() {
    let from_id = $("#from_location_id").val();
    let to_id = $("#to_location_id").val();

    let url = `${API_URL}filter_flight/${from_id}/${to_id}`;

    console.log(url);
    axios
        .get(url)
        .then((response) => {
            let result = Object.entries(response.data);
            console.log(result);

            $("#flight_id").empty();
            if (!result) {
                Swal.fire({ title: "No flights found" });
                return;
            } else {
                result.forEach(([key, flight]) => {
                    $("#flight_id").append(
                        `<option value='${flight.id}'>${flight.flight_name}</option>`
                    );
                    if (Object.keys(result).indexOf(key) == 0) {
                        $("#flight_id").val(flight.id).trigger("change");
                    }
                });
            }
        })
        .catch((err) => {
            alert(JSON.stringify(err.message));
        });
}

function calculateTotal() {
    let flight_cost = 0;
    try {
        let adults_count = Number.parseInt($("#adults_count").val()) || 0;
        let kids_count = Number.parseInt($("#kids_count").val()) || 0;
        let ticket_type = $("#ticket_type").val();

        let total_passengers = adults_count + kids_count;
        flight_cost =
            total_passengers *
            (ticket_type === "economy"
                ? _flight.flight_price_economy
                : _flight.flight_price_business);
        return flight_cost;
    } catch (ex) {
        Swal.fire({
            title: "Error on calculation..",
            text: ex.message,
            icon: "error",
        });
        return 0;
    }
}

function fetchFlightDetails(flight_id) {
    let _url = `${API_URL}get_flight/${flight_id}`;
    axios
        .get(_url)
        .then((response) => {
            let flight = response.data;
            Object.assign(_flight, flight);
            $("#departure_date").val(_flight.departure_date);
            $("#departure_time").val(_flight.departure_time);
            $("#flight_duration").val(_flight.flight_duration);
            $("#available_tickets").val(_flight.available_tickets);

            calculateCostForDisplay();
        })
        .catch((err) => {
            Swal.fire({
                title: "Error on loading..",
                text: err.message,
                icon: "error",
            });
        });
}
