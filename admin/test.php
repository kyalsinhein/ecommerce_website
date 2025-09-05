<!DOCTYPE html>
<html>
<head>
  <title>Line Chart Example</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <canvas id="myChart"></canvas>
  <script>
  // Get the canvas element
  var ctx = document.getElementById('myChart').getContext('2d');

  // Define the data for the chart
  var data = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
    datasets: [{
      label: 'Sales',
      data: [50, 60, 70, 80, 75, 65],
      borderColor: 'rgba(75, 192, 192, 1)',
      backgroundColor: 'rgba(75, 192, 192, 0.2)',
      fill: false
    }]
  };

  // Create the line chart
  var myChart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: {}
  });
</script>

</body>
</html>
