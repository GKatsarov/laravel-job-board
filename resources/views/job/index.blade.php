<x-main-layout>

    <x-card class="mb-4 text-sm" x-data="">
        <form action="{{ route('home') }}" method="GET" x-ref="filters">
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <div class="mb-1 font-semibold">Search</div>
                    <x-text-input-sm name="search" value="{{ request('search') }}" placeholder="Search for any text"/>
                </div>
                <div>
                    <div class="mb-1 font-semibold">Salary</div>
                    <div class="flex space-x-2">
                        <x-text-input-sm name="min_salary" value="{{ request('min_salary') }}" placeholder="From"/>
                        <x-text-input-sm name="max_salary" value="{{ request('max_salary') }}" placeholder="To"/>
                    </div>
                </div>
                <div>
                    <x-radio-group name="experience" label="Experience" :options="$experience"/>
                </div>
                <div>
                    <x-radio-group name="category" label="Category" :options="$categories"/>

                </div>
            </div>

            <x-primary-button class="w-full justify-center">Filter</x-primary-button>
        </form>
    </x-card>

    @foreach($jobs as $job)
        <x-job-card class="mb-4" :$job>
            <div>
                <x-link-button :href="route('jobs.show', $job)">Show</x-link-button>
            </div>
        </x-job-card>
    @endforeach
</x-main-layout>
