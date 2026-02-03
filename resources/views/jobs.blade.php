<x-layout>
    <x-slot:heading>
        Jobs List
    </x-slot:heading>
    <ul>
     @foreach ($jobs as $job)
        <li>
            <a href="/jobs/ {{$job['id']}} "> 
                <strong>{{$job['jobs']}}: </strong> salary: {{$job['salary']}} 
            </a>
        </li>
    @endforeach
    </ul>
</x-layout>