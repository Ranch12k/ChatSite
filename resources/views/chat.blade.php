<x-app-layout>
  @livewire('chat-component', ['user_id' => $id])
  <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
</x-app-layout>
