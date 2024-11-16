<div class="container mx-auto mt-8 px-4">
    <h1 class="text-3xl font-semibold text-gray-900 mb-6">SMR List</h1>


<div class="overflow-x-auto">
    <table class="min-w-full table-auto">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SMR Code</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">PO Code</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Warehouse</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Warehouse Location</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sub Contract</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SMR Status</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach ($smrs as $s_m_r)
                <tr class="hover:bg-gray-50 transition duration-200">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        <a href="{{ route('smr-detail', ['smr_code' => $s_m_r->smr_code]) }}" class="text-blue-600 hover:text-blue-800 transition duration-200">
                            {{ $s_m_r->smr_code }}
                        </a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $s_m_r->po_code }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $s_m_r->warehouse }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $s_m_r->warehouse_location }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $s_m_r->sub_contract }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $s_m_r->smr_status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>