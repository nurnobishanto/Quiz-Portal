@extends('layouts.student_portal')
@section('content')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-6">
            <div class="2xl:border-l -mb-10 pb-10">
                <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">
                    <!-- BEGIN: Deposit Transactions -->
                    <div class="col-span-12 md:col-span-6 ">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Deposit Transactions
                            </h2>
                        </div>
                        <div class="mt-5">
                            @foreach($deposit_tr as $dtr)
                            <div class="intro-x">
                                <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">
                                            @if($dtr->method)
                                                {{$dtr->method->name}}
                                            @else
                                                {{$dtr->note}}
                                            @endif

                                        </div>
                                        <div class="text-slate-500 text-xs mt-0.5">TrID : {{$dtr->trid}}</div>
                                        <div class="text-slate-500 text-xs mt-0.5">{{$dtr->created_at->diffForHumans()}}</div>

                                    </div>
                                    @if($dtr->status == 'approved')
                                        <div class="text-success">{{$dtr->amount}}</div>
                                    @else
                                        <div class="text-warning">{{$dtr->amount}}</div>
                                    @endif
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- END: Deposit Transactions -->
                    <!-- BEGIN: Withdraw Transactions -->
                    <div class="col-span-12 md:col-span-6">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Withdraw Transactions
                            </h2>
                        </div>
                        <div class="mt-5">
                            @foreach($withdraw_tr as $wtr)
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">
                                                @if($wtr->method)
                                                    {{$wtr->method->name}}
                                                @else
                                                    {{$wtr->note}}
                                                @endif

                                            </div>
                                            <div class="text-slate-500 text-xs mt-0.5">{{$wtr->created_at->diffForHumans()}}</div>
                                        </div>
                                        @if($wtr->status == 'approved')
                                            <div class="text-danger">{{-$wtr->amount}}</div>
                                        @else
                                            <div class="text-warning">{{$wtr->amount}}</div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- END: Withdraw Transactions -->
                </div>
            </div>
        </div>
    </div>
@endsection
