@extends('layouts.student_portal')
@section('content')
    <div class="intro-y flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5">
            {{ $paper->name }}
        </h2>
    </div>
    {!! $paper->description !!}
    <div id="timer" class="grid grid-cols-12 gap-6 mt-5 mb-5">
        <div class="col-span-12 sm:col-span-6 xl:col-span-3">
                <div class="box p-5">
                    <div id="countdownMin" class="text-3xl font-medium leading-8"></div>
                    <div class="text-base text-slate-500 mt-1">Remaining Time</div>
                </div>
        </div>
    </div>
    <div class="col-md-8">
        <h3 style="font-size: 20px;font-weight: bold;text-align: center;">
            @if(Session::has('success'))
                <div class="alert-outline-success"> {{ Session::get('success') }}</div>
                @php
                    Session::forget('success');
                @endphp
            @elseif(Session::has('error'))
                <div class="alert-outline-danger"> {{ Session::get('error') }}</div>
                @php
                    Session::forget('error');
                @endphp
            @elseif(Session::has('info'))
                <div class="alert-outline-secondary"> {{ Session::get('info') }}</div>
                @php
                    Session::forget('info');
                @endphp
            @elseif(Session::has('warning'))
                <div class="alert-outline-warning"> {{ Session::get('warning') }}</div>
                @php
                    Session::forget('warning');
                @endphp


            @endif
        </h3>
        <form action="{{ route('checking') }}" method="post" name="questionPaper">
            @csrf
            <?php
            $count = 1;
            $total = $paper->mcqs->count();
            $timeMin = $paper->duration;
            $timeSec = $timeMin * 60;
            $remtime = $timeSec - $attmDuration;
            $timeMlSec = $remtime * 1000;

            ?>
            <script type="text/javascript">
                var timeleft = <?php echo $remtime; ?>;
                var downloadTimer = setInterval(function() {
                    if (timeleft <= 0) {
                        clearInterval(downloadTimer);
                        document.getElementById("countdown").innerHTML = "Finished";
                    } else {
                        var min = Math.floor(timeleft / 60);
                        var sec = timeleft % 60;
                        document.getElementById("countdownMin").innerHTML = min+" : "+sec;
                    }
                    timeleft -= 1
                }, 1000);
            </script>

            <input type="number" name="paperid" value="{{ $paper->id }}" hidden>
            <input type="number" name="pmark" value="{{ $paper->positive_mark }}" hidden>
            <input type="number" name="nmark" value="{{ $paper->negative_mark }}" hidden>
            <input type="number" name="total" value="{{ $paper->mcqs->count() }}" hidden>
            <span class="text-dark">Time : {{ $timeMin }} Minutes.</span><br>
            <span class="text-primary">Total Questions : {{ $total }} </span><br>
            <span class="text-success">Postive Mark For Every Question : {{ $paper->positive_mark }}</span><br>
            <span class="text-danger">Negative Mark For Every Question : {{ $paper->negative_mark }}</span><br>
            <span class="text-success "><strong> Total Mark : {{ $total }} X {{ $paper->positive_mark }} =
                                {{ $total * $paper->positive_mark }} </strong></span><br>
            <?php $i = 1 ?>
            @foreach ($paper->randommcqs as $question)
                <div class="row  border mt-2 p-2">
                    <input type="text" name="q{{ $count }}" value="{{ $question->id }}" hidden>
                    <input type="text" name="ca{{ $count }}" value="{{ $question->ca }}" hidden>
                    {!! $question->description !!}
                    <div> <strong>{{$i++}} ){{ $question->name }} </strong></div>

                    <input hidden value="none" type="text" name="op{{ $count }}" checked>

                    @if($question->image)
                        <div>
                            <img style="width: 360px;" src="{{ Voyager::image($question->image) }}"
                                 alt="{{ $question->name }}">
                        </div>
                    @endif

                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="op{{ $count }}"
                                   id="op{{ $count }}" value="op1">

                            <label class="form-check-label" for="op{{ $count }}">
                                {{ $question->op1 }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="op{{ $count }}"
                                   id="op{{ $count }}" value="op2">
                            <label class="form-check-label" for="op{{ $count }}">
                                {{ $question->op2 }}
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="op{{ $count }}"
                                   id="op{{ $count }}" value="op3">
                            <label class="form-check-label" for="op{{ $count }}">
                                {{ $question->op3 }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="op{{ $count }}"
                                   id="op{{ $count }}" value="op4">
                            <label class="form-check-label" for="op{{ $count }}">
                                {{ $question->op4 }}
                            </label>
                        </div>

                    </div>
                </div>
                    <?php $count = $count + 1; ?>
            @endforeach

            <input class="btn btn-primary m-1" type="submit" value="Submit">


            <script type="text/javascript">
                window.onload = function() {
                    window.setTimeout(function() {
                        document.questionPaper.submit();
                    }, <?php echo $timeMlSec; ?>);
                };
            </script>
        </form>


    </div>
@endsection
