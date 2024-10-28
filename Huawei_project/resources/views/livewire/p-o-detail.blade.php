<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-6">Purchase Order Details</h1>
    
    @if ($poDetails)
        <div class="bg-white shadow rounded-lg p-6 mb-6 border border-gray-200">
            <h2 class="text-xl font-semibold mb-4">PO Number: {{ $poDetails->po_number }}</h2>
            
            <h3 class="text-lg font-semibold mt-4 mb-2">Items</h3>
<div class="flex space-x-2 mt-4">
    <a href="{{ route('ma-list', ['po_number' => $poDetails->po_number]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        View MA Details
    </a>
    <a href="{{ route('smr-list', ['po_number' => $poDetails->po_number]) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
        View SMR Details
    </a>
</div>
            <div class="overflow-x-auto mt-6">
                <table class="min-w-full divide-y divide-gray-200 border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item Number</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">PO Number</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">MA Number</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity In</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Delivered Quantity Out</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($poItems as $item)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->po_number }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->ma_number }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->quantity_in }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->delivered_quantity_out }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <div class="bg-yellow-100 text-yellow-700 p-4 rounded-lg shadow border border-yellow-300">
            No details found for this Purchase Order.
        </div>
    @endif
</div>
