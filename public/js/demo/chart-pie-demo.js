// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Wins", "Losses", "Draws"],
    datasets: [{
      data: [95, 20, 9],
      backgroundColor: ['#4e73df', '#3cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#37a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 3)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 3,
      xPadding: 5,
      yPadding: 5,
      displayColors: false,
      caretPadding: 5,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});


var cty = document.getElementById("cupFinals");
var cupFinals = new Chart(cty, {
  type: 'doughnut',
  data: {
    labels: ["Wins", "Losses"],
    datasets: [{
      data: [5,3],
      backgroundColor: ['#4e73df', '#E45757'],
      hoverBackgroundColor: ['#2e59d9', '#37a673'],
      hoverBorderColor: "rgba(234, 236, 244, 3)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 3,
      xPadding: 5,
      yPadding: 5,
      displayColors: false,
      caretPadding: 5,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});


var ctz = document.getElementById("Awards");
var Awards = new Chart(ctz, {
  type: 'doughnut',
  data: {
    labels: ["AFCON","KPL","ETC"],
    datasets: [{
      data: [3,8,33],
      backgroundColor: ['#36EA5C', '#F80D87','#0D0808'],
      hoverBackgroundColor: ['#2e59d9', '#37a673','#FFFFFF'],
      hoverBorderColor: "rgba(234, 236, 244, 3)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 3,
      xPadding: 5,
      yPadding: 5,
      displayColors: false,
      caretPadding: 5,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

var cty = document.getElementById("homePieChart");
var homePieChart = new Chart(cty, {
  type: 'doughnut',
  data: {
    labels: ["Players","Coaches","Referees","Teams","Matches"],
    datasets: [{
      data: 20,14,45],
      backgroundColor: ['#4e73df', '#3cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#37a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 3)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 3,
      xPadding: 5,
      yPadding: 5,
      displayColors: false,
      caretPadding: 5,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});


