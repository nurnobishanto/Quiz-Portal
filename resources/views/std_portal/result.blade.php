@extends('layouts.student_portal')
@section('content')
    <div class="intro-y flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5">
            {{ $result->quiz->name }}
        </h2>
    </div>
    {!! $result->quiz->description !!}

    <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12 sm:col-span-6 xl:col-span-4">

                    <div class="box p-2">

                        <strong>Name : {{ $result->user->name }}</strong>
                        <p>Full Mark :{{ $result->quiz->mcqs->count() * $result->quiz->positive_mark }}</p>
                        <p>
                            <strong> Mark : {{ $result->mark }} /
                                                {{ $result->quiz->mcqs->count() * $result->quiz->pmark }}
                            </strong>
                        </p>




                        <p>Correct :{{ $result->ca }} ({{ ($result->ca * 100) / $result->quiz->mcqs->count() }}%)</p>
                        <p>Attempt :{{ $result->ca + $result->wa }}</p>
                        <p>Avoid : {{ $result->na }} ({{ ($result->na * 100) / $result->quiz->mcqs->count() }}%)</p>
                        <p>Wrong : {{ $result->wa }} ({{ ($result->wa * 100) / $result->quiz->mcqs->count() }}%)</p>
                        <div style="font-size: 14px;">Submitted : {{ date('h:i A d M Y', strtotime($result->created_at)) }}</div>
                        <div style="font-size: 14px;">Duration : {{ floor($result->time / 60) }} Minutes
                                    {{ $result->time % 60 }} Seconds</div>
                        <p>
                            <a class="btn btn-primary mt-1" href="{{route('download.card',['id'=>$result->id])}}" target="_blank" rel="noopener noreferrer">Download Result Card</a>
                        </p>
                        <p>
                            <a class="btn btn-warning mt-1" href="{{route('download.rank',['id'=>$result->quiz->id])}}" target="_blank" rel="noopener noreferrer">Download Result Rank</a>
                        </p>
                        <p>
                            <a class="btn btn-primary mt-1" href="{{route('download.quiz',['id'=>$result->quiz->id])}}" target="_blank" rel="noopener noreferrer">Download Quiz Paper</a>
                        </p>
                        <p>
                            <a class="btn btn-warning mt-1" href="{{route('download.answer',['id'=>$result->quiz->id])}}" target="_blank" rel="noopener noreferrer">Download Quiz Answer</a>
                        </p>
                        <p>
                            <a class="btn btn-primary mt-1" href="{{route('download.attempt',['id'=>$result->id])}}" target="_blank" rel="noopener noreferrer">Download Your Answer sheet</a>
                        </p>
                    </div>

            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-8">

                <?php
                $count = 1;
                $total = $result->quiz->mcqs->count();
                $timeMin = $result->quiz->duration;
                $timeSec = $timeMin * 60;

                ?>
                <input type="number" name="total" value="{{ $result->quiz->mcqs->count() }}" hidden>
                <h3 style="font-size: 20px;text-align: center;">
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
                <span class="text-dark">Time : {{ $timeMin }} Minutes.</span><br>
                <span class="text-primary">Total Questions : {{ $total }} </span><br>
                <span class="text-success">Postive Mark For Every Question : {{ $result->quiz->positive_mark }}</span><br>
                <span class="text-danger">Negative Mark For Every Question : {{ $result->quiz->negative_mark }}</span><br>
                <span class="text-success "><strong> Total Mark : {{ $total }} X {{ $result->quiz->positive_mark }} =
                            {{ $total * $result->quiz->positive_mark }} </strong></span><br>
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
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                       id="op{{ $count }}"  disabled <?php if ($atmpt->attempt == "op1") {
                                                                           ?> checked <?php
                                                                                      } ?>>
                                <label class="form-check-label" for="op{{ $count }}">
                                    {{ $atmpt->mcq->op1}}
                                </label>

                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                       id="op{{ $count }}"  disabled <?php if ($atmpt->attempt == "op2") {
                                                                           ?> checked <?php
                                                                                      } ?>>
                                <label class="form-check-label" for="op{{ $count }}">
                                    {{ $atmpt->mcq->op2 }}
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                       id="op{{ $count }}"  disabled <?php if ($atmpt->attempt == "op3") {
                                                                           ?> checked <?php
                                                                                      } ?>>
                                <label class="form-check-label" for="op{{ $count }}">
                                    {{ $atmpt->mcq->op3 }}
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                       id="op{{ $count }}"  disabled <?php if ($atmpt->attempt == "op4") {
                                                                           ?> checked <?php
                                                                                      } ?>>
                                <label class="form-check-label" for="op{{ $count }}">
                                    {{ $atmpt->mcq->op4 }}
                                </label>
                            </div>

                        </div>
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
@endsection
