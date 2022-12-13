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

        .container {
            padding-top: 90px;
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
            <p style="font-size: 35px;">{{setting('site.title')}} (Quiz Paper)</p>
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
                @foreach ($paper->mcqs as $question)
                    <div style="border-style: solid;border-width: 1px;margin:5px;padding:10px">
                            <?php $co = $question->ca; ?>
                        <span style="font-size:15px;">{{ $count }}) {{ $question->name }}</span> <br>
                        {!! $question->description !!}
                        @if ($question->image)
                                <?php
                                $file = str_replace('\\', '/', $question->image);
                                $imgurl = 'storage/' . $file;
                                $path = $imgurl;
                                $type = pathinfo($path, PATHINFO_EXTENSION);
                                $data = file_get_contents($path);
                                $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                                ?>
                            <div>
                                <img style="max-height: 200px;" src="{{ $base64 }}">
                            </div>
                        @endif
                        <ol style="list-style-type: upper-alpha;margin: 0px;">
                            <li style="font-size:13px;">{{ $question->op1 }}</li>
                            <li style="font-size:13px;">{{ $question->op2 }}</li>
                            <li style="font-size:13px;"> {{ $question->op3 }}</li>
                            <li style="font-size:13px;"> {{ $question->op4 }}</li>
                        </ol>
                    </div>
                        <?php $count = $count + 1; ?>
                @endforeach
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
