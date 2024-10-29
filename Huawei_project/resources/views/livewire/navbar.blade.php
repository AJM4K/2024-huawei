<!-- resources/views/components/sidebar.blade.php -->
<div class="w-64 bg-gray-800 text-gray-100 p-4 h-full flex flex-col">
    <!-- Logo and Title -->
    <div class="flex items-center mb-6">
        <!-- <img src="{{ asset('logo.png') }}" alt="Logo" class="h-10 w-10"> -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
  <path fill-rule="evenodd" d="M2.25 6a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V6Zm3.97.97a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06-1.06l1.72-1.72-1.72-1.72a.75.75 0 0 1 0-1.06Zm4.28 4.28a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z" clip-rule="evenodd" />
</svg>

        <span class="text-2xl font-semibold ml-3">Dashboard</span>
    </div>
    
    <!-- Navigation -->
    <nav class="flex-1">
        <ul class="space-y-2">
            <!-- Dashboard Link -->
            <li>
                <a href="{{ route('dashboard') }}" 
                   class="flex items-center px-3 py-2 rounded-md text-gray-300 hover:bg-gray-700 hover:text-white transition ease-in-out duration-150">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    <span class="font-medium">Dashboard</span>
                </a>
            </li>

            <!-- PO List Link -->
            <li>
                <a href="{{ route('po-list') }}" 
                   class="flex items-center px-3 py-2 rounded-md text-gray-300 hover:bg-gray-700 hover:text-white transition ease-in-out duration-150">
                    <i class="fas fa-list mr-3"></i>
                    <span class="font-medium">PO List</span>
                </a>
            </li>

            <!-- MA List Link -->
            <li>
                <a href="{{ route('ma-list') }}" 
                   class="flex items-center px-3 py-2 rounded-md text-gray-300 hover:bg-gray-700 hover:text-white transition ease-in-out duration-150">
                    <i class="fas fa-file-alt mr-3"></i>
                    <span class="font-medium">MA List</span>
                </a>
            </li>

            <!-- SMR List Link -->
            <li>
                <a href="{{ route('smr-list') }}" 
                   class="flex items-center px-3 py-2 rounded-md text-gray-300 hover:bg-gray-700 hover:text-white transition ease-in-out duration-150">
                    <i class="fas fa-chart-bar mr-3"></i>
                    <span class="font-medium">SMR List</span>
                </a>
            </li>

            <!-- Voucher List Link -->
            <li>
                <a href="{{ route('voucher-list') }}" 
                   class="flex items-center px-3 py-2 rounded-md text-gray-300 hover:bg-gray-700 hover:text-white transition ease-in-out duration-150">
                    <i class="fas fa-chart-bar mr-3"></i>
                    <span class="font-medium">Voucher List</span>
                </a>
            </li>

              <!-- Item List Link -->
              <li>
                <a href="{{ route('items') }}" 
                   class="flex items-center px-3 py-2 rounded-md text-gray-300 hover:bg-gray-700 hover:text-white transition ease-in-out duration-150">
                    <i class="fas fa-chart-bar mr-3"></i>
                    <span class="font-medium">Item List</span>
                </a>
            </li>

            <!-- Import File Link -->
            <li>
                <a href="{{ route('import-file') }}" 
                   class="flex items-center px-3 py-2 rounded-md text-gray-300 hover:bg-gray-700 hover:text-white transition ease-in-out duration-150">
                    <i class="fas fa-upload mr-3"></i>
                    <span class="font-medium">Import File</span>
                </a>
            </li>
        </ul>

       
    </nav>
    
    <!-- Footer (Optional) -->
    <div class="mt-4 border-t border-gray-700 pt-4">
        <a href="#" class="flex items-center text-gray-400 hover:text-red-500 transition ease-in-out duration-150">
            <i class="fas fa-sign-out-alt mr-3"></i>
            <span>Huawei internal system</span>
        </a>
    </div>
</div>
