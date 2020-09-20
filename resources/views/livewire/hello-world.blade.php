<div>
    <input wire:model="name" type="text">
    <select wire:model='greeting'>
        <option>Goodbye</option>
        <option>Hello</option>
        <option>Adios</option>
    </select>
    <input wire:model="loud" type="checkbox">{{$greeting}} {{$name}} @if($loud) ! @endif<br>
</div>