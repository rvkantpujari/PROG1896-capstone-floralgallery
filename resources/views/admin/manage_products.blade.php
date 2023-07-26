@extends('admin.layouts.app')

@section('title', 'Admin - Manage Products | FloralGallery')

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
    <div class="w-full md:block" id="main">
        <div class="flex flex-col md:flex-row items-center md:justify-between">
            <h1 class="text-center lg:text-left text-[26px] font-semibold m-8 pt-4">Manage Products</h1>
            {{-- <a href="{{route('seller.product.add')}}" class="px-[16px] py-[8px] md:mr-8 rounded-md text-white bg-pink-500">Add Product</a> --}}
        </div>
        <div class="w-full px-8 flex justify-center">
            @livewire('admin.products')
        </div>
    </div>
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
                "emptyTable": "No seller has listed the products yet. 🌺"
            }
        });
    </script>
@endsection