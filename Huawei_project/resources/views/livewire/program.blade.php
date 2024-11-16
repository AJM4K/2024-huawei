<div class="container mx-auto mt-8 px-4">
    <h1 class="text-4xl font-semibold text-gray-900 mb-8">Programs</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($programs as $program)
            <div class="bg-white rounded-lg shadow-md border border-gray-200 p-6">
                <h3 class="text-2xl font-medium text-gray-800 mb-2">{{ $program->program_code }}</h3>
                <p class="text-lg text-gray-600 mb-3">{{ $program->name }}</p>
                <p class="text-base text-gray-500 mb-4">{{ $program->customer }}</p>
                <a href="{{ route('project-list', ['program_id' => $program->id]) }}" 
                   class="inline-block bg-blue-500 text-white font-medium py-2 px-6 rounded-md text-center">
                    Show Details
                </a>
            </div>
        @endforeach
    </div>
</div>
