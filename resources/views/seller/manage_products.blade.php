@extends('seller.layouts.app')

@section('title', 'Seller - Manage Products | FloralGallery')

@section('css-styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    <style>
        select {
            width: 50px;
        }
    </style>
@endsection

@section('main-content')
    {{-- Add Main Section Here!!! --}}
    <section class="container m-8 pt-4">
        <div class="flex flex-col md:flex-row items-center md:justify-between">
            <h1 class="text-center lg:text-left text-[26px] font-semibold">Manage Products</h1>
            @if (auth()->user()->status != 'suspended' && Auth::user()->email_verified_at != null)
                <a href="{{route('seller.product.add')}}" class="px-[16px] py-[8px] md:mr-8 rounded-md text-white bg-pink-500">Add Product</a>
            @endif
        </div>
        <div class="pt-8">
            @if(Auth::user()->email_verified_at == null)
                <div class="w-full md:w-3/5 lg:w-2/5 mx-auto py-20">
                    <article class="rounded-xl border-2 border-gray-100 bg-white shadow-lg">
                        <div class="flex items-start gap-4 md:p-4 p-6 lg:p-8">
                            <div>
                                <h3 class="flex items-center gap-2 font-medium text-xl hover:underline">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                    </svg>
                                    Attention Required
                                </h3>
                            
                                <p class="mt-2 line-clamp-2 text-sm text-gray-700">
                                    To access all features conveniently, please <strong>verify</strong> your email.
                                </p>
                                
                                <p class="mt-4 text-xs">
                                    <a href="{{route('seller.profile.edit')}}" title="Verify Email" class="inline-block border border-pink-300 bg-pink-400 text-white rounded px-4 py-2 text-sm font-medium hover:bg-green-50 hover:border-green-300 hover:text-green-800 focus:relative">
                                        Verify Email
                                    </a>                 
                                </p>
                            </div>
                        </div>
                    
                        <div class="flex justify-end">
                            <strong class="-mb-[2px] -me-[2px] inline-flex items-center gap-1 rounded-ee-xl rounded-ss-xl bg-red-600 px-3 py-1.5 text-white">
                                <span class="text-[14px] font-medium">Not Verified!</span>
                            </strong>
                        </div>
                    </article>
                </div>
            @else
                @livewire('seller.products')
            @endif
        </div>
    </section>
@endsection

@section('js-scripts')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.0/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.0.3/js/buttons.print.min.js"></script>

    <script>
        let provinceTable = $('#products').DataTable({
            dom: '<"my-4 py-4"lf><"mt-4 py-8"rt><"mb-4 py-4"Bp>',
            buttons: [
                'colvis',
                {
                    extend: 'copyHtml5',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'pdf',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: ':visible'
                    }
                }
            ],
            "lengthMenu": [ 5, 10, 15 ],
            "language": {
                "emptyTable": "Start selling by listing the products you want to sell. 🌺"
            }
        });
    </script>
@endsection