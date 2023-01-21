@extends('layouts.student_portal')
@section('content')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 ">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                           My Attempts
                        </h2>
                        <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                    </div>
                </div>
                <div class="col-span-12">


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
                                    <td>{{$r->quiz->name}}</td>
                                    <td>{{$r->mark}}</td>
                                    <td>{{$r->ca}}</td>
                                    <td>{{$r->wa}}</td>
                                    <td>{{  date('h:i A d M Y', strtotime($r->created_at))}}</td>
                                    <td><a class="btn btn-primary" href="{{route('portal.single_result',['id'=>$r->id])}}">Details</a></td>
                                </tr>
                                    <?php $rank ++;?>
                            @endforeach
                            </tbody>
                        </table>
                    </div>




                </div>
            </div>
        </div>
    </div>

@endsection
