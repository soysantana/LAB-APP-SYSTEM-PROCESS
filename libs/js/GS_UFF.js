var dom = document.getElementById('gs_uff');
var myChart = echarts.init(dom, null, {
  renderer: 'canvas',
  useDirtyRect: false
});
var app = {};

var option;

option = {
  xAxis: {
    name: 'Particle Diameter (mm)',
    min: 0.0001,
    max: 1000,
    minInterval: 10,
    maxInterval: 100,
    type: 'log',
    logBase: 10,
    inverse: true,
    nameLocation: 'center',
    nameTextStyle: {
      color: 'black',
      fontWeight: 'bold',
      fontSize: 15,
      lineHeight: 50
    }
  },

  yAxis: {
    name: 'Percent Passing (%)',
    min: 0,
    max: 100,
    nameLocation: 'center',
    nameTextStyle: {
      lineHeight: 50,
      color: 'black',
      fontWeight: 'bold',
      fontSize: 15
    }
  },

  title: {
    text: '',
    left: 'center'
  },

  series: [
    /*{
      data: [
        [1016, document.getElementById(11).value],
        [304.8, document.getElementById(15).value],
        [254, document.getElementById(19).value],
        [203.2, document.getElementById(23).value],
        [152.4, document.getElementById(27).value],
        [127, document.getElementById(31).value],
        [101.6, document.getElementById(35).value],
        [76.2, document.getElementById(39).value],
        [63.50, document.getElementById(43).value],
        [50.80, document.getElementById(47).value],
        [38.1, document.getElementById(51).value],
        [25.4, document.getElementById(55).value],
        [19.5, document.getElementById(59).value],
        [12.7, document.getElementById(63).value],
        [9.5, document.getElementById(67).value],
        [4.75, document.getElementById(71).value],
        [2.00, document.getElementById(75).value],
        [1.18, document.getElementById(79).value],
        [0.85, document.getElementById(83).value],
        [0.30, document.getElementById(87).value],
        [0.25, document.getElementById(91).value],
        [0.15, document.getElementById(95).value],
        [0.106, document.getElementById(99).value],
        [0.075, document.getElementById(103).value]
      ],
      type: "line",
      showSymbol: false,
      color: "orange"
    },*/
    {
      data: [
        [1000, 100],
        [75, 40],
        [19, 25],
        [4.75, 20],
        [0.85, 12],
        [0.075, 10]
        ],
        type: 'line',
        color: 'black',
        showSymbol: false
    },
        {
      data: [
        [1000, 100],
        [75, 100],
        [19, 65],
        [4.75, 50],
        [0.85, 43],
        [0.075, 35]
        ],
        type: 'line',
        color: 'black',
        showSymbol: false
    },
    {
      data: [
        [300, 0],
        [300, 100]
      ],
      type: 'line',
      color: 'black',
      showSymbol: false,
      markPoint: {
        data: [
          {
            yAxis: 50,
            x: '143',
            value: 'Boulders',
            textStyle: {
              color: 'black'
            }
          }
        ],
        symbolSize: 0,
        symbol: 'rect',
        silent: true,
        itemStyle: {
          color: 'white'
        }
      }
    },
    {
      data: [
        [75, 0],
        [75, 100]
      ],
      type: 'line',
      color: 'black',
      showSymbol: false,
      markPoint: {
        data: [
          {
            yAxis: 40,
            x: '210',
            value: 'Cobbles',
            textStyle: {
              color: 'black'
            }
          }
        ],
        symbolSize: 0,
        symbol: 'rect',
        silent: true,
        itemStyle: {
          color: 'white'
        }
      }
    },
    {
      data: [
        [19, 0],
        [19, 100]
      ],
      type: 'line',
      color: 'black',
      showSymbol: false,
      markPoint: {
        data: [
          {
            yAxis: 50,
            x: '290',
            value: 'Coarse Gravel',
            textStyle: {
              color: 'black'
            }
          }
        ],
        symbolSize: 0,
        symbol: 'rect',
        silent: true,
        itemStyle: {
          color: 'white'
        }
      }
    },
    {
      data: [
        [4.75, 0],
        [4.75, 100]
      ],
      type: 'line',
      color: 'black',
      showSymbol: false,
      markPoint: {
        data: [
          {
            yAxis: 40,
            x: '360',
            value: 'Fine Gravel',
            textStyle: {
              color: 'black'
            }
          }
        ],
        symbolSize: 0,
        symbol: 'rect',
        silent: true,
        itemStyle: {
          color: 'white'
        }
      }
    },
    {
      data: [
        [2, 0],
        [2, 100]
      ],
      type: 'line',
      color: 'black',
      showSymbol: false,
      markPoint: {
        data: [
          {
            yAxis: 50,
            x: '440',
            value: 'Coarse Sand',
            textStyle: {
              color: 'black'
            }
          }
        ],
        symbolSize: 0,
        symbol: 'rect',
        silent: true,
        itemStyle: {
          color: 'white'
        }
      }
    },
    {
      data: [
        [1.18, 0],
        [1.18, 100]
      ],
      type: 'line',
      color: 'black',
      showSymbol: false
    },
    {
      data: [
        [0.85, 0],
        [0.85, 1000]
      ],
      type: 'line',
      color: 'black',
      showSymbol: false,
      lineStyle: {
        type: 'dotted'
      }
    },
    {
      data: [
        [0.3, 0],
        [0.3, 100]
      ],
      type: 'line',
      color: 'black',
      showSymbol: false,
      markPoint: {
        data: [
          {
            yAxis: 40,
            x: '520',
            value: 'Medium Sand',
            textStyle: {
              color: 'black'
            }
          }
        ],
        symbolSize: 0,
        symbol: 'rect',
        silent: true,
        itemStyle: {
          color: 'white'
        }
      }
    },
    {
      data: [
        [0.25, 0],
        [0.25, 100]
      ],
      type: 'line',
      color: 'black',
      showSymbol: false
    },
    {
      data: [
        [0.15, 0],
        [0.15, 100]
      ],
      type: 'line',
      color: 'black',
      showSymbol: false
    },
    {
      data: [
        [0.106, 0],
        [0.106, 100]
      ],
      type: 'line',
      color: 'black',
      showSymbol: false
    },
    {
      data: [
        [0.075, 0],
        [0.075, 100]
      ],
      type: 'line',
      color: 'black',
      showSymbol: false,
      markPoint: {
        data: [
          {
            yAxis: 50,
            x: '598',
            value: 'Fine Sand',
            textStyle: {
              color: 'black'
            }
          }
        ],
        symbolSize: 0,
        symbol: 'rect',
        silent: true,
        itemStyle: {
          color: 'white'
        }
      }
    },
    {
      data: [
        [0.002, 0],
        [0.002, 100]
      ],
      type: 'line',
      color: 'green',
      showSymbol: false,
      markPoint: {
        data: [
          {
            yAxis: 50,
            x: '740',
            value: 'Fines Silt',
            textStyle: {
              color: 'black'
            }
          }
        ],
        symbolSize: 0,
        symbol: 'rect',
        silent: true,
        itemStyle: {
          color: 'white'
        }
      }
    },
    {
      data: [],
      type: 'line',
      color: 'black',
      markPoint: {
        data: [
          {
            yAxis: 50,
            x: '870',
            value: 'Fines Clay',
            textStyle: {
              color: 'black'
            }
          }
        ],
        symbolSize: 0,
        symbol: 'rect',
        silent: true,
        itemStyle: {
          color: 'white'
        }
      }
    }
  ]
};


if (option && typeof option === 'object') {
  myChart.setOption(option);
}

window.addEventListener('resize', myChart.resize);