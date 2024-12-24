<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                @foreach($users as $user)
                    <li style="font-family: serif;text-transform: capitalize;border: 1px solid;margin-top:2px;padding-left: 10px;"><a href="{{ route('chat', $user->id) }}">{{ $user->name }}</a></li>
                @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
