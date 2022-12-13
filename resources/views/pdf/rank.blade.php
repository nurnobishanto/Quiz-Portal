<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <title>{{ $paper->name }}</title>
    <style>
        /** Define tde margins of your page **/
        @page {
            margin: 25px 15px 30px;
        }
        html,
        body,
        div {
            font-family: freeserif;
        }
        header {
            position: fixed;
            top: -35px;
            left: 0px;
            right: 0px;
            height: 130px;
            /** Extra personal styles **/
            color: black;
            text-align: center;

        }

        footer {
            position: fixed;
            bottom: -25px;
            left: 0px;
            right: 0px;
            height: 25px;
            font-size: 15px !important;
            color: black !important;
            text-align: center;
        }
        table,
        td,
        td {
            text-align: center;
            border: 1px solid;
            border-collapse: collapse;
        }
        th{
            text-align: center;
            border: 1px solid;
            background-color:yellow;
            line-height:25px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .card {
            padding: 20px;
        }

        .container {
            padding-top: 100px;
            padding-bottom: 10px;
        }
    </style>

</head>

<body>
<?php
$count = 1;
$total = $paper->mcqs->count();
$timeMin = $paper->duration;
?>
<header>
    <p style="font-size: 35px;">{{setting('site.title')}} Rank List</p>
    <div style="text-align: center;font-size: 25px;">{{ $paper->name }}</div>
    <span style="text-align: center;font-size:20px;">
                    <span class="text-dark">Time : {{ $timeMin }} Minutes.</span> |
                    <span class="text-primary">Total Questions : {{ $total }} </span> |
                    <span class="text-success "><strong> Total Mark : {{ $total }} X {{ $paper->positive_mark }} =
                            {{ $total * $paper->pmark }} </strong></span> <br>
                    <span class="text-success">Postive Mark For Every Question : {{ $paper->positive_mark }}</span> |
                    <span class="text-danger">Negative Mark For Every Question : {{ $paper->negative_mark }}</span><br>

                </span>
</header>
<footer>
    <hr style="margin-top: 8px !important">
    <div>Copyright © <?php echo date('Y'); ?>. All rights reserved {{setting('site.title')}}.</div>
</footer>
<main>
    <div class="container">
        <table   cellspacing="0" width="100%">
            <tr>
                <th>Rank SL</th>
                <th>Name</th>
                <th>Mark</th>
                <th>Correct</th>
                <th>Wrong</th>
                <th>Submitted</th>
            </tr>
            <?php $rank = 1;?>
            @foreach($results as $r)
                <tr>
                    <td>{{$rank}}</td>
                    <td>{{$r->user->name}}</td>
                    <td>{{$r->mark}}</td>
                    <td>{{$r->ca}}</td>
                    <td>{{$r->wa}}</td>
                    <td>{{$r->created_at}}</td>
                </tr>
                    <?php $rank ++;?>
            @endforeach
        </table>
    </div>
</main>
<!--the script-->
<script>
    function generatePDF() {
        var specialElementHandlers = {
            '#hidden-element': function(element, renderer) {
                return true;
            }
        };
        var doc = new jsPDF({
            orientation: 'potrait'
        }); //create jsPDF object
        doc.fromHTML(document.getElementById("contnet"), // page element which you want to print as PDF
            10,
            15, {
                'width': 170, //set width
                'elementHandlers': specialElementHandlers

            },
            function(a) {
                doc.save("HTML2PDF.pdf"); // save file name as HTML2PDF.pdf
            });
    }
</script>
</body>
</html>
