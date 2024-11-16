<div>
    <div class="bg-white shadow rounded-lg p-6 border border-gray-200">
        <p class="text-sm text-gray-600">PO Code: 
            <a href="{{ route('project-detail', ['po_code' => $ma->po_code]) }}" class="text-blue-500 hover:text-blue-700">
                {{ $ma->po_code }}
            </a>
        </p>
        <h2 class="text-lg font-bold mb-4">MA Detail</h2>
        <p class="text-sm text-gray-600">MA Code: {{ $ma->ma_code }}</p>
    </div>
    <div class="bg-white shadow rounded-lg p-6 border border-gray-200 mt-4">
        <h2 class="text-lg font-bold mb-4">Items</h2>
        <table class="table-auto w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item Code</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item Description</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity In</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->item_code }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->item_description }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->qty_in }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

