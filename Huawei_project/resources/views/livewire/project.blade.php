<div class="container mx-auto mt-8 px-4">
    <!-- Program Card -->
    <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-200 mb-8">
        <h3 class="text-2xl font-semibold text-gray-800 mb-3">{{ $program_code }}</h3>
        <p class="text-lg text-gray-600">Name: {{ $program_name }}</p>
    </div>

    <!-- Projects Section -->
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Project List</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($projects as $project)
            <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-200">
                <h3 class="text-xl font-medium text-gray-800 mb-3">{{ $project->po_code }}</h3>
                <p class="text-base text-gray-600 mb-2">{{ $project->name }}</p>
                <p class="text-sm text-gray-500">{{ $project->customer }}</p>
                <div class="mt-6">
                    <a href="{{ route('project-detail', ['po_code' => $project->po_code]) }}" 
                       class="inline-block bg-blue-600 text-white font-semibold py-2 px-6 rounded-md text-center">
                        Show Details
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
