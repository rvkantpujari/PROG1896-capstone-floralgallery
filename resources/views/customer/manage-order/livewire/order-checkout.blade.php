<div class="my-8 py-8 grid grid-cols-12 gap-8 md:gap-4">
    <div class="col-span-full md:col-span-8">
        <div class="space-y-4">
            <details class="group [&_summary::-webkit-details-marker]:hidden" open>
                <summary class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900">
                    <h2 class="font-semibold text-lg capitalize">Delivery Address</h2>
                
                    <svg class="h-5 w-5 shrink-0 transition duration-300 group-open:-rotate-180"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </summary>

                <p class="mt-4 px-4 leading-relaxed text-gray-700">
                    <div class="text-lg px-2">Select the delivery address.</div>
                    <div class="text-sm px-2">Your order will be delivered at your <span class="font-semibold">default</span> address.</div>
                </p>
            
                <p class="mt-4 px-4 leading-relaxed text-gray-700">
                    @livewire('customer.addresses')
                </p>
            </details>
          
            <details class="group [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900">
                    <h2 class="font-semibold text-lg capitalize">Select a payment method</h2>
                
                    <svg class="h-5 w-5 shrink-0 transition duration-300 group-open:-rotate-180"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </summary>
            
                <p class="mt-4 px-4 leading-relaxed text-gray-700">
                    <div class="text-lg px-2">Pay at the time of delivery.</div>
                    <div class="text-sm px-2">As of now, only <span class="font-semibold">COD (Cash On Delivery) method</span> is available.</div>
                </p>
            </details>
        </div>
        <form class="my-8 hidden md:block">
            <input type="submit" value="Place Order" class="px-4 py-2 text-white bg-pink-400 hover:transition hover:scale-105 hover:bg-pink-500 hover:cursor-pointer rounded-md">
        </form>
    </div>
    <div class="col-span-full md:col-span-4">
        <div class="border p-4 rounded-md">
            <div class="font-semibold text-xl border-b pb-2">
                Order Summary
            </div>
            <div class="py-4">
                <div class="flow-root">
                    <div>
                        <div class="font-semibold">Product(s)</div>
                        <dl class="divide-y divide-gray-100 text-sm py-2 border-b">
                            @foreach ($products as $product)
                                <div class="p-2 text-gray-700 even:bg-gray-50 flex justify-between">
                                    <dd>{{$product->quantity}} x {{$product->product_name}}</dd>
                                    <dd>CA$ {{$product->product_price}}</dd>
                                </div>
                            @endforeach
                        </dl>
                        <div class="p-2 flex justify-between text-gray-700 font-semibold">
                            <div>Subtotal</div>
                            <div>CA$ {{$subtotal}}</div>
                        </div>
                    </div>
                    <div class="pt-4">
                        <div class="font-semibold">Tax Summary</div>
                        <dl class="divide-y divide-gray-100 text-sm py-2 border-b">
                            @if($default_address === null)
                                <div class="p-2">
                                    <dd class="text-red-500 text-center font-semibold">Please select the default delivery address.</dd>
                                </div>
                            @else
                                @isset ($taxes['gst'])
                                    <div class="p-2 even:bg-gray-50 flex justify-between">
                                        <dd class="text-gray-700 text-center font-semibold">GST:</dd>
                                        <dd class="text-gray-700 text-center font-semibold">{{$taxes['gst']}}%</dd>
                                    </div>
                                @endisset
                                @isset ($taxes['pst'])
                                    <div class="p-2 even:bg-gray-50 flex justify-between">
                                        <dd class="text-gray-700 text-center font-semibold">PST:</dd>
                                        <dd class="text-gray-700 text-center font-semibold">{{$taxes['pst']}}%</dd>
                                    </div>
                                @endisset
                                @isset ($taxes['hst'])
                                    <div class="p-2 even:bg-gray-50 flex justify-between">
                                        <dd class="text-gray-700 text-center font-semibold">HST:</dd>
                                        <dd class="text-gray-700 text-center font-semibold">{{$taxes['hst']}}%</dd>
                                    </div>
                                @endisset
                            @endif
                        </dl>
                        <div class="p-2 flex justify-between text-gray-700 font-semibold">
                            <div>Tax amount:</div>
                            <div>CA$ {{$total_tax}}</div>
                        </div>
                    </div>
                    <div class="mt-4 p-2 flex justify-between text-xl md:text-[16px] lg:text-xl font-semibold">
                        <span class="text-pink-500">Order Total:</span>
                        <span>CAD$ {{$total}}</span>
                    </div>
                </div>
            </div>
        </div>
        <form class="my-8 md:hidden">
            <input type="submit" value="Place Order" class="px-4 py-2 text-white bg-pink-400 hover:transition hover:scale-105 hover:bg-pink-500 hover:cursor-pointer rounded-md">
        </form>
    </div>
</div>