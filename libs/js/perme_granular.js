var dom = document.getElementById('permeability_granular');
var myChart = echarts.init(dom, null, {
  renderer: 'canvas',
  useDirtyRect: false
});
var app = {};

var option;

option = {
  xAxis: {
    min: 0.013825726141079,
    max: 0.0138547717842326
  },
  yAxis: {
    min: 0.11,
  },
  series: [
    {
      symbolSize: 20,
      data: [
        [document.getElementById("37").value, document.getElementById("36").value],
        [document.getElementById("46").value, document.getElementById("45").value],
        [document.getElementById("55").value, document.getElementById("54").value],
        [document.getElementById("64").value, document.getElementById("63").value],
        [document.getElementById("73").value, document.getElementById("72").value],
        [document.getElementById("82").value, document.getElementById("81").value],
        [document.getElementById("91").value, document.getElementById("90").value],
        [document.getElementById("100").value, document.getElementById("99").value]
      ],
      type: 'scatter'
    }
  ]
};

if (option && typeof option === 'object') {
  myChart.setOption(option);
}

window.addEventListener('resize', myChart.resize);