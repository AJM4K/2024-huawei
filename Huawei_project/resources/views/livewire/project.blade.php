<div class="container mx-auto mt-8">
    <div class="bg-white shadow rounded-lg p-6 border border-gray-200">
        <h3 class="text-lg font-semibold mb-2">{{ $program_code }}</h3>
        <p class="text-sm text-gray-600">Name: {{ $program_name }}</p>
    </div>
    
    <h1 class="text-2xl font-bold mb-6">Project List</h1>
    <div class="grid grid-cols-3 gap-4">
        @foreach ($projects as $project)
            <div class="bg-white shadow rounded-lg p-6 border border-gray-200">
                <h3 class="text-lg font-semibold mb-2">{{ $project->po_code }}</h3>
                <p class="text-sm text-gray-600">{{ $project->name }}</p>
                <p class="text-sm text-gray-600">{{ $project->customer }}</p>
                <div class="mt-4">
                    <a href="{{ route('project-detail', ['po_code' => $project->po_code]) }}" 
                       class="bg-blue-500 text-white hover:bg-blue-700 font-bold py-2 px-4 rounded">
                        Show Details
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
