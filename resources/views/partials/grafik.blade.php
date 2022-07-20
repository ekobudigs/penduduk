<script>

    // Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
type: 'bar',
data: {
labels: [
    @foreach ($pend as $data)
"{{ $data->country }}",
@endforeach
],
datasets: [{
  label: "Jumlah Rata-Rata",
  backgroundColor: "#4e73df",
  hoverBackgroundColor: "#2e59d9",
  borderColor: "#4e73df",
  maxBarThickness: 50,
  data: [
    @foreach ($pend as $data)
{{ $data->age }},
@endforeach
  ],
}],
},
options: {
maintainAspectRatio: false,
layout: {
  padding: {
    left: 10,
    right: 25,
    top: 25,
    bottom: 0
  }
},
scales: {
  xAxes: [{
    time: {
      unit: 'month'
    },
    gridLines: {
      display: false,
      drawBorder: false
    },
    ticks: {
      maxTicksLimit: 1200
    },
    maxBarThickness: 1250,
  }],
  yAxes: [{
    gridLines: {
      color: "rgb(234, 236, 244)",
      zeroLineColor: "rgb(234, 236, 244)",
      drawBorder: false,
      borderDash: [2],
      zeroLineBorderDash: [2]
    }
  }],
},
legend: {
  display: false
},
tooltips: {
  titleMarginBottom: 10,
  titleFontColor: '#6e707e',
  titleFontSize: 14,
  backgroundColor: "rgb(255,255,255)",
  bodyFontColor: "#858796",
  borderColor: '#dddfeb',
  borderWidth: 1,
  xPadding: 15,
  yPadding: 15,
  displayColors: false,
  caretPadding: 10,
  callbacks: {
    label: function(tooltipItem, chart) {
      var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
      return datasetLabel + ' ' + tooltipItem.yLabel;
    }
  }
},
}
});




var tahunct = document.getElementById("tahun");
var myBarChart = new Chart(tahunct, {
type: 'bar',
data: {
labels: [
    @foreach ($tahun as $data)
"{{ $data->tahun }}",
@endforeach
],
datasets: [{
  label: "Jumlah Kelahiran :",
  backgroundColor: "#4e73df",
  hoverBackgroundColor: "#2e59d9",
  borderColor: "#4e73df",
  maxBarThickness: 50,
  data: [
    @foreach ($tahun as $data)
{{ $data->jumlah }},
@endforeach
  ],
}],
},
options: {
maintainAspectRatio: false,
layout: {
  padding: {
    left: 10,
    right: 25,
    top: 25,
    bottom: 0
  }
},
scales: {
  xAxes: [{
    time: {
      unit: 'month'
    },
    gridLines: {
      display: false,
      drawBorder: false
    },
    ticks: {
      maxTicksLimit: 1200
    },
    maxBarThickness: 1250,
  }],
  yAxes: [{
    gridLines: {
      color: "rgb(234, 236, 244)",
      zeroLineColor: "rgb(234, 236, 244)",
      drawBorder: false,
      borderDash: [2],
      zeroLineBorderDash: [2]
    }
  }],
},
legend: {
  display: false
},
tooltips: {
  titleMarginBottom: 10,
  titleFontColor: '#6e707e',
  titleFontSize: 14,
  backgroundColor: "rgb(255,255,255)",
  bodyFontColor: "#858796",
  borderColor: '#dddfeb',
  borderWidth: 1,
  xPadding: 15,
  yPadding: 15,
  displayColors: false,
  caretPadding: 10,
  callbacks: {
    label: function(tooltipItem, chart) {
      var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
      return datasetLabel + ' ' + tooltipItem.yLabel;
    }
  }
},
}
});

</script>