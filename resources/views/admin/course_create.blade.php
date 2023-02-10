@php
    $teacher=\App\Models\User::all();
@endphp

<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
    <div class="text-center"><h2><b>Create New Course</b></h2></div>
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-6 mt-9">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <form method="POST" action="{{ route('admin.course.create') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-label for="name" :value="__('Course Name')" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
        </div>
        <!-- Name -->
        <div>
            <x-label for="name" :value="__('Course Code')" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="code" :value="old('code')" required autofocus />
        </div>

        <!-- Name -->
        <div>
            <x-label for="name" :value="__('Course Title')" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
        </div>

        <!-- Name -->
        <div>
            <x-label for="name" :value="__('Course Credit')" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="credit" :value="old('credit')" required autofocus />
        </div>
        <!-- Name -->
        <div>
            <x-label for="name" :value="__('Select Type')" />

            <select class="form-control" name="type" id="designation" required>
                <option value="">choose</option>
                <option value="theory">Theory</option>
                <option value="sessional">Sessional</option>
            </select>
        </div>

        <!-- Name -->
        <div>
            <x-label for="name" :value="__('Select Year')" />

            <select class="form-control" name="year" id="designation" required>
                <option value="">choose</option>
                <option value="1">1st</option>
                <option value="2">2nd</option>
                <option value="3">3rd</option>
                <option value="4">4th</option>
            </select>
        </div>
        <!-- Name -->
        <div>
            <x-label for="name" :value="__('Select Semister')" />

            <select class="form-control" name="semister" id="designation" required>
                <option value="">choose</option>
                <option value="1">1st</option>
                <option value="2">2nd</option>
            </select>
        </div>






        <div class="flex items-center justify-end mt-4 mb-4">

            <x-button class="ml-4">
                {{ __('Submit') }}
            </x-button>
        </div>
    </form>
    </div>
</x-admin-layout>
