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
    min: 0,
    max: 20,
    name: "TEST TIME (MINUTE)",
    nameLocation: "center",
    nameTextStyle: {
      color: "black",
      fontWeight: "bold",
      fontSize: 13,
      lineHeight: 20
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
      lineHeight: 20
    }
  },

  graphic: [
    {
      type: 'group',
      children: [
        {
          type: 'image',
          style: {
            image: "uploads/img/pinhole-graph.png",
            x: 65,
            y: 50,
            width: 772,
            height: 552,
          }
        }
      ]
    },
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
  ]
};

if (option && typeof option === "object") {
  myChart.setOption(option);
}

window.addEventListener("resize", myChart.resize);
