<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    <div class="space-y-5">

        @foreach ($jobs as $job )
        <a class=" block rounded-lg px-4 py-6 border border-gray-300" href="/jobs/{{ $job['id'] }}">
            <div class="font-bold text-sm text-blue-500">
                {{ $job->employer->name }}
            </div>
            <div>
                <strong>{{ $job['title'] }} :</strong> Pays {{ $job['salary'] }} per year.

            </div>
        </a>

        @endforeach
    </div>

    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>