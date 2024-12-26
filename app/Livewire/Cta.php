<?php

namespace App\Livewire;

use App\Lead;
use Livewire\Component;

class Cta extends Component
{
    public $canvas = false;
    public $scroll = 53;
    public $expiry_date;

    public $name, $mobile;

    // Ensure the listener method is correctly set
    protected $listeners = [
        'showCanvas',
        'hideCanvas',
        'openOfferCanvas',
    ];


    protected function queryString()
    {
        return [
            'canvas' => [
                'as' => 'o',
            ],
        ];
    }

    public function openOfferCanvas()
    {
        $this->canvas = true;
    }
    public function mount()
    {
        $this->canvas = false;

        $currentDate = \Carbon\Carbon::now();
        $dayOfMonth = $currentDate->day;

        // Determine expiry date based on the current date
        if ($dayOfMonth >= 1 && $dayOfMonth <= 14) {
            $expiryDate = $currentDate->copy()->setDay(15); // Set to the 15th of the current month
        } else {
            $expiryDate = $currentDate->copy()->endOfMonth(); // Set to the last day of the month
        }

        // Format the expiry date with the ordinal suffix
        $this->expiry_date = $expiryDate->format('j') . $this->getOrdinal($expiryDate->day) . ' ' . $expiryDate->format('F Y');
    }

    private function getOrdinal($number)
    {
        if (!in_array($number % 100, [11, 12, 13])) {
            switch ($number % 10) {
                case 1:
                    return 'st';
                case 2:
                    return 'nd';
                case 3:
                    return 'rd';
            }
        }
        return 'th';
    }

    public function showCanvas()
    {
        $this->canvas = true;
    }

    public function hideCanvas()
    {
        $this->canvas = false;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'mobile' => 'required|digits:10',
        ];
    }

    public function submitlead()
    {
        $this->validate();

        $lead = new Lead();
        $lead->name = $this->name;
        $lead->mobile = $this->mobile;
        $lead->save();

        return redirect()->route('welcome')->with([
            'alert-message' => 'Your contact information shared successfully with the iCommerce sales team.',
            'alert-type' => 'success',
        ]);
    }

    public function render()
    {
        return view('livewire.cta');
    }
}
