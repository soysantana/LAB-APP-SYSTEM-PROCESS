var dom = document.getElementById("chart-container");
var myChart = echarts.init(dom, null, {
  renderer: "canvas",
  useDirtyRect: false
});
var app = {};

var option;

var no1 = document.getElementById("23");
var no2 = document.getElementById("24");
var no3 = document.getElementById("25");

// See https://github.com/ecomfe/echarts-stat
echarts.registerTransform(ecStat.transform.regression);
option = {
  dataset: [
    {
      source: [
        [33, 25.2],
        [24, 23.2],
        [17, 22.2]
      ]
    },
    {
      transform: {
        type: "ecStat:regression",
        config: {
          method: "exponential"
          // 'end' by default
          // formulaOn: 'start'
        }
      }
    }
  ],
  title: {
    text: "MULTI-POINT LIQUID LIMIT PLOT",
    left: "center"
  },
  tooltip: {
    trigger: "axis",
    axisPointer: {
      type: "cross"
    }
  },
  xAxis: {
    splitLine: {
      lineStyle: {
        type: "dashed"
      }
    }
  },
  yAxis: {
    splitLine: {
      lineStyle: {
        type: "value"
      }
    }
  },
  series: [
    {
      name: "MC",
      type: "scatter",
      datasetIndex: 0
    },
    {
      name: "line",
      type: "line",
      smooth: true,
      datasetIndex: 1,
      symbolSize: 0.1,
      symbol: "circle",
      label: { show: true, fontSize: 16 },
      labelLayout: { dx: -20 },
      encode: { label: 2, tooltip: 1 }
    }
  ]
};

if (option && typeof option === "object") {
  myChart.setOption(option);
}

window.addEventListener("resize", myChart.resize);
