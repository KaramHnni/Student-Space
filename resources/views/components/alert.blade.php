@isset($type)
    @switch($type)
        @case('success')
            <div class="mx-8 font-bold mt-4 w-1/2 mx-auto p-4 bg-green-light text-white border-green border border-solid">
        @break

        @case('danger')
            <div class="mx-8 font-bold mt-4 w-1/2 mx-auto p-4 bg-red-light text-white border-red-light border border-solid">

        @break
    @endswitch
@endisset
        <p>{{$content}}<p>
        </div>