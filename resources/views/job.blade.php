<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class="font-bold text-lg"> {{$job['jobs']}} </h2>
    <p>
        This jobs pays {{$job['salary']}}
    </p>
</x-layout>