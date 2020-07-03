<!DOCTYPE html>
<html>

<head>
    <style>
        #ticket {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #ticket td,
        #ticket th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #ticket tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #ticket tr:hover {
            background-color: #ddd;
        }

        #ticket th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>

    <p>Please find all your flights details in the following document and download the attached ticket.</p>
    <p>Please use the url <a href="{{url('/')}}/ticket_print/{{$ticket->id}}/{{$ticket->token}}">Print Ticket</a> for printing the ticket.</p>

    <table id="ticket">
        <tr>
            <th>Title</th>
            <th>Info</th>
        </tr>
        <tr>
            <td>Ticket No.</td>
            <td>{{$ticket->id}}</td>
        </tr>
        <tr>
            <td>Passenger Name</td>
            <td>{{$ticket->passenger_name}}</td>
        </tr>

        <tr>
            <td>Passenger Address</td>
            <td>{{$ticket->passenger_address}}</td>
        </tr>
        <tr>
            <td>Passenger Phone</td>
            <td>{{$ticket->passenger_phone}}</td>
        </tr>
        <tr>
            <td>Passenger Email</td>
            <td>{{$ticket->passenger_email}}</td>
        </tr>
        <tr>
            <td>Passenger Name</td>
            <td>{{$ticket->passenger_name}}</td>
        </tr>
        <tr>
            <td>Flight Name</td>
            <td>{{$ticket->flight_name}}</td>
        </tr>
        <tr>
            <td>Adults Count</td>
            <td>{{$ticket->adults_count}}</td>
        </tr>
        <tr>
            <td>Kids Count</td>
            <td>{{$ticket->kids_count}}</td>
        </tr>
        <tr>
            <td>Total Cost</td>
            <td>{{$ticket->total_cost}}</td>
        </tr>
        <tr>
            <td>Ticket Type</td>
            <td>{{$ticket->ticket_type}}</td>
        </tr>
        <tr>
            <td>Cancellation Token</td>
            <td>{{$ticket->token}}</td>
        </tr>
        <tr>
            <td>Flight Date</td>
            <td>{{$ticket->flight->departure_date}}</td>
        </tr>
        <tr>
            <td>Departure Time</td>
            <td>{{$ticket->flight->departure_time}}</td>
        </tr>
        <tr>
            <td>Airlines Name</td>
            <td>{{$ticket->flight->airlines->name}}</td>
        </tr>
        <tr>
            <td>From Location</td>
            <td>{{$ticket->flight->from_location->name}}</td>
        </tr>
        <tr>
            <td>To Location</td>
            <td>{{$ticket->flight->to_location->name}}</td>
        </tr>
        <tr>
            <td>Remarks</td>
            <td>{{$ticket->remarks}}</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>UNPAID</td>
        </tr>
    </table>

</body>

</html>