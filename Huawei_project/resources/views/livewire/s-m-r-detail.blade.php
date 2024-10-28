<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-6">Sub Material Request Details</h1>
    
    <div class="mt-4 flex justify-start">
        <a href="{{ route('voucher-create', ['po_id' => $po_number, 'smr_id' => $smr_number]) }}" class="bg-green-100 hover:bg-green-700 hover:text-white font-bold py-2 px-4 rounded-full">
            Add Voucher to this SMR
        </a>
    </div>

    <div class="bg-white shadow rounded-lg p-6 mt-6 mb-6 border border-gray-200">
        <h2 class="text-xl font-semibold mb-4">PO Number: {{ $po_number }}</h2>
        <h2 class="text-xl font-semibold mb-4">SMR Number: {{ $smr_number }}</h2>

        <h3 class="text-lg font-semibold mt-4 mb-2">Requested Items</h3>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item Number</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">PO Number</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SMR Number</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity Requested</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($smr_items as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->po_number }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->smr_number }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->quantity_requested }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="bg-white shadow rounded-lg p-6 border border-gray-200">
        <h3 class="text-lg font-semibold mt-4 mb-2">Vouchers</h3>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Voucher Number</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SMR Number</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($vouchers as $voucher)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $voucher->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $voucher->smr_number }}</td>
                         <td>  <a href="{{ route('voucher-detail', ['voucher_id' => $voucher->voucher_id]) }}" class="text-blue-600 hover:text-blue-800">
                                View Details
                            </a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
