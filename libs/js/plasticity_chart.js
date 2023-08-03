var dom = document.getElementById("plasticity-chart");
var myChart = echarts.init(dom, null, {
  renderer: "canvas",
  useDirtyRect: false
});
var app = {};

var option;

option = {
  xAxis: {
    name: "LIQUID LIMIT (LL)",
    nameLocation: "center",
    nameTextStyle: {
      color: "black",
      fontWeight: "bold",
      lineHeight: 30
    }
  },

  yAxis: {
    name: "PLASTICITY INDEX (PI)",
    nameLocation: "center",
    nameTextStyle: {
      lineHeight: 50,
      color: "black",
      fontWeight: "bold"
    }
  },

  title: {
    subtext: "PLASTICITY CHART",
    left: "center",
    subtextStyle: {
      fontSize: 15,
      color: "black",
      fontWeight: "bold"
    }
  },

  graphic: [
    {
      type: "group",
      rotation: Math.PI / 100,
      bounding: "raw",
      right: 270,
      bottom: 370,
      z: 100,
      children: [
        {
          type: "rect",
          left: "center",
          top: "center",
          z: 100,
          shape: {
            width: 50,
            height: 50
          },
          style: {
            fill: null
          }
        },
        {
          type: "text",
          left: "center",
          top: "center",
          z: 100,
          style: {
            fill: "black",
            text: "U LINE",
            font: "13px monospace"
          }
        }
      ]
    },
    {
      type: "group",
      rotation: Math.PI / 100,
      bounding: "raw",
      right: 170,
      bottom: 340,
      children: [
        {
          type: "rect",
          z: 100,
          left: "center",
          top: "middle",
          style: {
            fill: null
          }
        },
        {
          type: "text",
          left: "center",
          top: "center",
          z: 100,
          style: {
            fill: "black",
            text: "A LINE",
            font: "13px monospace"
          }
        }
      ]
    },
    {
      type: "group",
      rotation: Math.PI / 100,
      bounding: "raw",
      right: 250,
      bottom: 150,
      children: [
        {
          type: "rect",
          z: 100,
          left: "center",
          top: "middle",
          style: {
            fill: null
          }
        },
        {
          type: "text",
          left: "center",
          top: "center",
          z: 100,
          style: {
            fill: "black",
            text: "MH or OH",
            font: "13px monospace"
          }
        }
      ]
    },
    {
      type: "group",
      rotation: Math.PI / 100,
      bounding: "raw",
      right: 295,
      bottom: 270,
      children: [
        {
          type: "rect",
          z: 100,
          left: "center",
          top: "middle",
          style: {
            fill: null
          }
        },
        {
          type: "text",
          left: "center",
          top: "middle",
          z: 100,
          style: {
            fill: "black",
            text: "CH or OH",
            font: "13px monospace"
          }
        }
      ]
    },
    {
      type: "group",
      rotation: Math.PI / 100,
      bounding: "raw",
      right: 440,
      bottom: 110,
      children: [
        {
          type: "rect",
          z: 100,
          left: "center",
          top: "middle",
          style: {
            fill: null
          }
        },
        {
          type: "text",
          left: "center",
          top: "center",
          z: 100,
          style: {
            fill: "black",
            text: "ML or OL",
            font: "13px monospace"
          }
        }
      ]
    },
    {
      type: "group",
      rotation: Math.PI / 100,
      bounding: "raw",
      right: 570,
      bottom: 100,
      children: [
        {
          type: "rect",
          z: 100,
          left: "center",
          top: "middle",
          style: {
            fill: null
          }
        },
        {
          type: "text",
          left: "center",
          top: "center",
          z: 100,
          style: {
            fill: "black",
            text: "CL-ML",
            font: "13px monospace"
          }
        }
      ]
    },
    {
      type: "group",
      rotation: Math.PI / 100,
      bounding: "raw",
      right: 430,
      bottom: 180,
      children: [
        {
          type: "rect",
          z: 100,
          left: "center",
          top: "middle",
          style: {
            fill: null
          }
        },
        {
          type: "text",
          left: "center",
          top: "center",
          z: 100,
          style: {
            fill: "black",
            text: "CL or OL",
            font: "13px monospace"
          }
        }
      ]
    },
    {
      type: "group",
      rotation: Math.PI / 100,
      bounding: "raw",
      right: 328,
      bottom: 470,
      children: [
        {
          type: "rect",
          z: 100,
          left: "center",
          top: "middle",
          style: {
            fill: null
          }
        },
        {
          type: "text",
          left: "center",
          top: "center",
          z: 100,
          style: {
            fill: "black",
            text: "CH or OH",
            font: "13px monospace"
          }
        }
      ]
    }
  ],

  series: [
    {
      data: [
        [0, 0],
        [60, 60]
      ],
      type: "line",
      color: "black",
      showSymbol: false
    },
    {
      data: [
        [25, 4],
        [100, 59]
      ],
      type: "line",
      showSymbol: false,
      color: "black"
    },
    {
      data: [
        [7, 7],
        [29, 7]
      ],
      type: "line",
      showSymbol: false,
      color: "black"
    },
    {
      data: [
        [4, 4],
        [25, 4]
      ],
      type: "line",
      showSymbol: false,
      color: "black"
    },
    {
      data: [
        [50, 0],
        [50, 50]
      ],
      type: "line",
      showSymbol: false,
      color: "black"
    },
    {
      data: [[document.getElementById(47).value, document.getElementById(49).value]],
      type: "line",
      symbol: "diamond",
      symbolSize: 9,
      color: "blue"
    },
    {
      data: [
        [16, 7],
        [75, 60]
      ],
      type: "line",
      showSymbol: false,
      color: "black",
      lineStyle: {
        type: "dotted"
      }
    }
  ]
};

if (option && typeof option === "object") {
  myChart.setOption(option);
}

window.addEventListener("resize", myChart.resize);
