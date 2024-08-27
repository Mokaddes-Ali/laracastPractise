<x-layout>
    <x-slot:heading>
        JobsPage
    </x-slot:heading>
    @foreach (jobs as job)
        <h1 class="text-xl text-green-900 font-bold">This is  job page. My name is {{ jobs ['name'] }} page. I am a {{ jobs ['post'] }}  : My salary is {{ jobs ['salary'] }} . My age is {{ jobs ['age'] }}</h1>

    @endforeach
</x-layout>



