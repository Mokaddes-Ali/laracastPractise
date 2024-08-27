<x-layout>
    <x-slot:heading>
        Service Page
    </x-slot:heading>
    @foreach ( $services as $service)


        <h1 class="text-xl text-green-900 font-bold">This is  Service page. My name is</h1>
        @endforeach

</x-layout>
