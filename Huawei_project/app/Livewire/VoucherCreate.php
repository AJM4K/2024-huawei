<?php

namespace App\Livewire;

use App\Models\Voucher;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class VoucherCreate extends Component
{
    use WithFileUploads;
    public $poId;
    public $smrId;
    public $image;
    public $voucher_number;

    // For manually adding items
    public $itemNumber;
    public $itemDescription;
    public $itemQuantity;

    public $selectedItems = []; // Items the user adds manually

    public function mount($po_id, $smr_id)
    {
        $this->poId = $po_id;
        $this->smrId = $smr_id;
    }

    public function addItem()
    {
        // Validate item data
        $this->validate([
            'itemNumber' => 'required|string',
            'itemDescription' => 'nullable|string',
            'itemQuantity' => 'required|integer|min:1',
        ]);

        // Add item to selected items list
        $this->selectedItems[] = [
            'item_number' => $this->itemNumber,
            'description' => $this->itemDescription,
            'quantity' => $this->itemQuantity,
        ];

        // Clear input fields
        $this->itemNumber = '';
        $this->itemDescription = '';
        $this->itemQuantity = '';
    }

    public function removeItem($index)
    {
        unset($this->selectedItems[$index]);
        $this->selectedItems = array_values($this->selectedItems); // Reindex array
    }

    public function createVoucher()
    {
        // Check that image is uploaded
        if (!$this->image) {
            session()->flash('error', 'No image was uploaded.');
            return;
        }

        // Validate the image
        $this->validate([
            'image' => 'required|image|max:1024', // Validate that it is an image and max size is 1MB
        ]);

        // Attempt to store the image
        try {
            $imageExtension = $this->image->getClientOriginalExtension();
            $imageNameStored = $this->poId . '_' . $this->smrId . '_' . $this->voucher_number . '.' . $imageExtension;
            // use the store as when want to use the symlink 
             $imagePath = $this->image->storeAs('voucher_images', $imageNameStored, 'public');

         //   $destinationPath = public_path('voucher_images'); // This will place it directly in the 'public/voucher_images' directory
         //   $imagePath = $destinationPath . '/' . $imageNameStored;
           // $this->image->move($destinationPath, $imageNameStored);
            if (!$imagePath) {
                session()->flash('error', 'Image storage failed.');
                return;
            }
            // Create the voucher record with the image path
            $voucher = Voucher::create([
                'po_number' => $this->poId,
                'smr_number' => $this->smrId,
                'voucher_id' => $this->voucher_number,
                'voucher_image' => 'voucher_images/' . $imageNameStored,
            ]);

            // Loop through selected items and create `PoOutItem` records
            foreach ($this->selectedItems as $item) {
                DB::table('po_out_item')->insert([
                    'po_number' => $this->poId,
                    'item_number' => $item['item_number'],
                    'smr_number' => $this->smrId,
                    'voucher_number' => $voucher->voucher_id,
                    'quantity_delivered' => $item['quantity'],
                ]);
            }

            // Clear the selected items and show a success message
            $this->selectedItems = [];
            session()->flash('message', 'Voucher created successfully.');
        } catch (\Exception $e) {
            session()->flash('error', 'An error occurred: ' . $e->getMessage());
        }
    }
    public function render()
    {

        return view('livewire.voucher-create', [
            'selectedItems' => $this->selectedItems,
        ]);
    }
}
