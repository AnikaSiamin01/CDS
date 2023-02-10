@php
$teacher=\App\Models\User::all();
$course=\App\Models\Course::all();
@endphp

<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-center"><h2><b>Teacher List</b></h2></div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="table-responsive">

                        <table class="table table-bordered">

                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Choice Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teacher as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->designation}}</td>
                                <td>
                                    @if($item->status=="")<span class="btn btn-sm btn-secondary" ><i class="fa fa-times"></i> </span> @endif
                                    @if($item->status!="")<span class="btn btn-sm btn-primary" ><i class="fa fa-check"></i> </span></span> @endif


                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-center"><h2><b>Course List</b></h2></div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="table-responsive">

                        <table class="table table-bordered">

                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Course Name</th>
                                <th scope="col">Code</th>
                                <th scope="col">Title</th>
                                <th scope="col">Year</th>
                                <th scope="col">Semester</th>

                                <th scope="col">Credit</th>
                                <th scope="col">Type</th>
                                <th scope="col">Assign Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($course as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->code}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->year}}</td>
                                    <td>{{$item->semister}}</td>

                                    <td>{{$item->credit}}</td>
                                    <td>{{$item->type}}</td>

                                    <td>
                                        @if($item->status=="")<span class="btn btn-sm btn-secondary" ><i class="fa fa-times"></i> </span> @endif
                                        @if($item->status!="")<span class="btn btn-sm btn-primary" ><i class="fa fa-check"></i> </span></span> @endif


                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
