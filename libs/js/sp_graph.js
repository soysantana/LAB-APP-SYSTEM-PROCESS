var dom = document.getElementById("standard_proctor");
var myChart = echarts.init(dom, null, {
  renderer: "canvas",
  useDirtyRect: false
});
var app = {};

var option;

//Sg = 2.80
var densid1 = 3000;
var densid2 = 2900;
var densid3 = 2800;
var densid4 = 2700;
var densid5 = 2500;
var densid6 = 2300;
var densid7 = 2200;
var densid8 = 2100;
var densid9 = 2000;
var densid10 = 1900;
var densid11 = 1800;
var densid12 = 1700;
var densid13 = 1500;
var densid14 = 1400;
var densid15 = 1100;
var densid16 = 1000;
var Sg2p8 = 2.8;
var Cv8_1 = (1000 * Sg2p8 - densid1) / (densid1 * Sg2p8);
var Cv8_2 = (1000 * Sg2p8 - densid2) / (densid2 * Sg2p8);
var Cv8_3 = (1000 * Sg2p8 - densid3) / (densid3 * Sg2p8);
var Cv8_4 = (1000 * Sg2p8 - densid4) / (densid4 * Sg2p8);
var Cv8_5 = (1000 * Sg2p8 - densid5) / (densid5 * Sg2p8);
var Cv8_6 = (1000 * Sg2p8 - densid6) / (densid6 * Sg2p8);
var Cv8_7 = (1000 * Sg2p8 - densid7) / (densid7 * Sg2p8);
var Cv8_8 = (1000 * Sg2p8 - densid8) / (densid8 * Sg2p8);
var Cv8_9 = (1000 * Sg2p8 - densid9) / (densid9 * Sg2p8);
var Cv8_10 = (1000 * Sg2p8 - densid10) / (densid10 * Sg2p8);
var Cv8_11 = (1000 * Sg2p8 - densid11) / (densid11 * Sg2p8);
var Cv8_12 = (1000 * Sg2p8 - densid12) / (densid12 * Sg2p8);
var Cv8_13 = (1000 * Sg2p8 - densid13) / (densid13 * Sg2p8);
var Cv8_14 = (1000 * Sg2p8 - densid14) / (densid14 * Sg2p8);
var Cv8_15 = (1000 * Sg2p8 - densid15) / (densid15 * Sg2p8);
var Cv8_16 = (1000 * Sg2p8 - densid16) / (densid16 * Sg2p8);

//Sg = 2.70
var Sg2p7 = 2.7;
var Cv7_1 = (1000 * Sg2p7 - densid1) / (densid1 * Sg2p7);
var Cv7_2 = (1000 * Sg2p7 - densid2) / (densid2 * Sg2p7);
var Cv7_3 = (1000 * Sg2p7 - densid3) / (densid3 * Sg2p7);
var Cv7_4 = (1000 * Sg2p7 - densid4) / (densid4 * Sg2p7);
var Cv7_5 = (1000 * Sg2p7 - densid5) / (densid5 * Sg2p7);
var Cv7_6 = (1000 * Sg2p7 - densid6) / (densid6 * Sg2p7);
var Cv7_7 = (1000 * Sg2p7 - densid7) / (densid7 * Sg2p7);
var Cv7_8 = (1000 * Sg2p7 - densid8) / (densid8 * Sg2p7);
var Cv7_9 = (1000 * Sg2p7 - densid9) / (densid9 * Sg2p7);
var Cv7_10 = (1000 * Sg2p7 - densid10) / (densid10 * Sg2p7);
var Cv7_11 = (1000 * Sg2p7 - densid11) / (densid11 * Sg2p7);
var Cv7_12 = (1000 * Sg2p7 - densid12) / (densid12 * Sg2p7);
var Cv7_13 = (1000 * Sg2p7 - densid13) / (densid13 * Sg2p7);
var Cv7_14 = (1000 * Sg2p7 - densid14) / (densid14 * Sg2p7);
var Cv7_15 = (1000 * Sg2p7 - densid15) / (densid15 * Sg2p7);
var Cv7_16 = (1000 * Sg2p7 - densid16) / (densid16 * Sg2p7);

//Sg = 2.60
var Sg2p6 = 2.6;
var Cv6_1 = (1000 * Sg2p6 - densid1) / (densid1 * Sg2p6);
var Cv6_2 = (1000 * Sg2p6 - densid2) / (densid2 * Sg2p6);
var Cv6_3 = (1000 * Sg2p6 - densid3) / (densid3 * Sg2p6);
var Cv6_4 = (1000 * Sg2p6 - densid4) / (densid4 * Sg2p6);
var Cv6_5 = (1000 * Sg2p6 - densid5) / (densid5 * Sg2p6);
var Cv6_6 = (1000 * Sg2p6 - densid6) / (densid6 * Sg2p6);
var Cv6_7 = (1000 * Sg2p6 - densid7) / (densid7 * Sg2p6);
var Cv6_8 = (1000 * Sg2p6 - densid8) / (densid8 * Sg2p6);
var Cv6_9 = (1000 * Sg2p6 - densid9) / (densid9 * Sg2p6);
var Cv6_10 = (1000 * Sg2p6 - densid10) / (densid10 * Sg2p6);
var Cv6_11 = (1000 * Sg2p6 - densid11) / (densid11 * Sg2p6);
var Cv6_12 = (1000 * Sg2p6 - densid12) / (densid12 * Sg2p6);
var Cv6_13 = (1000 * Sg2p6 - densid13) / (densid13 * Sg2p6);
var Cv6_14 = (1000 * Sg2p6 - densid14) / (densid14 * Sg2p6);
var Cv6_15 = (1000 * Sg2p6 - densid15) / (densid15 * Sg2p6);
var Cv6_16 = (1000 * Sg2p6 - densid16) / (densid16 * Sg2p6);

//Sg  calculada por ensayo.
var Sg = parseFloat(document.getElementById("1.1").value);
var Cv1 = (1000 * Sg - densid1) / (densid1 * Sg);
var Cv2 = (1000 * Sg - densid2) / (densid2 * Sg);
var Cv3 = (1000 * Sg - densid3) / (densid3 * Sg);
var Cv4 = (1000 * Sg - densid4) / (densid4 * Sg);
var Cv5 = (1000 * Sg - densid5) / (densid5 * Sg);
var Cv6 = (1000 * Sg - densid6) / (densid6 * Sg);
var Cv7 = (1000 * Sg - densid7) / (densid7 * Sg);
var Cv8 = (1000 * Sg - densid8) / (densid8 * Sg);
var Cv9 = (1000 * Sg - densid9) / (densid9 * Sg);
var Cv10 = (1000 * Sg - densid10) / (densid10 * Sg);
var Cv11 = (1000 * Sg - densid11) / (densid11 * Sg);
var Cv12 = (1000 * Sg - densid12) / (densid12 * Sg);
var Cv13 = (1000 * Sg - densid13) / (densid13 * Sg);
var Cv14 = (1000 * Sg - densid14) / (densid14 * Sg);
var Cv15 = (1000 * Sg - densid15) / (densid15 * Sg);
var Cv16 = (1000 * Sg - densid16) / (densid16 * Sg);

const symbolSize = 13;
const data = [
  [parseFloat(document.getElementById(80).value), parseFloat(document.getElementById(32).value)],
  [parseFloat(document.getElementById(81).value), parseFloat(document.getElementById(33).value)],
  [parseFloat(document.getElementById(82).value), parseFloat(document.getElementById(34).value)],
  [parseFloat(document.getElementById(83).value), parseFloat(document.getElementById(35).value)],
  [parseFloat(document.getElementById(84).value), parseFloat(document.getElementById(36).value)],
  [parseFloat(document.getElementById(85).value), parseFloat(document.getElementById(37).value)]
];
const correct = [
  [parseFloat(document.getElementById(86).value), parseFloat(document.getElementById(38).value)],
  [parseFloat(document.getElementById(87).value), parseFloat(document.getElementById(39).value)],
  [parseFloat(document.getElementById(88).value), parseFloat(document.getElementById(40).value)],
  [parseFloat(document.getElementById(89).value), parseFloat(document.getElementById(41).value)],   
  [parseFloat(document.getElementById(90).value), parseFloat(document.getElementById(42).value)],   
  [parseFloat(document.getElementById(91).value), parseFloat(document.getElementById(43).value)]
];
option = {
  title: {
    text: "Try Dragging these Points",
    left: "center"
  },
  tooltip: {
    triggerOn: "none",
    formatter: function (params) {
      return (
        "MC: " +
        params.data[0].toFixed(2) +
        "<br>Density: " +
        params.data[1].toFixed(2)
      );
    }
  },
  grid: {
    top: "8%",
    bottom: "12%"
  },
  xAxis: {
    type: "value",
    axisLine: { onZero: false }
  },
  yAxis: {
    type: "value",
    axisLine: { onZero: false }
  },
  dataZoom: [
    {
      type: "slider",
      xAxisIndex: 0,
      filterMode: "none"
    },
    {
      type: "slider",
      yAxisIndex: 0,
      filterMode: "none"
    },
    {
      type: "inside",
      xAxisIndex: 0,
      filterMode: "none"
    },
    {
      type: "inside",
      yAxisIndex: 0,
      filterMode: "none"
    }
  ],
  series: [
    {
      id: "a",
      color: "orange",
      type: "line",
      smooth: true,
      symbol: "diamond",
      symbolSize: symbolSize,
      data: data
    },
    {
      id: "correct",
      color: "orange",
      type: "line",
      smooth: true,
      symbol: "diamond",
      symbolSize: symbolSize,
      data: correct
    },
    {
      data: [
        [Cv8_1 * 100, densid1],
        [Cv8_2 * 100, densid2],
        [Cv8_3 * 100, densid3],
        [Cv8_4 * 100, densid4],
        [Cv8_5 * 100, densid5],
        [Cv8_6 * 100, densid6],
        [Cv8_7 * 100, densid7],
        [Cv8_8 * 100, densid8],
        [Cv8_9 * 100, densid9],
        [Cv8_10 * 100, densid10],
        [Cv8_11 * 100, densid11],
        [Cv8_12 * 100, densid12],
        [Cv8_13 * 100, densid13],
        [Cv8_14 * 100, densid14],
        [Cv8_15 * 100, densid15],
        [Cv8_16 * 100, densid16]
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
        [Cv7_1 * 100, densid1],
        [Cv7_2 * 100, densid2],
        [Cv7_3 * 100, densid3],
        [Cv7_4 * 100, densid4],
        [Cv7_5 * 100, densid5],
        [Cv7_6 * 100, densid6],
        [Cv7_7 * 100, densid7],
        [Cv7_8 * 100, densid8],
        [Cv7_9 * 100, densid9],
        [Cv7_10 * 100, densid10],
        [Cv7_11 * 100, densid11],
        [Cv7_12 * 100, densid12],
        [Cv7_13 * 100, densid13],
        [Cv7_14 * 100, densid14],
        [Cv7_15 * 100, densid15],
        [Cv7_16 * 100, densid16]
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
        [Cv6_1 * 100, densid1],
        [Cv6_2 * 100, densid2],
        [Cv6_3 * 100, densid3],
        [Cv6_4 * 100, densid4],
        [Cv6_5 * 100, densid5],
        [Cv6_6 * 100, densid6],
        [Cv6_7 * 100, densid7],
        [Cv6_8 * 100, densid8],
        [Cv6_9 * 100, densid9],
        [Cv6_10 * 100, densid10],
        [Cv6_11 * 100, densid11],
        [Cv6_12 * 100, densid12],
        [Cv6_13 * 100, densid13],
        [Cv6_14 * 100, densid14],
        [Cv6_15 * 100, densid15],
        [Cv6_16 * 100, densid16]
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
        [Cv1 * 100, densid1],
        [Cv2 * 100, densid2],
        [Cv3 * 100, densid3],
        [Cv4 * 100, densid4],
        [Cv5 * 100, densid5],
        [Cv6 * 100, densid6],
        [Cv7 * 100, densid7],
        [Cv8 * 100, densid8],
        [Cv9 * 100, densid9],
        [Cv10 * 100, densid10],
        [Cv11 * 100, densid11],
        [Cv12 * 100, densid12],
        [Cv13 * 100, densid13],
        [Cv14 * 100, densid14],
        [Cv15 * 100, densid15],
        [Cv16 * 100, densid16]
      ],
      type: "line",
      showSymbol: false,
      color: "orange",
      lineStyle: {
        type: "line"
      }
    }
  ]
};
setTimeout(function () {
  // Add shadow circles (which is not visible) to enable drag.
  myChart.setOption({
    graphic: data.map(function (item, dataIndex) {
      return {
        type: "circle",
        position: myChart.convertToPixel("grid", item),
        shape: {
          cx: 0,
          cy: 0,
          r: symbolSize / 2
        },
        invisible: true,
        draggable: true,
        ondrag: function (dx, dy) {
          onPointDragging(dataIndex, [this.x, this.y]);
        },
        onmousemove: function () {
          showTooltip(dataIndex);
        },
        onmouseout: function () {
          hideTooltip(dataIndex);
        },
        z: 100
      };
    })
  });
}, 0);
window.addEventListener("resize", updatePosition);
myChart.on("dataZoom", updatePosition);
function updatePosition() {
  myChart.setOption({
    graphic: data.map(function (item, dataIndex) {
      return {
        position: myChart.convertToPixel("grid", item)
      };
    })
  });
}
function showTooltip(dataIndex) {
  myChart.dispatchAction({
    type: "showTip",
    seriesIndex: 0,
    dataIndex: dataIndex
  });
}
function hideTooltip(dataIndex) {
  myChart.dispatchAction({
    type: "hideTip"
  });
}
function onPointDragging(dataIndex, pos) {
  data[dataIndex] = myChart.convertFromPixel("grid", pos);
  // Update data
  myChart.setOption({
    series: [
      {
        id: "a",
        data: data
      }
    ]
  });
}

if (option && typeof option === "object") {
  myChart.setOption(option);
}

window.addEventListener("resize", myChart.resize);