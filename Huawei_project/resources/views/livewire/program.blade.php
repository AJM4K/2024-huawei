{{-- Huawei_project/resources/views/livewire/program.blade.php --}}
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-6">Programs</h1>
    <div class="grid grid-cols-3 gap-4">
        @foreach ($programs as $program)
            <div class="bg-white shadow rounded-lg p-6 border border-gray-200">
                <h3 class="text-lg font-semibold mb-2">{{ $program->program_code }}</h3>
                <p class="text-sm text-gray-600">{{ $program->name }}</p>
                <p class="text-sm text-gray-600">{{ $program->customer }}</p>
                <div class="mt-4">
                    <a href="{{ route('project-list', ['program_id' => $program->id]) }}" 
                       class="bg-blue-500 text-white hover:bg-blue-700 font-bold py-2 px-4 rounded">
                        Show Details
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
