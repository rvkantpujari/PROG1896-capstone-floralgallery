<div class="p-4">
    <h1 class="mb-8 text-lg text-center font-semibold">New <span class="text-pink-400">Customers</span></h1>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>

    <div id="chart_div" class="min-h-[35vh] md:min-h-[25vh] lg:min-h-[30vh]"></div>
    
    <script type="text/javascript" defer>
        window.onresize = drawChart;
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {
            let labelsAlpha =  ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            
            let months = {{ Js::from($customers_joined_labels) }};
            let count = {{ Js::from($customers_joined_data) }};
            
            let chart = {
                'month' : [],
                'count' : []
            };

            let d = 0;
            labelsAlpha.forEach((label, i) => {
                chart['month'].push(label);
                chart['count'].push(months.includes(i+1) ? count[d++] : 0);
            });

            let dataTable = new google.visualization.DataTable();
            dataTable.addColumn('string', 'Months');
            dataTable.addColumn('number', 'New Customers');

            for(let i=0; i<11; i++)
            {
                // adding data in chart for display purpose
                dataTable.addRow([chart['month'][i], chart['count'][i]]);
            }

            let options = {
                legend: { position: "none" },
                chart: {
                    title: 'Customers Joined in ' + (new Date().getFullYear()),
                },
            };

            chart = new google.charts.Bar(document.getElementById('chart_div'));
            chart.draw(dataTable, google.charts.Bar.convertOptions(options));
        }
    </script>
</div>
