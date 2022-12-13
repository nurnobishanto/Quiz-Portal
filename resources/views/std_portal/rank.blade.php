@extends('layouts.student_portal')
@section('content')
    <div class="intro-y  items-center">
        <h1 class="text-lg font-medium truncate mr-5">
            Rank
        </h1>
        <h2 class="text-lg font-medium truncate mr-5">
            Quiz: {{ $quiz->name }}
        </h2>
        <p>Subject: {{ $quiz->subject->name }}</p>
        <p>Exam Category: {{ $quiz->category->name }}</p>
        <p>Positive Mark: {{ $quiz->positive_mark }}</p>
        <p>Negative Mark: {{ $quiz->negative_mark }}</p>
    </div>
    <div style="overflow-x:auto;">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Rank SL</th>
            <th scope="col">Name</th>
            <th scope="col">Mark</th>
            <th scope="col">Correct</th>
            <th scope="col">Wrong</th>
            <th scope="col">Submitted
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $rank = 1;?>
        @foreach($result as $r)
        <tr>
            <th scope="row">{{$rank}}</th>
            <td>{{$r->user->name}}</td>
            <td>{{$r->mark}}</td>
            <td>{{$r->ca}}</td>
            <td>{{$r->wa}}</td>
            <td>{{$r->created_at}}</td>
        </tr>
            <?php $rank ++;?>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection
