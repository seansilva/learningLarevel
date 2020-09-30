<div>
    <input wire:model="name" type="text">
    <select wire:model="greeting" multiple>
        <option>Goodbye</option>
        <option>Hello</option>
        <option>Adios</option>
    </select>
    <input wire:model="loud" type="checkbox">
    {{implode(', ',$greeting)}} {{$name}} @if($loud) ! @endif<br>
    <form action="#" wire:submit.prevent="$set('name','Bingo')">
        <button>ResetName</button>
    </form>
    {{-- <button wire:click="resetName($event.target.innerText)"> ResetName</button> --}}
</div>

