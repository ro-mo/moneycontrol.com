<!DOCTYPE html>
<html>
  <body>
    <canvas id="myLineChart"  ></canvas>
    <script>
      var data = {
      labels: ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto"],
      datasets: [
      {
      label: "Temperature 2013",
      fillColor: "rgba(99,240,220,0.2)",
      strokeColor: "rgba(99,240,220,1)",
      pointColor: "rgba(99,240,220,1)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(220,220,220,1)",
      data: [8, 11, 18, 22, 24, 26, 34, 39]
      },
      {
      label: "Temperature 2014",
      fillColor: "rgba(205,99,151,0.2)",
      strokeColor: "rgba(205,99,151,1)",
      pointColor: "rgba(205,99,151,1)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(151,187,205,1)",
      data: [16, 18, 22, 24, 26, 28, 32, 36]
      }
      ]
      };
      var ctx = document.getElementById("myLineChart").getContext("2d");
      var myLineChart = new Chart(ctx).Line(data);
    </script>
  </body>
</html>
