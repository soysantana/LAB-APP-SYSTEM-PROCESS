var dom = document.getElementById('consol-graph');
var myChart = echarts.init(dom, null, {
  renderer: 'canvas',
  useDirtyRect: false
});
var app = {};

var option;

option = {
  xAxis: {
    min: 0.1,
    name: "Vertical Stress - kPa",
    type: "log",
    logBase: 10,
    inverse: false,
    nameLocation: "center",
    nameTextStyle: {
      color: "black",
      fontWeight: "bold",
      fontSize: 15,
      lineHeight: 50
    }
  },

  yAxis: {
    min: 0.48,
    max: 0.55,
    name: "Void Ratio (e)",
    nameLocation: "center",
    nameTextStyle: {
      lineHeight: 50,
      color: "black",
      fontWeight: "bold",
      fontSize: 15
    }
  },

  title: {
    text: "",
    left: "center"
  },

  series: [
    {
      data: [
        [document.getElementById("Ov-Kg-cm2-No1").value, document.getElementById("e-No1").value],
        [document.getElementById("Ov-Kg-cm2-No2").value, document.getElementById("e-No2").value],
        [document.getElementById("Ov-Kg-cm2-No3").value, document.getElementById("e-No3").value],
        [document.getElementById("Ov-Kg-cm2-No4").value, document.getElementById("e-No4").value],
        [document.getElementById("Ov-Kg-cm2-No5").value, document.getElementById("e-No5").value],
        //[document.getElementById("Ov-Kg-cm2-No6").value, document.getElementById("e-No6").value]
        ],
      type: "line",
      showSymbol: false,
      color: "orange"
    },
    {
      data: [
        //[document.getElementById("Ov-Kg-cm2-No6").value, document.getElementById("e-No6").value],
        [document.getElementById("Ov-Kg-cm2-No5").value, document.getElementById("e-No5").value],
        [document.getElementById("Ov-Kg-cm2-No7").value, document.getElementById("e-No7").value],
        [document.getElementById("Ov-Kg-cm2-No8").value, document.getElementById("e-No8").value],
        [document.getElementById("Ov-Kg-cm2-No9").value, document.getElementById("e-No9").value],
        [document.getElementById("Ov-Kg-cm2-No10").value, document.getElementById("e-No10").value]
        ],
      type: "line",
      color: "orange",
      showSymbol: false
    },
  ]
};

if (option && typeof option === 'object') {
  myChart.setOption(option);
}

window.addEventListener('resize', myChart.resize);