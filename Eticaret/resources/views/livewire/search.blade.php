<div>
    <input type="text" wire:model="search" name="search" type="text" class="form control" list="mylist" placeholder="Search..">
    @if(!empty($query))
    <datalist id="mylist">
        @foreach($datalist as $dl)
        <option value="{{$dl->title}}"> {{$dl->category->title}} </option>
        @endforeach
    </datalist>
    @endif

    <!-- <input wire:model="search" name="search" list="mylist" class="form-control" placeholder="Search here..." type="text">
    <button type="submit"> <i class="fa fa-search"></i> </button> -->
</div>
