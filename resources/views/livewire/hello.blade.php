<div class="container">
    <div style="display: flex">
        <div>
            <label for="">Division</label><br>
            <select class="form-control" name="" id="" wire:change="changeEvent($event.target.value)">
                <option value="">Select Division</option>
                @foreach ($divisions as $division)
                    <option value="{{ $division->id }}">{{ $division->bn_name }}</option>
                @endforeach
            </select>

        </div>

        @empty($districts)
        @else
            <div>
                <label for="">District</label><br>

                <select class="form-control" name="" id=""
                    wire:change="changeEventDistrict($event.target.value)">
                    <option value="" selected>Select District</option>
                    @forelse ($districts as $district)
                        <option value="{{ $district->id }}">{{ $district->bn_name }}</option>
                    @empty
                    @endforelse
                </select>
            </div>
        @endempty

        @empty($upazilas)
        @else
            <div>
                <label for="">Upazila</label><br>

                <select class="form-control" name="" id=""
                    wire:change="changeEventUpazila($event.target.value)">
                    <option value="" selected>Select Upazila</option>
                    @forelse ($upazilas as $upazila)
                        <option value="{{ $upazila->id }}">{{ $upazila->bn_name }}</option>
                    @empty
                    @endforelse
                </select>
            </div>
        @endempty


        @empty($unions)
        @else
            <div>
                <label for="">Union</label><br>

                <select class="form-control" name="" id="">
                    <option value="" selected>Select Union</option>
                    @forelse ($unions as $union)
                        <option value="{{ $union->id }}">{{ $union->bn_name }}</option>
                    @empty
                    @endforelse
                </select>
            </div>
        @endempty
    </div>

</div>

