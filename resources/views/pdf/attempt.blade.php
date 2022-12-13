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
            padding: 10px;
            width: 100%;
            border: 1px solid;
            border-collapse: collapse;
            font-size: 35px;
            line-height: 55px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .card {
            padding: 20px;
        }

        .container {
            padding-top: 90px;
            padding-bottom: 10px;
        }
        /*.bg-success{*/
        /*    background-color: green;*/
        /*}*/
        /*.bg-danger {*/
        /*    background-color: rgba(255, 18, 18, 0.93);*/
        /*}*/
        /*.bg-warning{*/
        /*    background-color: rgb(255, 233, 0);*/
        /*}*/
        /*.text-light{*/
        /*  color: white;*/
        /*}*/
        /* .text-dark{*/
        /*    color: black;*/
        /*}*/
        .p-2{
            border: 1px solid black;
            padding: 20px;
            margin-top: 10px;
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
    <p style="font-size: 35px;">{{setting('site.title')}} Answer Attempt</p>
    <div style="text-align: center;font-size: 25px;">{{ $paper->name }}</div>
    <span style="text-align: center;font-size:20px;">
                    <span class="text-dark">Time : {{ $timeMin }} Minutes.</span> |
                    <span class="text-primary">Total Questions : {{ $total }} </span> |
                    <span class="text-success "><strong> Total Mark : {{ $total }} X {{ $paper->positive_mark }} =
                            {{ $total * $paper->pmark }} </strong></span> <br>
                    <span class="text-success">Positive Mark For Every Question : {{ $paper->positive_mark }}</span> |
                    <span class="text-danger">Negative Mark For Every Question : {{ $paper->negative_mark }}</span><br>

                </span>
</header>
<footer>
    <hr style="margin-top: 8px !important">
    <div>Copyright © <?php echo date('Y'); ?>. All rights reserved {{setting('site.title')}}.</div>
</footer>
<main>
    <div class="container">
        <div class="card">
            <div>
                <span> Name  {{ $result->user->name }} </span> ||
                <span> Achieved Mark  : {{ $result->mark }} /
                            {{ $paper->mcqs->count() * $paper->positive_mark }} </span> <br>
                <span> Attempt : {{ $result->ca + $result->wa }}</span> ||
                <span> Correct : {{ $result->ca }}
                            ({{ ($result->ca * 100) / $paper->mcqs->count() }}%)</span> ||
                <span> Wrong  : {{ $result->wa }} ({{ ($result->wa * 100) / $paper->mcqs->count() }}%)</span> ||
                <span> Not Answer : {{ $result->na }} ({{ ($result->na * 100) / $paper->mcqs->count() }}%)</span><br>
                <span> Submitted  : {{ date_format($result->created_at, 'd M, Y h:i a') }}</span> ||
                <span> Duration {{ floor($result->time / 60) }} Minutes
                            {{ $result->time % 60 }} Seconds</span>

            </div>
                <div>
                <?php
                $count = 1;
                $total = $result->quiz->mcqs->count();
                ?>
                @foreach ($result->attempts as $atmpt)
                        <?php
                        $correct_ans = $atmpt->mcq->ca ;
                        $my_attempt =  $atmpt->attempt;
                        ?>
                    <div
                            <?php if ($correct_ans === $my_attempt) {
                        echo 'class="row  border p-2 bg-success text-light"';
                    } elseif ($my_attempt === 'none') {
                        echo 'class="row  border p-2 bg-warning text-dark"';
                    } else {
                        echo 'class="row  border p-2 bg-danger text-light"';
                    } ?>

                    >

                        <div><strong><?php echo $count; ?>) {{ $atmpt->mcq->name }} </strong></div>


                        {!! $atmpt->mcq->description !!}
                        @if ($atmpt->mcq->image)
                            <div>
                                <img style="max-height:250px;" src="{{ asset('storage/'.$atmpt->mcq->image) }}"
                                     alt="{{ $atmpt->mcq->name }}">
                            </div>
                        @endif
                        <ol style="list-style-type: upper-alpha">
                            <?php
                                if($atmpt->mcq->ca == "op1" && $atmpt->attempt == "op1"){
                                    echo "<li><span style='background-color: #96DFA0;'>".$atmpt->mcq->op1." <span style='background-color: green;color: white'>( * ✓ )</span></span></li>";
                                }
                                 else if($atmpt->mcq->ca != "op1" && $atmpt->attempt == "op1"){
                                    echo "<li><span style='background-color: #F2DEDE;'>".$atmpt->mcq->op1." <span style='background-color: red;color: white'>( * ✖ )</span></span></li>";
                                }
                                 else if($atmpt->mcq->ca == "op1" && $atmpt->attempt != "op1"){
                                     echo "<li><span style='background-color: #96DFA0;'>".$atmpt->mcq->op1." <span style='background-color: green;color: white'>( ✓ )</span></span></li>";
                                }else{ echo "<li>".$atmpt->mcq->op1."</li>"; }
                                ?>
                            <?php
                                if($atmpt->mcq->ca == "op2" && $atmpt->attempt == "op2"){
                                    echo "<li><span style='background-color: #96DFA0;'>".$atmpt->mcq->op2." <span style='background-color: green;color: white'>( * ✓ )</span></span></li>";
                                }
                                else if($atmpt->mcq->ca != "op2" && $atmpt->attempt == "op2"){
                                    echo "<li><span style='background-color: #F2DEDE;'>".$atmpt->mcq->op2." <span style='background-color: red;color: white'>( * ✖ )</span></span></li>";
                                }
                                else if($atmpt->mcq->ca == "op2" && $atmpt->attempt != "op2"){
                                    echo "<li><span style='background-color: #96DFA0;'>".$atmpt->mcq->op2." <span style='background-color: green;color: white'>( ✓ )</span></span></li>";
                                }else{ echo "<li>".$atmpt->mcq->op2."</li>"; }
                                ?>
                            <?php
                                if($atmpt->mcq->ca == "op3" && $atmpt->attempt == "op3"){
                                    echo "<li><span style='background-color: #96DFA0;'>".$atmpt->mcq->op3." <span style='background-color: green;color: white'>( * ✓ )</span></span></li>";
                                }
                                else if($atmpt->mcq->ca != "op3" && $atmpt->attempt == "op3"){
                                    echo "<li><span style='background-color: #F2DEDE;'>".$atmpt->mcq->op3." <span style='background-color: red;color: white'>( * ✖ )</span></span></li>";
                                }
                                else if($atmpt->mcq->ca == "op3" && $atmpt->attempt != "op3"){
                                    echo "<li><span style='background-color: #96DFA0;'>".$atmpt->mcq->op3." <span style='background-color: green;color: white'>( ✓ )</span></span></li>";
                                }else{ echo "<li>".$atmpt->mcq->op3."</li>"; }
                                ?>
                            <?php
                                if($atmpt->mcq->ca == "op4" && $atmpt->attempt == "op4"){
                                    echo "<li><span style='background-color: #96DFA0;'>".$atmpt->mcq->op4." <span style='background-color: green;color: white'>( * ✓ )</span></span></li>";
                                }
                                else if($atmpt->mcq->ca != "op4" && $atmpt->attempt == "op4"){
                                    echo "<li><span style='background-color: #F2DEDE;'>".$atmpt->mcq->op4." <span style='background-color: red;color: white'>( * ✖ )</span></span></li>";
                                }
                                else if($atmpt->mcq->ca == "op4" && $atmpt->attempt != "op4"){
                                    echo "<li><span style='background-color: #96DFA0;'>".$atmpt->mcq->op4." <span style='background-color: green;color: white'>( ✓ )</span></span></li>";
                                }else{ echo "<li>".$atmpt->mcq->op4."</li>"; }
                                ?>

                        </ol>
                        <strong>
                            @if($my_attempt =="none")
                                <span>Your skipped this MCQ</span><br>
                            @else
                                <span>Your Answer: {{  $atmpt->mcq->$my_attempt }}</span><br>
                            @endif

                            <span>Correct Answer: {{ $atmpt->mcq->$correct_ans }}</span>
                        </strong>
                        <br>
                        <div>Explain : {{$atmpt->mcq->explain}}</div>
                        @if($atmpt->mcq->explain_img)
                            <img src="{{asset('storage/'.$atmpt->mcq->explain_img)}}" style="max-height:250px;">
                        @endif

                    </div>
                        <?php $count = $count + 1; ?>
                @endforeach

                </div>
        </div>
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
