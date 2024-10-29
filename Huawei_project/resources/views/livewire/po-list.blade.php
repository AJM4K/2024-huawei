<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-6">Purchase Orders</h1>
    
    <h2 class="text-lg font-semibold mb-4">Existing Purchase Orders</h2>
    <div class="flex justify-between items-center mb-4">
        <input type="search" class="form-control border border-gray-300 rounded-md p-2" wire:model.live="searchQuery" placeholder="Search..." aria-label="Search">
    </div>
    <div class="overflow-x-auto shadow rounded-lg border border-gray-200 bg-white">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        PO Number
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        total items
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                         items in 
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        total items out
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($pos as $po)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ $po->po_number }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            {{ DB::table('po_in_item')
                                ->where('po_number', $po->po_number )->sum('quantity_in') }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            {{ DB::table('po_in_item')
                                ->where('po_number', $po->po_number )->sum('quantity_in') - DB::table('po_out_item')
                                ->where('po_number', $po->po_number )->sum('quantity_delivered') }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            {{ DB::table('po_out_item')
                                ->where('po_number', $po->po_number )->sum('quantity_delivered') }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <a href="{{ route('po-detail', ['po_id' => $po->po_number]) }}" class="text-blue-600 hover:text-blue-800">
                                View Details
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
