<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-6">MA List</h1>

    <div class="overflow-x-auto">
        <table class="table-auto w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">MA Code</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">PO Code</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Warehouse</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mas as $ma)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            <a href="{{ route('ma-detail', ['ma_code' => $ma->ma_code]) }}">
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

