<x-layouts.layout>
    <x-slot:title>Reports</x-slot:title>
    @foreach ($persons as $person)
        <h1>{{ $person['fname'] . ' ' . $person['lname'] }}</h1>
    @endforeach
</x-layouts.layout>
