<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-6">Dashboard</h1>

    <div class="grid grid-cols-3 gap-4">
        <div class="bg-white shadow rounded-lg p-6 border border-gray-200">
            <h3 class="text-lg font-semibold mt-4 mb-2">PO</h3>
            <p class="text-3xl font-bold">{{ $po_count }}</p>
        </div>

        <div class="bg-white shadow rounded-lg p-6 border border-gray-200">
            <h3 class="text-lg font-semibold mt-4 mb-2">MA</h3>
            <p class="text-3xl font-bold">{{ $ma_count }}</p>
        </div>

        <div class="bg-white shadow rounded-lg p-6 border border-gray-200">
            <h3 class="text-lg font-semibold mt-4 mb-2">SMR</h3>
            <p class="text-3xl font-bold">{{ $smr_count }}</p>
        </div>

        <div class="bg-white shadow rounded-lg p-6 border border-gray-200">
            <h3 class="text-lg font-semibold mt-4 mb-2">Vouchers</h3>
            <p class="text-3xl font-bold">{{ $voucher_count }}</p>
        </div>

       
    </div>
</div>