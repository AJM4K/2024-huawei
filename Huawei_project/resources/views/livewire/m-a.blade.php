<div class="container mx-auto mt-8 px-4">
    <h1 class="text-3xl font-semibold text-gray-900 mb-6">MA List</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">MA Code</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">PO Code</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Warehouse</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($mas as $ma)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            <a href="{{ route('ma-detail', ['ma_code' => $ma->ma_code]) }}" 
                               class="text-blue-600 hover:text-blue-800 transition duration-200">
                                {{ $ma->ma_code }}
                            </a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $ma->po_code }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $ma->warehouse }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
