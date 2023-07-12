<section class="container my-8">
    @if (session()->has('update-category-info'))
        <script>
            swal("Updated!! 😀🎉", "{{session('update-category-info')}}", "success", {
                button:true,
                button:"OK",
            });
        </script>
    @elseif (session()->has('delete-category-info'))
        <script>
            swal("Deleted!!", "{{session('delete-category-info')}}", "error", {
                button:true,
                button:"OK",
            });
        </script>
    @endif
    <div class="flex flex-col">
        <div class="-mx-4 -my-2 overflow-x-auto md:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-200 md:rounded-lg p-8">
                    <table id="categories" class="min-w-full p-2 divide-y divide-gray-200">
                        <thead class="bg-gray-5">
                            <tr>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500">
                                    <div class="flex items-center gap-x-3">
                                        <button class="flex items-center gap-x-2">
                                            <span>Category ID</span>
                                        </button>
                                    </div>
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm md:text-[16px] font-normal text-left rtl:text-right text-gray-500">
                                    <button class="flex items-center gap-x-2">
                                        <span>Category</span>
                                        <svg class="h-3" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                            <path d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                            <path d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                        </svg>
                                    </button>
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm md:text-[16px] font-normal text-left rtl:text-right text-gray-500">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($categories as $category)
                                <tr>
                                    <td class="px-4 py-4 text-sm md:text-[16px] font-medium whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <span>{{ $category->id }}</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm md:text-[16px] text-gray-500 whitespace-nowrap">
                                        {{$category->category}}
                                    </td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center justify-center gap-x-3">
                                            <form method="GET" action="{{route('admin.category.edit', ['id' => $category->id])}}">
                                                @csrf
                                                @method('patch')
                                                
                                                <button type="submit" class="text-white bg-gray-700 hover:bg-gray-900 font-semibold px-[16px] py-[8px] rounded-md transition-colors duration-200 focus:outline-none">
                                                    Edit
                                                </button>
                                            </form>
                                            
                                            <form method="GET" action="{{route('admin.category.destroy', ['id' => $category->id])}}">
                                                @csrf
                                                @method('patch')
                                                
                                                <button type="submit" class="show_confirm text-white font-semibold bg-red-400 px-[16px] py-[8px] rounded-md transition-colors duration-200 focus:outline-none" 
                                                    data-toggle="tooltip" title='Delete'>
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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
</section>