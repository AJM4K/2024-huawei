<div>
    <h1> import file </h1>

    @if (session()->has('message'))
        <div class="bg-green-100 border border-green-400 p-3 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <div class="mt-4">
        <h2 class="font-semibold mb-2">Upload Material Inspection File</h2>
        <input type="file" class="form-control border border-gray-300 rounded-md p-2" wire:model="materialInspectionFile" id="materialInspectionFile">
        @error('materialInspectionFile') <span class="text-danger">{{ $message }}</span> @enderror
    </div>


    <div class="mt-4">
        <h2 class="font-semibold mb-2">Upload Sub Material Request File</h2>
        <input type="file" class="form-control border border-gray-300 rounded-md p-2" wire:model="subMaterialRequestFile" id="subMaterialRequestFile">
        @error('subMaterialRequestFile') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mt-4">
        <button id="upload-button" class="bg-blue-500 text-white hover:bg-blue-700 font-bold py-2 px-4 rounded" wire:click="uploadFiles">Upload Files</button>
    </div>

    <script>
        const uploadButton = document.getElementById('upload-button');
        const fileInputs = document.querySelectorAll('input[type="file"]');

        uploadButton.addEventListener('click', () => {
            fileInputs.forEach((input) => {
                input.value = '';
            });
        });
    </script>
</div>

