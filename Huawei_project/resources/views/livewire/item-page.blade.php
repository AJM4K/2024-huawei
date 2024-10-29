<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <h1 class="text-2xl font-bold mb-6">Items</h1>
    <div class="flex justify-between items-center mb-4">
        <input type="search" class="form-control border border-gray-300 rounded-md p-2" wire:model.live="searchQuery" placeholder="Search..." aria-label="Search">
    </div>
    <div class="flex justify-start items-center mb-4">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" wire:click="export">Export</button>
    </div>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-100">
            <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item Number</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">POs</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">MAs</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SMRs</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">VHs</th>
            </tr>
        </thead>

        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($items as $item)
                <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->item_number }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                    @foreach (DB::table('po_in_item')->where('item_number', $item->item_number)->select('po_number')->distinct()->get() as $po)
                        <a href="{{ route('po-detail', ['po_id' => $po->po_number]) }}" class="text-blue-600 hover:text-blue-800">
                            {{ $po->po_number }},
                        </a>
                    @endforeach
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                    @foreach (DB::table('po_in_item')->where('item_number', $item->item_number)->select('ma_number','po_number')->distinct()->get() as $ma)
                        <a href="{{ route('ma-detail', ['po_id' => $ma->po_number, 'ma_id' => $ma->ma_number]) }}" class="text-blue-600 hover:text-blue-800">
                            {{ $ma->ma_number }},
                        </a>
                    @endforeach
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                    @foreach (DB::table('po_smr_item')->where('item_number', $item->item_number)->select('smr_number','po_number')->distinct()->get() as $smr)
                        <a href="{{ route('smr-detail', ['po_id' => $smr->po_number, 'smr_id' => $smr->smr_number]) }}" class="text-blue-600 hover:text-blue-800">
                            {{ $smr->smr_number }},
                        </a>
                    @endforeach
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                    @foreach (DB::table('po_out_item')->where('item_number', $item->item_number)->select('voucher_number')->distinct()->get() as $voucher)
                        <a href="{{ route('voucher-detail', ['voucher_id' => $voucher->voucher_number]) }}" class="text-blue-600 hover:text-blue-800">
                            {{ $voucher->voucher_number }},
                        </a>
                    @endforeach
                </td>
                
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
