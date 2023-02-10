@php
    $teacher=\App\Models\User::all();
    $course=\App\Models\Course::whereNull('status')->get();
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Course choice') }}
        </h2>
    </x-slot>

        <p class="font-semibold text-xl text-gray-800 leading-tight px-10 mx-10 mt-10">
            {{ __('*** Note: Course will be prefered with respect to seniority.that is most senior teacher(professor) will choose the courses.
and continue sequentially for next most senior teacher among the rest.') }}
        </p>
    <p class="font-semibold text-xl text-gray-800 leading-tight px-10 mx-10 mt-2 mb-10">
        *** Note: You have to choice at least {{Auth::user()->least_credit}} credit
    </p>

    <div class="text-center"><h2><b></b></h2></div>
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-6 mt-9">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('admin.course.assign') }}">
            @csrf

            <div class="table-responsive">

                <table class="table table-bordered">

                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Id</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Code</th>
                        <th scope="col">Title</th>
                        <th scope="col">Year</th>
                        <th scope="col">Semester</th>

                        <th scope="col">Credit</th>
                        <th scope="col">Type</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($course as $item)
                        <tr>
                            <td><input type="checkbox" name="checkCourse[]" value="{{$item->id}}"></td>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->code}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->year}}</td>
                            <td>{{$item->semister}}</td>
                            <td>{{$item->credit}}</td>
                            <td>{{$item->type}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


            <div class="flex items-center justify-end mt-4 mb-4">

                <x-button class="ml-4">
                    {{ __('Submit') }}
                </x-button>
            </div>
        </form>
    </div>
</x-app-layout>
