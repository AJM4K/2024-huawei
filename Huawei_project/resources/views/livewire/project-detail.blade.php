<div class="container mx-auto mt-8 px-4">
    <!-- Project Information Section -->
    <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-200 mb-6 flex justify-between items-center">
        <div>
            <h3 class="text-2xl font-semibold text-gray-800 mb-2">{{ $po->po_code }}</h3>
            <p class="text-lg text-gray-600">Name: {{ $po->name }}</p>
        </div>
        <div class="flex space-x-4">
            <a href="{{ route('ma-list') }}" 
               class="inline-block bg-blue-600 text-white py-2 px-6 rounded-md text-center font-medium hover:bg-blue-700 transition duration-200">
                MA List
            </a>
            <a href="{{ route('smr-list') }}" 
               class="inline-block bg-blue-600 text-white py-2 px-6 rounded-md text-center font-medium hover:bg-blue-700 transition duration-200">
                SMR List
            </a>
        </div>
    </div>

    <!-- Project Items Section -->
    <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-200">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Project Items</h2>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item Code</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item Description</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">MA Code</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-100">
                @foreach ($items as $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->item_code }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->item_description }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->qty_in }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            <a href="{{ route('ma-detail', ['ma_code' => $item->ma_code]) }}" 
                               class="text-blue-600 hover:text-blue-700 transition duration-200">
                                {{ $item->ma_code }}
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
