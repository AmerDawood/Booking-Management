<!DOCTYPE html>
<html>
<head>
    <title>Charts Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- Bar Chart -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Bar Chart</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="bar" class="chartjs-chart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>

            <!-- Donut Chart -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Donut Chart</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="donut" class="chartjs-chart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Function to fetch and display data for the bar chart
        function fetchAndDisplayBarChartData() {
            $.ajax({
                url: "{{ route('getChartData') }}", // Replace with the actual route name
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    // Update the bar chart data with the retrieved data
                    barChart.data.labels = data.labels;
                    barChart.data.datasets[0].data = data.values;
                    barChart.update(); // Update the chart to reflect the changes
                },
                error: function () {
                    alert('Error fetching data for the bar chart.');
                }
            });
        }

        // Bar Chart Data (Initial data, will be updated by the fetchAndDisplayBarChartData function)
        var barData = {
            labels: [],
            datasets: [
                {
                    label: 'User Data',
                    data: [], // Data will be fetched dynamically
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)',
                    ],
                    borderWidth: 1,
                },
            ],
        };

        // Bar Chart Options
        var barOptions = {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        };

        // Create the Bar Chart
        var barCtx = document.getElementById('bar').getContext('2d');
        var barChart = new Chart(barCtx, {
            type: 'bar',
            data: barData,
            options: barOptions,
        });

        // Fetch and display data for the bar chart on page load
        fetchAndDisplayBarChartData();
    </script>


    {{-- <script>
        // Bar Chart Data (Replace with your actual data)
        var barData = {
            labels: ['Label 1', 'Label 2', 'Label 3','test'],
            datasets: [
                {
                    label: 'My Bar Chart',
                    data: [10, 20, 30,5], // Replace with your actual data
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)',
                    ],
                    borderWidth: 1,
                },
            ],
        };

        // Donut Chart Data (Replace with your actual data)
        var donutData = {
            labels: ['Label A', 'Label B', 'Label C'],
            datasets: [
                {
                    data: [40, 30, 20], // Replace with your actual data
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(255, 206, 86, 0.8)',
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)',
                    ],
                    borderWidth: 1,
                },
            ],
        };

        // Bar Chart Options
        var barOptions = {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        };

        // Donut Chart Options
        var donutOptions = {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
            },
        };

        // Create the Bar Chart
        var barCtx = document.getElementById('bar').getContext('2d');
        var barChart = new Chart(barCtx, {
            type: 'bar',
            data: barData,
            options: barOptions,
        });

        // Create the Donut Chart
        var donutCtx = document.getElementById('donut').getContext('2d');
        var donutChart = new Chart(donutCtx, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions,
        });
    </script> --}}
</body>
</html>
