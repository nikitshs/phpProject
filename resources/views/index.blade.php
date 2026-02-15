<x-main-layout>
    <x-slot:title>
        New page
    </x-slot>
    <p>this is a content of page</p>

    @for($i = 0; $i < 10; $i++)
        @php
            $type = rand(1,3)
        @endphp
        <x-status :type=$type>
            @if($type==1)
                новый
            @elseif($type==1)
                подтвержденео
            @else
                отклонено
            @endif
        </x-status>
    @endfor
</x-main-layout>