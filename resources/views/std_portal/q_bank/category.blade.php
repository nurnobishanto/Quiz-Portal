@extends('layouts.student_portal')
@section('content')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Select a Quiz Category for this {{$subject->name}} Subject
                        </h2>
                        <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                    @foreach($categories as $category)
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <a href="{{route('portal.q_bank.quiz',['slug'=>$category->slug])}}">
                                <div class="zoom-in">
                                    <div class="box p-5">
                                        <div class="text-3xl font-medium leading-8 ">
                                            {{$category->name}}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
