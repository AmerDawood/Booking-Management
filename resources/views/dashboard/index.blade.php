@extends('dashboard.master')

@section('content')


  @if(auth()->guard('web')->check())
    @include('dashboard.body.user_body')
@elseif(auth()->guard('admin')->check())
    @include('dashboard.body.admin_body')
@endif



    <!-- End Page-content -->

      @include('dashboard.layouts.footer')



      @section('scripts')
      <script src="{{ asset('admin/libs/chart.js/chart.min.js') }}"></script>
      <script src="{{ asset('admin/js/pages/chartjs.init.js') }}"></script>



      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

      <script>

          // Function to fetch and display data for the bar chart
          function fetchAndDisplayBarChartData() {
              $.ajax({
                  url: "{{ route('getChartData') }}", // Replace with the actual route name
                  type: 'GET',
                  dataType: 'json',
                  headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
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
                      label: 'Booking Status',
                      data: [], // Data will be fetched dynamically
                      backgroundColor: [
                        'rgba(255, 206, 86, 0.2)',

                          'rgba(75, 192, 192, 0.2)',

                          'rgba(255, 99, 132, 0.2)',
                      ],
                      borderColor: [
                        'rgba(255, 206, 86, 1)',

                          'rgba(75, 192, 192, 1)',

                          'rgba(255, 99, 132, 1)',
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


  <script>
      // Function to fetch and display data for the donut chart
  function fetchAndDisplayDonutChartData() {
      $.ajax({
          url: "{{ route('getDonutChartData') }}", // Use the actual route name
          type: 'GET',
          dataType: 'json',
          success: function (data) {
              // Create the donut chart
              var donutCtx = document.getElementById('donutChart').getContext('2d');
              var donutChart = new Chart(donutCtx, {
                  type: 'doughnut',
                  data: {
                      labels: data.labels,
                      datasets: [{
                          data: data.values,
                          backgroundColor: [
                            'rgba(54, 162, 235, 0.5)',
                              'rgba(255, 99, 132, 0.5)',
                              'rgba(255, 206, 86, 0.5)',
                          ],
                      }],
                  },
              });
          },
          error: function () {
              alert('Error fetching data for the donut chart.');
          }
      });
  }

  // Fetch and display data for the donut chart on page load
  fetchAndDisplayDonutChartData();

  </script>




      @endsection


@endsection




