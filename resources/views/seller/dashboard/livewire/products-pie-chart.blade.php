<div class="w-full my-4 flex flex-col md:flex-row justify-start gap-8">
    <div class="p-4 md:w-full lg:w-full overflow-hidden bg-white rounded-lg shadow-md">
        <h1 class="mb-8 text-xl text-center font-semibold">Products By <span class="text-pink-500">Category</span></h1>

        <div id="chart_seller_products_by_category" class="min-h-[35vh] md:min-h-[25vh] lg:min-h-[30vh]"></div>
        
        <script type="text/javascript" defer>
            window.onresize = drawChart;
            google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart()
            {
                let categories = {{ Js::from($seller_products_category) }};
                let countData = {{ Js::from($seller_products_count) }};
                
                let chart = {
                    'categories' : [],
                    'count' : []
                };

                for(let i = 0; i < {{Js::from($countData)}}; i++) {
                    chart['categories'].push(categories[i]);
                    chart['count'].push(countData[i]);
                };

                let dataTable = new google.visualization.DataTable();
                dataTable.addColumn('string', 'Categories');
                dataTable.addColumn('number', 'Product Count');

                for(let i = 0; i < {{Js::from($countData)}}; i++)
                {
                    dataTable.addRow([chart['categories'][i], Number(chart['count'][i])]);
                }

                console.log(dataTable);

                let options = {
                    pieHole: 0.4,
                    is3D: false
                };

                chart = new google.visualization.PieChart(document.getElementById('chart_seller_products_by_category'));
                chart.draw(dataTable, options);

            }
        </script>
    </div>
</div>