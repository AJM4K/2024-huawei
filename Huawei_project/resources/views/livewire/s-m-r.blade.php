<div class="overflow-x-auto">
    <table class="table-auto w-full">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SMR Code</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">PO Code</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Warehouse</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Warehouse Location</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sub Contract</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SMR Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($smrs as $s_m_r)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        <a href="{{ route('smr-detail', ['smr_code' => $s_m_r->smr_code]) }}">
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
