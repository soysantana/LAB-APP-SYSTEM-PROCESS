var dom = document.getElementById("pinhole_graph");
var myChart = echarts.init(dom, null, {
  renderer: "canvas",
  useDirtyRect: false
});
var app = {};

var option;

option = {
  title: {
    text: "DISPERSIVE GRADE VS FLOW RATE",
    left: "center",
    textStyle: {
      color: "black"
    }
  },

  xAxis: {
    minInterval: 20,
    name: "TEST TIME (MINUTE)",
    nameLocation: "center",
    nameTextStyle: {
      color: "black",
      fontWeight: "bold",
      fontSize: 13,
      lineHeight: 50
    }
  },
  yAxis: {
    minInterval: 5,
    name: "FLOW RATE (mL/s)",
    nameLocation: "center",
    nameTextStyle: {
      color: "black",
      fontWeight: "bold",
      fontSize: 13,
      lineHeight: 50
    }
  },

  graphic: [
    {
      type: 'group',
      children: [
        {
          type: 'image',
          style: {
            image: "uploads/img/legenda.png",
            x: 100,
            y: 80,
            width: 350,
            height: 45,
          }
        }
      ]
    },

    {
      type: 'group',
      children: [
        {
          type: 'image',
          style: {
            image: "uploads/img/legenda2.png",
            x: 95,
            y: 165,
            width: 360,
            height: 270,
          }
        }
      ]
    },

    {
      type: 'group',
      children: [
        {
          type: 'image',
          style: {
            image: "uploads/img/hydraulic.png",
            x: 450,
            y: 240,
            width: 180,
            height: 50,
          }
        }
      ]
    },

    {
      type: 'group',
      children: [
        {
          type: 'image',
          style: {
            image: "uploads/img/hydraulic3.2.png",
            x: 630,
            y: 205,
            width: 175,
            height: 40,
          }
        }
      ]
    },

    {
      type: 'group',
      children: [
        {
          type: 'image',
          style: {
            image: "uploads/img/head.png",
            x: 250,
            y: 140,
            width: 500,
            height: 30,
          }
        }
      ]
    },

    {
      type: 'group',
      children: [
        {
          type: 'image',
          style: {
            image: "uploads/img/headlow.png",
            x: 290,
            y: 510,
            width: 140,
            height: 36,
          }
        }
      ]
    },

    {
      type: 'group',
      children: [
        {
          type: 'image',
          style: {
            image: "uploads/img/headlow.png",
            x: 470,
            y: 470,
            width: 140,
            height: 36,
          }
        }
      ]
    },

    {
      type: 'group',
      children: [
        {
          type: 'image',
          style: {
            image: "uploads/img/swelling.png",
            x: 542,
            y: 540,
            width: 180,
            height: 16,
          }
        }
      ]
    },

    {
      type: 'group',
      children: [
        {
          type: 'image',
          style: {
            image: "uploads/img/hole.png",
            x: 170,
            y: 560,
            width: 160,
            height: 13,
          }
        }
      ]
    },

    {
      type: 'group',
      children: [
        {
          type: 'image',
          style: {
            image: "uploads/img/nd1.png",
            x: 690,
            y: 430,
            width: 40,
            height: 30,
          }
        }
      ]
    },

    {
      type: 'group',
      children: [
        {
          type: 'image',
          style: {
            image: "uploads/img/nd2nd3.png",
            x: 630,
            y: 249,
            width: 180,
            height: 142,
          }
        }
      ]
    },

    {
      type: 'group',
      children: [
        {
          type: 'image',
          style: {
            image: "uploads/img/nd4nd3.png",
            x: 450,
            y: 290,
            width: 180,
            height: 164,
          }
        }
      ]
    },

    {
      type: 'group',
      children: [
        {
          type: 'image',
          style: {
            image: "uploads/img/d1d2.png",
            x: 90,
            y: 435,
            width: 360,
            height: 40,
          }
        }
      ]
    },

    {
      type: 'group',
      children: [
        {
          type: 'image',
          style: {
            image: "uploads/img/nd4.png",
            x: 270,
            y: 477,
            width: 180,
            height: 20,
          }
        }
      ]
    }

  ],

  series: [
    {
      data: [
        [point_seg1 = document.getElementById("28").value*0.0166667, document.getElementById("29").value],
        [point_seg2 = document.getElementById("30").value*0.0166667+point_seg1, document.getElementById("31").value],
        [point_seg3 = document.getElementById("32").value*0.0166667+point_seg2, document.getElementById("33").value],
        [point_seg4 = document.getElementById("34").value*0.0166667+point_seg3, document.getElementById("35").value],
        [point_seg5 = document.getElementById("36").value*0.0166667+point_seg4, document.getElementById("37").value],
        [point_seg6 = document.getElementById("38").value*0.0166667+point_seg5, document.getElementById("39").value],
        [point_seg7 = document.getElementById("41").value*0.0166667+point_seg6, document.getElementById("42").value],
        [point_seg8 = 60*0.0166667+point_seg7, document.getElementById("44").value],
        [point_seg9 = 60*0.0166667+point_seg8, document.getElementById("46").value],
        [point_seg10 = 60*0.0166667+point_seg9, document.getElementById("48").value],
        [point_seg11 = 60*0.0166667+point_seg10, document.getElementById("50").value],
        [point_seg12 = 60*0.0166667+point_seg11, document.getElementById("52").value],
        [point_seg13 = 60*0.0166667+point_seg12, document.getElementById("54").value],
        [point_seg14 = 60*0.0166667+point_seg13, document.getElementById("56").value],
        [point_seg15 = 60*0.0166667+point_seg14, document.getElementById("58").value],
        [point_seg16 = 60*0.0166667+point_seg15, document.getElementById("60").value],
        [point_seg17 = 60*0.0166667+point_seg16, document.getElementById("62").value],
        [point_seg18 = 60*0.0166667+point_seg17, document.getElementById("64").value],
        [point_seg19 = 60*0.0166667+point_seg18, document.getElementById("66").value],
        [point_seg20 = 60*0.0166667+point_seg19, document.getElementById("68").value],
        [point_seg21 = 60*0.0166667+point_seg20, document.getElementById("70").value],
        [point_seg22 = 60*0.0166667+point_seg21, document.getElementById("72").value],
      ],
      type: "line",
      color: "red"
    },
    {
      data: [
        [0, 1.4],
        [10, 1.4]
      ],
      type: "line",
      color: "black",
      showSymbol: false
    },
    {
      data: [
        [0, 1],
        [10, 1]
      ],
      type: "line",
      color: "black",
      showSymbol: false
    },
    {
      data: [
        [5, 0.8],
        [10, 0.8]
      ],
      type: "line",
      color: "black",
      showSymbol: false
    },
    {
      data: [
        [0, 0.2],
        [10, 0.2]
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
        [5, 0.2],
        [5, 1.4]
      ],
      type: "line",
      color: "black",
      showSymbol: false
    },

    {
      data: [
        [10, 0],
        [10, 2.8]
      ],
      type: "line",
      color: "black",
      showSymbol: false,
    },
    {
      data: [
        [10, 0.6],
        [15, 0.6]
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
        [10, 1.2],
        [15, 1.2]
      ],
      type: "line",
      color: "black",
      showSymbol: false,
    },
    {
      data: [
        [10, 2],
        [15, 2]
      ],
      type: "line",
      color: "black",
      showSymbol: false,
    },
    {
      data: [
        [15, 0],
        [15, 3.2]
      ],
      type: "line",
      color: "black",
      showSymbol: false,
    },
    {
      data: [
        [20, 0],
        [20, 5.0]
      ],
      type: "line",
      color: "black",
      showSymbol: false,
    },
    {
      data: [
        [10, 2.8],
        [15, 2.8]
      ],
      type: "line",
      color: "black",
      showSymbol: false,
    },
    {
      data: [
        [15, 0.8],
        [20, 0.8]
      ],
      type: "line",
      color: "black",
      showSymbol: false,
    },
    {
      data: [
        [15, 1.8],
        [20, 1.8]
      ],
      type: "line",
      color: "black",
      showSymbol: false,
    },
    {
      data: [
        [15, 2.4],
        [20, 2.4]
      ],
      type: "line",
      color: "black",
      showSymbol: false
    },
    {
      data: [
        [15, 3.2],
        [20, 3.2]
      ],
      type: "line",
      color: "black",
      showSymbol: false
    },
    {
      data: [[10, 4]],
      type: "line",
      color: "black",
      symbol: "arrow",
      symbolRotate: 270,
      symbolSize: 12,
      lineStyle: {
        type: "dotted"
      },
      markLine: {
        data: [
          {
            type: "average"
          }
        ],
        symbol: "arrow",
        silent: true
      }
    },
    {
      data: [[15, 4]],
      type: "line",
      color: "black",
      symbol: "arrow",
      symbolRotate: 270,
      symbolSize: 12,
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
