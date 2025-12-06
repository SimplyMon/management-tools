<x-layouts.layout>
    <x-slot:title>Reports</x-slot:title>

    @foreach ($messages as $message)
        <h1>{{ $message->user ? $message->user->name : 'Unknown User' }}</h1>
        <p>{{ $message->message }}</p>
        <hr>
    @endforeach

</x-layouts.layout>
