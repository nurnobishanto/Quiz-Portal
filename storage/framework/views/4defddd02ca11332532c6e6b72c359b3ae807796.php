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
    <title><?php echo e($paper->name); ?></title>
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
    </style>

</head>

<body>
<?php
$count = 1;
$total = $paper->mcqs->count();
$timeMin = $paper->duration;
?>
<header>
    <p style="font-size: 35px;"><?php echo e(setting('site.title')); ?> Result Card</p>
    <div style="text-align: center;font-size: 25px;"><?php echo e($paper->name); ?></div>
    <span style="text-align: center;font-size:20px;">
                    <span class="text-dark">Time : <?php echo e($timeMin); ?> Minutes.</span> |
                    <span class="text-primary">Total Questions : <?php echo e($total); ?> </span> |
                    <span class="text-success "><strong> Total Mark : <?php echo e($total); ?> X <?php echo e($paper->positive_mark); ?> =
                            <?php echo e($total * $paper->pmark); ?> </strong></span> <br>
                    <span class="text-success">Postive Mark For Every Question : <?php echo e($paper->positive_mark); ?></span> |
                    <span class="text-danger">Negative Mark For Every Question : <?php echo e($paper->negative_mark); ?></span><br>

                </span>
</header>
<footer>
    <hr style="margin-top: 8px !important">
    <div>Copyright © <?php echo date('Y'); ?>. All rights reserved <?php echo e(setting('site.title')); ?>.</div>
</footer>
<main>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table >
                    <tr>
                        <td>Name  </td>
                        <td><?php echo e($result->user->name); ?> </td>
                    </tr>
                    <tr>
                        <td>Exam Name </td>
                        <td><?php echo e($result->quiz->name); ?></td>
                    </tr>
                    <tr>
                        <td>Full Mark </td>
                        <td><?php echo e($paper->mcqs->count() * $paper->positive_mark); ?> </td>
                    </tr>
                    <tr>
                        <td>Achived Mark  </td>
                        <td><?php echo e($result->mark); ?> /
                            <?php echo e($paper->mcqs->count() * $paper->positive_mark); ?> </td>
                    </tr>
                    <tr>
                        <td>Total Attempt </td>
                        <td><?php echo e($result->ca + $result->wa); ?></td>
                    </tr>
                    <tr>
                        <td>Correct Answer </td>
                        <td><?php echo e($result->ca); ?>

                            (<?php echo e(($result->ca * 100) / $paper->mcqs->count()); ?>%)</td>
                    </tr>
                    <tr>
                        <td>Wrong Answer </td>
                        <td><?php echo e($result->wa); ?> (<?php echo e(($result->wa * 100) / $paper->mcqs->count()); ?>%)</td>
                    </tr>
                    <tr>
                        <td>Not Answer  </td>
                        <td><?php echo e($result->na); ?> (<?php echo e(($result->na * 100) / $paper->mcqs->count()); ?>%)</td>
                    </tr>
                    <tr>
                        <td>Submitted  </td>
                        <td><?php echo e(date_format($result->created_at, 'd M, Y h:i a')); ?></td>
                    </tr>
                    <tr>
                        <td>Duration </td>
                        <td><?php echo e(floor($result->time / 60)); ?> Minutes
                            <?php echo e($result->time % 60); ?> Seconds</td>
                    </tr>
                </table>



                <span class="font-weight-300 text-success" style="font-size: 14px;"><i>(
                            <?php echo e($paper->positive_mark); ?>

                            Mark for Per Correct Answer )</i></span>
                <span class="font-weight-300 text-danger" style="font-size: 14px;"><i>(
                            <?php echo e($paper->negative_mark); ?>

                            Mark for Per Negative Answer )</i></span>

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
<?php /**PATH /home/nurnobis/quizportal.online/resources/views/pdf/card.blade.php ENDPATH**/ ?>