var dom = document.getElementById('gs_cf');
var myChart = echarts.init(dom, null, {
  renderer: 'canvas',
  useDirtyRect: false
});
var app = {};

var option;

option = {
  xAxis: {
    name: "Particle Diameter (mm)",
    min: 0.0001,
    max: 1000,
    minInterval: 10,
    maxInterval: 100,
    type: "log",
    logBase: 10,
    inverse: true,
    nameLocation: "center",
    nameTextStyle: {
      color: "black",
      fontWeight: "bold",
      fontSize: 15,
      lineHeight: 50
    }
  },

  yAxis: {
    name: "Percent Passing (%)",
    min: 0,
    max: 100,
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
        [37.5, 100],
        [25, 87],
        [19, 70],
        [9.5, 33],
        [4.75, 7],
        [2, 0],
        [0.85, 0],
        [0.075, 0]
      ],
      type: "line",
      color: "black",
      showSymbol: false
    },
    {
      data: [
        [37.5, 100],
        [25, 100],
        [19, 100],
        [9.5, 100],
        [4.75, 60],
        [2, 15],
        [0.85, 7],
        [0.075, 5]
      ],
      type: "line",
      color: "black",
      showSymbol: false
    },
    {
      data: [
        [300, 0],
        [300, 100]
      ],
      type: "line",
      color: "black",
      showSymbol: false,
      markPoint: {
        data: [
          {
            yAxis: 50,
            x: "143",
            value: "Boulders",
            textStyle: {
              color: "black"
            }
          }
        ],
        symbolSize: 0,
        symbol: "rect",
        silent: true,
        itemStyle: {
          color: "white"
        }
      }
    },
    {
      data: [
        [75, 0],
        [75, 100]
      ],
      type: "line",
      color: "black",
      showSymbol: false,
            markPoint: {
        data: [
          {
            yAxis: 40,
            x: "210",
            value: "Cobbles",
            textStyle: {
              color: "black"
            }
          }
        ],
        symbolSize: 0,
        symbol: "rect",
        silent: true,
        itemStyle: {
          color: "white"
        }
      }
    },
    {
      data: [
        [19, 0],
        [19, 100]
      ],
      type: "line",
      color: "black",
      showSymbol: false,
      markPoint: {
        data: [
          {
            yAxis: 50,
            x: "290",
            value: "Coarse Gravel",
            textStyle: {
              color: "black"
            }
          }
        ],
        symbolSize: 0,
        symbol: "rect",
        silent: true,
        itemStyle: {
          color: "white"
        }
      }
    },
    {
      data: [
        [4.75, 0],
        [4.75, 100]
      ],
      type: "line",
      color: "black",
      showSymbol: false,
            markPoint: {
        data: [
          {
            yAxis: 40,
            x: "360",
            value: "Fine Gravel",
            textStyle: {
              color: "black"
            }
          }
        ],
        symbolSize: 0,
        symbol: "rect",
        silent: true,
        itemStyle: {
          color: "white"
        }
      }
    },
    {
      data: [
        [2, 0],
        [2, 100]
      ],
      type: "line",
      color: "black",
      showSymbol: false,
       markPoint: {
        data: [
          {
            yAxis: 50,
            x: "440",
            value: "Coarse Sand",
            textStyle: {
              color: "black"
            }
          }
        ],
        symbolSize: 0,
        symbol: "rect",
        silent: true,
        itemStyle: {
          color: "white"
        }
      }
    },
    {
      data: [
        [1.18, 0],
        [1.18, 100]
      ],
      type: "line",
      color: "black",
      showSymbol: false,
    },
    {
      data: [
        [0.85, 0],
        [0.85, 1000]
      ],
      type: "line",
      color: "black",
      showSymbol: false,
      lineStyle: {
        type: "dotted"
      }
    },
    {
      data: [
        [0.3, 0],
        [0.3, 100]
      ],
      type: "line",
      color: "black",
      showSymbol: false,
             markPoint: {
        data: [
          {
            yAxis: 40,
            x: "520",
            value: "Medium Sand",
            textStyle: {
              color: "black"
            }
          }
        ],
        symbolSize: 0,
        symbol: "rect",
        silent: true,
        itemStyle: {
          color: "white"
        }
      }
    },
    {
      data: [
        [0.25, 0],
        [0.25, 100]
      ],
      type: "line",
      color: "black",
      showSymbol: false,
    },
    {
      data: [
        [0.15, 0],
        [0.15, 100]
      ],
      type: "line",
      color: "black",
      showSymbol: false,
    },
    {
      data: [
        [0.106, 0],
        [0.106, 100]
      ],
      type: "line",
      color: "black",
      showSymbol: false,
    },
    {
      data: [
        [0.075, 0],
        [0.075, 100]
      ],
      type: "line",
      color: "black",
      showSymbol: false,
                   markPoint: {
        data: [
          {
            yAxis: 50,
            x: "598",
            value: "Fine Sand",
            textStyle: {
              color: "black"
            }
          }
        ],
        symbolSize: 0,
        symbol: "rect",
        silent: true,
        itemStyle: {
          color: "white"
        }
      }
    },
    {
      data: [
        [0.002, 0],
        [0.002, 100]
      ],
      type: "line",
      color: "green",
      showSymbol: false,
      markPoint: {
        data: [
          {
            yAxis: 50,
            x: "740",
            value: "Fines Silt",
            textStyle: {
              color: "black"
            }
          }
        ],
        symbolSize: 0,
        symbol: "rect",
        silent: true,
        itemStyle: {
          color: "white"
        }
      }
    },
        {
      data: [],
      type: "line",
      color: "black",
      markPoint: {
        data: [
          {
            yAxis: 50,
            x: "870",
            value: "Fines Clay",
            textStyle: {
              color: "black"
            }
          }
        ],
        symbolSize: 0,
        symbol: "rect",
        silent: true,
        itemStyle: {
          color: "white"
        }
      }
    }
  ]
};

if (option && typeof option === 'object') {
  myChart.setOption(option);
}

window.addEventListener('resize', myChart.resize);