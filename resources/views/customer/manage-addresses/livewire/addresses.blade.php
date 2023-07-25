<div class="px-4 my-8 grid grid-cols-12 gap-8 md:gap-6">
    <form action="{{route('customer.address.show')}}" method="get" class="col-span-12 md:col-span-4 lg:col-span-3 border-2 border-dashed rounded-md border-gray-500">
        @csrf
        <button type="submit" class="h-[10vh] md:h-[16vh] lg:h-[25vh] w-full transition duration-300 hover:scale-105 hover:text-pink-400">
            <div class="flex flex-col justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6 self-center">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg> 
                <div class="text-lg md:text-xl lg:text-2xl font-semibold">Add Address</div>
            </div>
        </button>
    </form>
    @foreach ($addresses as $address)
        <div class="mx-auto h-[20vh] w-full md:h-[18vh] lg:h-[25vh] col-span-12 md:col-span-4 lg:col-span-3 border border-gray-500 rounded-md flex flex-col justify-between items-center hover:shadow-xl">
            <div class="h-full flex flex-col px-6 py-8">
                <span class="font-semibold">{{$address->user_full_name}}</span>
                <span>@if ($address->unit){{$address->unit}}-@endif{{$address->street_number}} {{$address->street_name}}</span>
                <span>{{$address->city}}, {{$address->province}} {{$address->postal_code}}</span>
            </div>
            <div class="w-full flex gap-x-4 items-center justify-around px-4 py-1.5 text-center text-gray-200 bg-gray-700 rounded-b-md">
                <form action="{{route('customer.address.edit')}}" method="get">
                    @csrf
                    <input type="hidden" name="user_address_id" value="{{$address->id}}">
                    <button type="submit" class="hover:text-pink-400">Edit</button>
                </form>
                <form action="{{route('customer.address.destroy')}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="user_address_id" value="{{$address->id}}">
                    <button type="submit" class="show_confirm hover:text-pink-400" data-toggle="tooltip" title='Remove'>Remove</button>
                </form>
                @if ($address->is_default)
                    <div class="hover:text-pink-400">Default</div>
                @endif
            </div>
        </div>
    @endforeach
</div>

@if (session()->has('added-user-address'))
    <script>
        swal("Address Added!! 😀🎉", "{{session('added-user-address')}}", "success", {
            button:true,
            button:"OK",
        });
    </script>
@elseif (session()->has('updated-user-address'))
    <script>
        swal("Address Updated!! 😀🎉", "{{session('updated-user-address')}}", "success", {
            button:true,
            button:"OK",
        });
    </script>
@elseif (session()->has('deleted-user-address'))
    <script>
        swal("Address Deleted!!", "{{session('deleted-user-address')}}", "error", {
            button:true,
            button:"OK",
        });
    </script>
@endif
<script defer>
    document.addEventListener('DOMContentLoaded', () => {
        $('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: 'Are you sure? 😥',
                text: "You won't be able to revert this action!",
                icon: 'warning',
                buttons: {
                    cancel: true,
                    confirm: {
                        text: "Yes, delete it!",
                        value: true,
                        className: "bg-red-500 hover:bg-red-700",
                    },
                }
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    }, false);
</script>
