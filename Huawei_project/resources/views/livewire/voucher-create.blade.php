<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Create Voucher for PO: {{ $poId }} | SMR: {{ $smrId }}</h1>

    <!-- Flash message for success -->
    @if (session()->has('message'))
        <div class="alert alert-success mb-4">{{ session('message') }}</div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-success mb-4">{{ session('error') }}</div>
    @endif

    <h3 class="text-lg font-semibold mt-4 mb-2">Add Image</h3>
    <div class="flex space-x-2 mb-4">
    <input type="file" class="form-control border border-gray-300 rounded-md p-2" wire:model="image">
    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<!-- Optional: Show image preview -->
@if ($image)
    <div class="mt-2">
        <img src="{{ $image->temporaryUrl() }}" alt="Selected Image" class="w-32 h-32 object-cover">
    </div>
@endif
    <div class="flex-1">
            <input type="text" class="form-control border border-gray-300 rounded-md p-2" placeholder="Voucher Number" wire:model.live="voucher_number">
        </div>
    <h3 class="text-lg font-semibold mt-4 mb-2">Add Item</h3>
    <div class="flex space-x-2 mb-4">
    <div class="flex-1">
    <div class="relative">
        <select id="itemNumber" class="block appearance-none w-full bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out py-2 pl-3 pr-10 text-gray-900 leading-tight hover:border-blue-400" wire:model="itemNumber">
            <option value="" disabled selected>Select Item Number</option>
            <?php
                use Illuminate\Support\Facades\DB;
                $poSmrItems = DB::table('po_smr_item')
                    ->where('po_number', $poId)
                    ->where('smr_number', $smrId)
                    ->get();
            ?>
            @foreach ($poSmrItems as $poSmrItem)
                <option value="{{ $poSmrItem->item_number }}">{{ $poSmrItem->item_number }}</option>
            @endforeach
        </select>
        <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
            <svg class="w-4 h-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 10l5 5 5-5H7z"/>
            </svg>
        </div>
    </div>
    @error('itemNumber') 
        <span class="text-sm text-red-600 mt-1">{{ $message }}</span> 
    @enderror
</div>

        <div class="flex-1">
            <input type="text" class="form-control border border-gray-300 rounded-md p-2" placeholder="Description" wire:model="itemDescription">
            @error('itemDescription') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="flex-1">
            <input type="number" class="form-control border border-gray-300 rounded-md p-2" placeholder="Quantity" wire:model="itemQuantity">
            @error('itemQuantity') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="flex items-center">
            <button class="bg-blue-500 text-white hover:bg-blue-700 font-bold py-2 px-4 rounded" wire:click="addItem">Add Item</button>
        </div>
    </div>



    <h3 class="text-lg font-semibold mt-4 mb-2">Selected Items</h3>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="w-full bg-gray-200 text-gray-700 uppercase text-sm leading-normal">
                    <th class="py-3 px-4 text-left">Item Number</th>
                    <th class="py-3 px-4 text-left">Description</th>
                    <th class="py-3 px-4 text-left">Quantity</th>
                    <th class="py-3 px-4 text-left">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @forelse ($selectedItems as $index => $selectedItem)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-4">{{ $selectedItem['item_number'] }}</td>
                        <td class="py-3 px-4">{{ $selectedItem['description'] ?? 'No Description' }}</td>
                        <td class="py-3 px-4">{{ $selectedItem['quantity'] }}</td>
                        <td class="py-3 px-4">
                            <button class="bg-red-500 text-white hover:bg-red-700 font-bold py-1 px-2 rounded" wire:click="removeItem({{ $index }})">
                                Remove
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="py-3 px-4 text-center">No items selected.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <button class="bg-green-500 text-white hover:bg-green-700 font-bold py-2 px-4 rounded mt-4" wire:click="createVoucher">Create Voucher</button>
</div>
