<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h1>{{ $job['title'] }}</h1>
    <hr class="mt-3 mb-3">

    <p>Salary {{ $job['salary'] }} per year</p>

    </ul>


</x-layout>