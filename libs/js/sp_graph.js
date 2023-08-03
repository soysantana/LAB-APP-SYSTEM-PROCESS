var dom = document.getElementById("standard_proctor");
var myChart = echarts.init(dom, null, {
  renderer: "canvas",
  useDirtyRect: false
});
var app = {};

var option;

option = {
  xAxis: {
    name: "Moisture Content (%)",
    nameLocation: "center",
    nameTextStyle: {
      color: "black",
      fontWeight: "bold",
      lineHeight: 50
    }
  },

  yAxis: {
    name: "Dry Density (kg/m3)",
    nameLocation: "center",
    nameTextStyle: {
      lineHeight: 80,
      color: "black",
      fontWeight: "bold"
    }
  },

  dataZoom: [
    {
      type: "slider",
      show: true,
      xAxisIndex: [0],
      start: 1
    },
    {
      type: "slider",
      show: true,
      yAxisIndex: [0],
      left: "93%",
      start: 29
    },
    {
      type: "inside",
      xAxisIndex: [0],
      start: 1,
      end: 35
    },
    {
      type: "inside",
      yAxisIndex: [0],
      start: 29,
      end: 36
    }
  ],

  series: [
    {
      data: [
        [document.getElementById(80).value, document.getElementById(32).value],
        [document.getElementById(81).value, document.getElementById(33).value],
        [document.getElementById(82).value, document.getElementById(34).value],
        [document.getElementById(83).value, document.getElementById(35).value],
        [document.getElementById(84).value, document.getElementById(36).value],
        [document.getElementById(85).value, document.getElementById(37).value]
      ],
      type: "line",
      symbol: "diamond",
      symbolSize: 9,
      color: "blue"
    },
    {
      data: [
        [0.17677 * 100, 1800],
        [0.20945 * 100, 1700],
        [0.24621 * 100, 1600],
        [0.28788 * 100, 1500],
        [0.3355 * 100, 1400],
        [0.39044 * 100, 1300],
        [0.45455 * 100, 1200],
        [0.5303 * 100, 1100],
        [0.62121 * 100, 1000],
        [0.73232 * 100, 900],
        [0.87121 * 100, 800],
        [1.04978 * 100, 700],
        [1.28788 * 100, 600],
        [1.62121 * 100, 500],
        [2.12121 * 100, 400]
      ],
      type: "line",
      showSymbol: false,
      color: "black",
      lineStyle: {
        type: "line"
      }
    },
    {
      data: [
        [0.170940171 * 100, 1800],
        [0.20361991 * 100, 1700],
        [0.240384615 * 100, 1600],
        [0.2820512282 * 100, 1500],
        [0.32967033 * 100, 1400],
        [0.384615385 * 100, 1300],
        [0.448717949 * 100, 1200],
        [0.524475524 * 100, 1100],
        [0.615384615 * 100, 1000],
        [0.726495726 * 100, 900],
        [0.865384615 * 100, 800],
        [1.043956044 * 100, 700],
        [1.282051282 * 100, 600],
        [1.615384615 * 100, 500],
        [2.115384615 * 100, 400]
      ],
      type: "line",
      showSymbol: false,
      color: "black",
      lineStyle: {
        type: "line"
      }
    },
    {
      data: [
        [0.18518519 * 100, 1800],
        [0.21786492 * 100, 1700],
        [0.25462963 * 100, 1600],
        [0.296263 * 100, 1500],
        [0.34391534 * 100, 1400],
        [0.3988604 * 100, 1300],
        [0.46296296 * 100, 1200],
        [0.53872054 * 100, 1100],
        [0.62962963 * 100, 1000],
        [0.74074074 * 100, 900],
        [0.87962963 * 100, 800],
        [1.05820106 * 100, 700],
        [1.2962963 * 100, 600],
        [1.62962963 * 100, 500],
        [2.12962963 * 100, 400]
      ],
      type: "line",
      showSymbol: false,
      color: "black",
      lineStyle: {
        type: "line"
      }
    },
    {
      data: [
        [0.198412698 * 100, 1800],
        [0.231092437 * 100, 1700],
        [0.267857143 * 100, 1600],
        [0.30952381 * 100, 1500],
        [0.357142857 * 100, 1400],
        [0.412087912 * 100, 1300],
        [0.476190476 * 100, 1200],
        [0.551948052 * 100, 1100],
        [0.642857143 * 100, 1000],
        [0.753968254 * 100, 900],
        [0.892857143 * 100, 800],
        [1.071428571 * 100, 700],
        [1.30952381 * 100, 600],
        [1.642857143 * 100, 500],
        [2.142857143 * 100, 400]
      ],
      type: "line",
      showSymbol: false,
      color: "black",
      lineStyle: {
        type: "line"
      }
    }
  ]
};

if (option && typeof option === "object") {
  myChart.setOption(option);
}

window.addEventListener("resize", myChart.resize);