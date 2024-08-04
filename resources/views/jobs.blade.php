<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <h1>Please find jobs or stay poor.</h1>
    <hr class="mt-3 mb-3">
    <ul>
        @foreach ($jobs as $job)
            <li><a href="/jobs/{{ $job['id'] }}"><strong>{{ $job['title'] }}</strong></a>
                <p>Salary {{ $job['salary'] }} per year</p>
            </li>
        @endforeach
    </ul>


</x-layout>
