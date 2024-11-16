<div>

    <div class="bg-white shadow rounded-lg p-6 border border-gray-200 mb-6">
        <h3 class="text-lg font-semibold mb-2">{{ $smr->smr_code }}</h3>
        <p class="text-sm text-gray-600">
            PO Code: 
            <a href="{{ route('project-detail', ['po_code' => $smr->po_code]) }}" class="text-blue-500 hover:text-blue-700">
                {{ $smr->po_code }}
            </a>
        </p>
        <p class="text-sm text-gray-600">Warehouse: {{ $smr->warehouse }}</p>
        <p class="text-sm text-gray-600">Warehouse Location: {{ $smr->warehouse_location }}</p>
        <p class="text-sm text-gray-600">Sub Contract: {{ $smr->sub_contract }}</p>
        <p class="text-sm text-gray-600">SMR Status: {{ $smr->smr_status }}</p>
    </div>
    <div class="bg-white shadow rounded-lg p-6 border border-gray-200 mt-6">
        
        <h2 class="text-lg font-bold mb-4">SMR Items</h2>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item Code</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item Description</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
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

<div class="bg-white shadow rounded-lg p-6 border border-gray-200 mt-6">
    <h2 class="text-lg font-bold mb-4">Vouchers</h2>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Voucher Code</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">PO Code</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SMR Code</th>
            </tr>
        </thead>
        <tbody>
            @if (empty($vouchers))
            <tr>
                <td colspan="3" class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-center">There are no vouchers attached</td>
            </tr>
            @else
            @foreach ($vouchers as $voucher)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                    <a href="{{ route('voucher-detail', ['voucher_code' => $voucher->voucher_code]) }}" class="text-blue-500 hover:text-blue-700">
                        {{ $voucher->voucher_code }}
                    </a>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $voucher->po_code }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $voucher->smr_code }}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
    
    
</table>
</div>

</div>