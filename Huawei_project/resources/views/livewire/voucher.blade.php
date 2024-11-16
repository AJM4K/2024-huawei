<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-6">Voucher List</h1>

    <div class="overflow-x-auto">
        <table class="table-auto w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Voucher Code</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">PO Code</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SMR Code</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vouchers as $voucher)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            <a href="{{ route('voucher-detail', ['voucher_code' => $voucher->voucher_code]) }}">
                                {{ $voucher->voucher_code }}
                            </a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $voucher->po_code }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $voucher->smr_code }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
