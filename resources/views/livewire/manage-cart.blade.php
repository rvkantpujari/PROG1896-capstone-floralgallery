<div class="py-12 px-8">
    @foreach ($products as $product)
        <div class="flex gap-x-4 py-6">
            <div class="flex flex-col md:flex-row gap-6">
                <a href="{{route('product.view', ['product_id' => $product->product_id])}}">
                    <img src="{{asset($product->product_img1)}}" class="h-28 w-40 rounded object-cover transition duration-300 hover:scale-105"
                        alt="{{$product->product_name}}" title="{{$product->product_name}}" loading="lazy" />

                    <div class="mt-1 font-semibold">
                        <h3 class="text-md md:text-lg text-gray-900 font-semibold">
                            {{$product->product_name}}
                        </h3>

                        <div class="mt-0.5 space-y-px text-[14px] md:text-[16px] text-pink-400">
                            {{$product->category}}
                        </div>
                    </div>
                </a>
            </div>

            <div class="flex flex-1 items-center md:-mt-8 justify-end gap-4">
                <div class="flex flex-col md:flex-row items-center gap-x-8 gap-y-6">
                    <form action="{{route('cart.remove.product')}}" method="POST" class="md:order-3">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="product_id" value="{{$product->product_id}}">
                        <button title="Remove Product" class="p-2 text-gray-600 transition self-center border border-gray-600 rounded md:order-3 hover:text-red-600 hover:border-red-600">
                            <span class="sr-only">Remove item</span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                />
                            </svg>
                        </button>
                    </form>

                    <form class="md:order-2">
                        <label for="Line2Qty" class="sr-only"> Quantity </label>

                        <div x-data="{ productQuantity: {{$product->quantity}} }">
                            <label for="Quantity" class="sr-only"> Quantity </label>
                            <div class="flex items-center border border-gray-200 rounded">
                                <button type="button" x-on:click="productQuantity--" :disabled="productQuantity === 1" class="w-10 h-10 leading-10 font-semibold text-[22px] text-gray-600 transition hover:opacity-75">&minus;</button>
                                <input type="number" id="product_quantity" x-model="productQuantity" readonly class="h-10 w-16 border-transparent text-center [-moz-appearance:_textfield] sm:text-sm"/>
                                <button type="button" x-on:click="productQuantity++" class="w-10 h-10 leading-10 font-semibold text-[22px] text-gray-600 transition hover:opacity-75">&plus;</button>
                            </div>
                        </div>
                    </form>

                    <div class="self-center font-semibold md:order-1">
                        CA${{$product->product_price * $product->quantity}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="mt-8 flex justify-end border-t border-gray-100 pt-8">
        <div class="w-screen max-w-lg space-y-4">
            <dl class="space-y-0.5 py-2 mx-2 md:mx-6 text-gray-700 text-xl font-semibold">
                <div class="flex justify-between">
                    <dt>Subtotal ({{count($products)}} @if (count($products) > 1) items) @else item) @endif</dt>
                    <dd class="font-bold">CA${{$subtotal}}</dd>
                </div>
            </dl>

            <div class="flex justify-end gap-4">
                <button class="rounded-md bg-pink-400 px-5 py-3 text-md text-gray-100 font-semibold hover:transition hover:scale-105 hover:bg-pink-500">
                    Proceed to Buy
                </button>
            </div>
        </div>
    </div>
</div>