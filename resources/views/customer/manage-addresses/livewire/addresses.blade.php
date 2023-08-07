<div class="w-full my-4 py-4 flex justify-center">
    <div class="w-full md:w-auto flex flex-wrap gap-6">
        <form action="{{route('customer.address.show')}}" method="get" class="min-h-[12vh] md:h-[16vh] lg:min-h-[20vh] w-full md:w-[28vw] lg:w-[16vw] flex justify-center border-2 border-dashed rounded-md border-gray-500">
            @csrf
            <button type="submit" class="w-full transition duration-300 hover:scale-105 hover:text-pink-400">
                <div class="flex flex-col justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6 self-center">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg> 
                    <div class="text-xl font-semibold">Add Address</div>
                </div>
            </button>
        </form>
        @foreach ($addresses as $address)
            <div class="min-h-[12vh] md:h-[16vh] lg:min-h-[20vh] lg:min-w-[16vw] w-full md:w-auto text-center border border-gray-500 rounded-md flex flex-col justify-between items-center @if($user->default_address_id == $address->id) shadow-xl shadow-pink-200 @else hover:shadow-xl @endif">
                <div class="h-full w-full flex flex-col p-6">
                    <span class="font-semibold">{{$address->user_full_name}}</span>
                    <span>@if ($address->unit){{$address->unit}}-@endif{{$address->street_number}} {{$address->street_name}}</span>
                    <span>{{$address->city}}, {{$address->province}} {{$address->postal_code}}</span>
                </div>
                <div class="w-full flex gap-x-4 items-center justify-around px-4 py-1.5 text-gray-200 bg-gray-700 rounded-b-md">
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
                    @if ($user->default_address_id == $address->id)
                        <span class="font-semibold text-pink-400">Default</span>
                    @else
                        <form action="{{route('customer.set.defualt.address')}}" method="post">
                            @csrf
                            <input type="hidden" name="default_address_id" value="{{$address->id}}">
                            <button type="submit" class="hover:text-pink-400">Set Default</button>
                        </form>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
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
@elseif (session()->has('set-default-user-address'))
    <script>
        swal("Default Address Set!! ✅", "{{session('set-default-user-address')}}", "success", {
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
