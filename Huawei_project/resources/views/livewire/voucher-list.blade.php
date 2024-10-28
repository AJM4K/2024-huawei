<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-6">Voucher List</h1>

    <div class="bg-white shadow rounded-lg p-6 border border-gray-200">
        <h3 class="text-lg font-semibold mt-4 mb-2">Vouchers</h3>

        <div class="flex justify-start items-center mb-4">
        <input type="text" class=" border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" wire:model.live="searchQuery" placeholder="Search by Voucher id...">
        <!-- <input type="text" class="ml-3 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" wire:model.live="po_number" placeholder="Search by PO Number..."> -->

    </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Voucher Number</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SMR Number</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($vouchers as $voucher)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $voucher->voucher_id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $voucher->smr_number }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <a href="{{ route('voucher-detail', ['voucher_id' => $voucher->voucher_id]) }}" class="text-blue-600 hover:text-blue-800">
                                View Details
                            </a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>