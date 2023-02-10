@php
$teacher=\App\Models\User::orderBy('role', 'asc')->get();
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{--            {{ __('Dashboard') }}--}}
        </h2>
    </x-slot>
    <p class="font-semibold text-xl text-gray-800 leading-tight px-10 mx-10 mt-10">
        {{ __('***  The choice list should be given by priority table shown in below. when you see the above position
  of the table is completed their choice , then you are proceed to make choice') }}
    </p>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="text-center"><h2>Teacher List</h2></div>
                    <div class="table-responsive">

                        <table class="table">

                            <thead>
                            <tr>
                                <th scope="col">Priority</th>
                                <th scope="col">Name</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teacher as $item)
                            <tr>
                                <td>{{$item->role}}</td>
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
</x-app-layout>
