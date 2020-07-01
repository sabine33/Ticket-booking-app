<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aeroplane Ticket</title>
    <style>
        #print_button input {
            padding: 10px;
            border: 1px solid #fff;
            background-color: #32B9BC;
            color: #fff;
            font-size: 1em;
        }

        #print_button {
            text-align: center;
        }

        .main {
            width: 95vw;
            height: 400px;
            margin: 0px auto;
            background-color: #F1EDE0;
            display: flex;
            border-radius: 10px;
            max-width: 800px;
            min-width: 800px;
        }

        .block1 {
            width: 70%;
            height: inherit;
            border: 2px solid #fff;
            border-right: 2px dotted #fff;
            border-radius: 10px;

        }

        .block2 {
            width: 30%;
            border-radius: 10px;
            height: inherit;
            border: 2px solid #fff;
            border-left: 1px dotted #000;
            margin: 0px auto;
        }

        .header {
            padding: 5px 5px;
            background-color: #32B9BC;

            color: white;
            letter-spacing: 0.2;
        }

        .header .title {
            text-transform: uppercase;
            font-size: 1.5em;
        }

        .header .subtitle {
            font-size: 1em;
        }

        .block2 .header {
            padding: 15px 15px;
            color: #fff;
        }

        .info1 input[type="text"],
        .info2 input[type="text"] {
            display: block;
            border: none;
            padding: 5px 2px;
            font-size: 1em;
            text-transform: uppercase;
            margin: 5px 0px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background: #fafafa;

        }

        .footer {
            background-color: #32B9BC;
            padding: 20px 0px;
            text-align: right;
            font-weight: normal;
            color: #fafafa;

        }

        .block1 .footer {
            margin: 60px 0px;
        }

        .block2 .footer {
            margin: 5px 0px;
            padding: 11px 10px;

        }

        .body {
            display: flex;
            padding: 5px;
        }

        .barcode {
            margin: auto 10px;
        }

        .block2 .body {
            display: flex;
            flex-direction: column;
            padding-top: 10px;
            align-items: center;
        }

        .info1,
        .info2 {
            color: #888;
            font-weight: 200;
            margin: 0px 10px;
            padding-top: 20px;
        }

        .info3 {
            color: #888;
            font-weight: 200;
            margin: 0px 5px;
            padding-top: 0px;

        }

        .info3 input[type="text"] {
            display: block;
            border: none;
            padding: 4px 2px;
            font-size: 1em;
            text-transform: uppercase;
            margin: 2px 0px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background: #fafafa;
        }

        .info3 .row {
            width: 100%;
        }

        .info3 .row-half {
            width: 50%;
        }
    </style>

</head>

<body>
    @if(!isset($mode))
    <div class="button" id="print_button">
        <input type="button" value="Print Ticket" onclick="printTicket()">
    </div>
    @endif
    <div class="main" style="font-family: fantasy;letter-spacing:0.1em">
        <div class="block1">
            <div class="header">
                <div class="title">
                    BOARDING PASS
                </div>
                <div class="subtitle">
                    {{$ticket->flight->airlines->name}}
                </div>
            </div>

            <div class="body">
                <div class="barcode" style="">
                    <img src="https://lh3.googleusercontent.com/proxy/Q_hQQDqfAwotL_JwE-4MWT1S4nffni71p4lEPvVn4k1X2-d8_MdiY7_1-gxRTw_TzzO3Si2GQlY5r3hhaBKZfLZGCf_Dn2kkz2k3-Ck77OWYc61EE5sG42_mXyD3dVoVowzb=s0-d" width="50px" />
                </div>
                <div class="info1">
                    <div class="name">
                        <label for="name">
                            Name/Surname
                        </label>
                        <input type="text" id="name" value="{{$ticket->passenger_name}}" readonly />
                    </div>

                    <div class="name">
                        <label for="from">
                            From
                        </label>
                        <input type="text" id="from" value="{{$ticket->flight->from_location->name}}" readonly />
                    </div>

                    <div class="name">
                        <label for="name">
                            Destination
                        </label>
                        <input type="text" id="name" value="{{$ticket->flight->to_location->name}}" readonly />
                    </div>
                    <div class="name">
                        <label for="flight">
                            Flight
                        </label>
                        <input type="text" id="flight" value="{{$ticket->flight_name}}" readonly />
                    </div>

                </div>
                <div class="info2">
                    <div class="row">
                        <div class="row">
                            <label for="date">
                                Date
                            </label>
                            <input type="text" id="date" value="{{date('M d Y', strtotime($ticket->flight->departure_date))}}" readonly />
                        </div>
                        <div class="row">
                            <label for="name">
                                TIME
                            </label>
                            <input type="text" id="ttime" value="{{date('h:i',strtotime($ticket->flight->departure_time))}}" readonly>
                        </div>
                        <div class="row">
                            <label for="name">
                                GATE
                            </label>
                            <input type="text" id="name" value="A1" readonly>
                        </div>
                        <div class="row">
                            <label for="name">
                                SEAT
                            </label>
                            <input type="text" id="name" value="A202" readonly>
                        </div>

                    </div>
                </div>

            </div>
            <div class="footer">

            </div>
        </div>
        <div class="block2">
            <div class="header">
                <div class="title">
                    {{$ticket->ticket_type}}
                </div>
            </div>

            <div class="body">
                <div class="info3">
                    <div class="row">
                        <label for="tname">NAME
                        </label>
                        <input type="text" id="tname" value="{{$ticket->passenger_name}}" readonly />
                    </div>
                    <div class="row">
                        <label for="tfrom">FROM
                        </label>
                        <input type="text" id="tfrom" value="{{$ticket->flight->from_location->name}}" readonly />
                    </div>
                    <div class="row">
                        <label for="tto">TO
                        </label>
                        <input type="text" id="tto" value="{{$ticket->flight->to_location->name}}" readonly />
                    </div>
                    <div class="row-halfs" style="display:flex;flex-wrap: nowrap;">
                        <div style="flex:0 0 55%;">
                            <label for="tdate">DATE
                            </label>
                            <input type="text" id="tdate" style="width:75px;" value="{{date('M d', strtotime($ticket->flight->departure_date))}}" readonly />
                        </div>
                        <div style="flex:0 0 45%;">
                            <label for="ttime">TIME
                            </label>
                            <input type="text" id="ttime" style="width:70px;" value="{{date('h:i',strtotime($ticket->flight->departure_time))}}" readonly>
                        </div>
                    </div>
                    <div class="row-halfs" style="display:flex;flex-wrap: nowrap;">
                        <div style="flex:0 0 55%;">
                            <label for="tdate">GATE
                            </label>
                            <input type="text" id="tdate" style="width:75px;" value="A1" readonly />
                        </div>
                        <div style="flex:0 0 45%;">
                            <label for="ttime">SEAT
                            </label>
                            <input type="text" id="ttime" style="width:70px" value="A102" readonly />
                        </div>
                    </div>
                    <div class="item">
                        <label for="tflight">FLIGHT
                        </label>
                        <input type="text" id="tflight" value="{{$ticket->flight_name}}" readonly />

                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="tno">
                    {{$ticket->id}}
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        function printTicket() {
            document.getElementById("print_button").style.display = 'none';

            var mywindow = window.open('', 'Print Ticket', 'height=400,width=800');
            mywindow.document.write(document.querySelector("html").innerHTML);

            setTimeout(function() {
                mywindow.print();
            }, 1000);




            document.getElementById("print_button").style.display = 'block';

        }
    </script>
</body>

</html>