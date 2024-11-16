<div class="container mx-auto mt-8 px-4">

    <!-- MA Detail Section -->
    <div class="bg-white shadow rounded-lg p-6 border border-gray-200 mb-6">
        <p class="text-sm text-gray-600 mb-2">PO Code: 
            <a href="{{ route('project-detail', ['po_code' => $ma->po_code]) }}" class="text-blue-500 hover:text-blue-700">
                {{ $ma->po_code }}
            </a>
        </p>
        <h2 class="text-xl font-semibold text-gray-900 mb-4">MA Detail</h2>
        <p class="text-sm text-gray-600">MA Code: {{ $ma->ma_code }}</p>
    </div>

    <!-- Items Table Section -->
    <div class="bg-white shadow rounded-lg p-6 border border-gray-200 mt-4">
        <h2 class="text-xl font-semibold text-gray-900 mb-4">Items</h2>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item Code</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item Description</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity In</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                    <tr class="hover:bg-gray-50 transition duration-200">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->item_code }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->item_description }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->qty_in }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-6 py-4 text-center text-sm text-gray-900">No items available</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
