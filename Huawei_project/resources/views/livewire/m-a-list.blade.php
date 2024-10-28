<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-6">Material Inspection List</h1>
    
    <h2 class="text-lg font-semibold mb-4">Existing Material Inspections</h2>
    <div class="flex justify-start items-center mb-4">
        <input type="text" class=" border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" wire:model.live="searchQuery" placeholder="Search by MA Number...">
        <!-- <input type="text" class="ml-3 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" wire:model.live="po_number" placeholder="Search by PO Number..."> -->

    </div>
    
    <div class="overflow-x-auto shadow rounded-lg border border-gray-200 bg-white">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        MA Number
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        PO Number
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($mas as $ma)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ $ma->ma_number }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ $ma->po_number }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <a href="{{ route('ma-detail', ['po_id' => $ma->po_number, 'ma_id' => $ma->ma_number]) }}" class="text-blue-600 hover:text-blue-800">
                                View Details
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
