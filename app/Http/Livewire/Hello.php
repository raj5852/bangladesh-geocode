<?php

namespace App\Http\Livewire;

use App\Models\District;
use App\Models\Division;
use App\Models\Union;
use App\Models\Upazila;
use App\Models\User;
use Livewire\Component;

class Hello extends Component
{
    public $divisions, $districts = [], $upazilas = [], $unions = [];

    function mount()
    {
        $this->divisions = Division::all();
    }

    function changeEvent($val)
    {
        if (empty($val)) {
            $this->districts = [];
            $this->upazilas = [];
            $this->unions = [];
        } else {
            $this->districts =  District::where('division_id', $val)->get();
            $this->upazilas = [];
            $this->unions = [];
        }
    }

    function changeEventDistrict($value)
    {
        if (empty($value)) {

            $this->upazilas = [];
            $this->unions = [];
        } else {
            $this->upazilas =  Upazila::where('district_id', $value)->get();
            $this->unions = [];

        }
    }

    function changeEventUpazila($value)
    {
        if (empty($value)) {

            $this->unions = [];
        } else {
            $this->unions = Union::where('upazilla_id', $value)->get();
        }
    }

    public function render()
    {
        return view('livewire.hello');
    }
}
