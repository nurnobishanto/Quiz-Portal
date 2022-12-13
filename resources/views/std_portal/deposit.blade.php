@extends('layouts.student_portal')
@section('content')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="2xl:border-l -mb-10 pb-10">
                <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">
                    <!-- BEGIN: Deposit Transactions -->
                    <div class="col-span-12 md:col-span-6 ">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Deposit Request and Transaction
                            </h2>
                        </div>
                        <div class="mt-5">
                            <div>
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
                            </div>
                            <form action="{{route('portal.deposit_req')}}" method="post">
                                @csrf
                                <div class="input-form mt-5">
                                    <label for="amount" class="form-label">Amount</label>
                                    <input id="amount" name="amount" type="number" class="form-control" placeholder="Enter Amount" required>
                                </div>
                                <div class="input-form mt-5">
                                    <label for="method" class="form-label">Select Payment Method</label>
                                    <select id="method" name="method_id" class="form-select" aria-label="Default select example" required>
                                        <option value="">Choose Payment Method</option>
                                        @foreach($methods as $method)
                                            <option value="{{$method->id}}">{{$method->name}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                    <div id="method_info" class="input-form mt-5">

                                    </div>

                                <div class="input-form mt-5">
                                    <label for="trid" class="form-label">Transaction ID</label>
                                    <input id="trid" name="trid" type="text" class="form-control" placeholder="Transaction ID" required>
                                </div>
                                <div class="input-form mt-5">
                                    <label for="note" class="form-label w-full flex flex-col sm:flex-row"> Note  </label>
                                    <textarea id="note" class="form-control" name="note" placeholder="Type your Note"  required></textarea>
                                </div>

                                <input type="submit" value="Request" class="btn btn-primary mt-5">


                            </form>

                        </div>
                    </div>
                    <!-- END: Deposit Transactions -->
                    <!-- BEGIN: Withdraw Transactions -->
                    <div class="col-span-12 md:col-span-6">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Deposit Transactions
                            </h2>
                        </div>
                        <div class="mt-5">
                            @foreach($deposit_tr as $wtr)
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
                                            <div class="text-success">{{"+ ".$wtr->amount}}</div>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#method').on('change', function () {
                var idMethod = this.value;
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    document.getElementById("method_info").innerHTML =
                        this.responseText;
                }
                xhttp.open("GET", "/method/"+idMethod);
                xhttp.send();
            });

        });

    </script>
@endsection
