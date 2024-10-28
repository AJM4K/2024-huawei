<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-6">Voucher Detail</h1>

    <div class="bg-white shadow rounded-lg p-6 border border-gray-200">
        <h3 class="text-lg font-semibold mt-4 mb-2">Voucher Information</h3>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="voucher_id" class="block text-gray-700 text-sm font-bold mb-2">Voucher Number</label>
                <input type="text" id="voucher_id" value="{{ $voucher->voucher_id }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly>
            </div>

            <div>
                <label for="smr_number" class="block text-gray-700 text-sm font-bold mb-2">SMR Number</label>
                <input type="text" id="smr_number" value="{{ $voucher->smr_number }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly>
            </div>

            <div class="col-span-2 mt-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Voucher Image</label>
                <div class="relative h-96 w-full">
                    <img src="{{ asset('storage/' . $voucher->voucher_image) }}" class="absolute inset-0 w-full h-full object-contain" alt="Voucher Image">
                    <button type="button" onclick="window.open('{{ asset('storage/' . $voucher->voucher_image) }}', '/dashboard')" class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                        <svg class="h-12 w-12 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="col-span-2 mt-4">
                <h3 class="text-lg font-semibold mt-4 mb-2">Items</h3>
                <table class="min-w-full divide-y divide-gray-200 border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item Number</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity delivered</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @php
                            $items = DB::table('po_out_item')
                                        ->where('voucher_number', $voucher->voucher_id)
                                        ->get();
                        @endphp
                        @foreach ($items as $item)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->item_number }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->description ?? 'No Description' }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->quantity_delivered }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

          
            <div>