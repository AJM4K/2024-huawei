<div class="container mx-auto mt-8">
    <!-- Project Information Section -->
    <div class="bg-white shadow rounded-lg p-6 border border-gray-200 mb-6 flex justify-between">
        <div>
            <h3 class="text-lg font-semibold mb-2">{{ $po->po_code }}</h3>
            <p class="text-sm text-gray-600">Name: {{ $po->name }}</p>
        </div>
        <div class="flex space-x-2">
            <a href="{{ route('ma-list') }}" 
               class="bg-blue-500 text-white hover:bg-blue-700 font-bold py-2 px-4 rounded">
                MA List
            </a>
            <a href="{{ route('smr-list') }}" 
               class="bg-blue-500 text-white hover:bg-blue-700 font-bold py-2 px-4 rounded">
                SMR List
            </a>
        </div>

    </div>

    <!-- Project Items Section -->
    <div class="bg-white shadow rounded-lg p-6 border border-gray-200">
        <h2 class="text-lg font-bold mb-4">Project Items</h2>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item Code</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item Description</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">MA Code</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->item_code }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->item_description }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->qty_in }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            <a href="{{ route('ma-detail', ['ma_code' => $item->ma_code]) }}" class="text-blue-500 hover:text-blue-700">
                                {{ $item->ma_code }}
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
