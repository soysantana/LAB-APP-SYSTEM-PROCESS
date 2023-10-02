var dom = document.getElementById("plasticity-chart");
var myChart = echarts.init(dom, null, {
  renderer: "canvas",
  useDirtyRect: false
});
var app = {};

var option;

option = {
  xAxis: {
    name: 'LIQUID LIMIT (LL)',
    nameLocation: 'center',
    interval: 10,
    max: 110,
    nameTextStyle: {
      color: 'black',
      fontWeight: 'bold',
      lineHeight: 30
    },
    splitLine: {
      lineStyle: {
        width: 0
      }
    }
  },

  yAxis: {
    name: 'PLASTICITY INDEX (PI)',
    nameLocation: 'center',
    max: 60,
    nameTextStyle: {
      color: 'black',
      fontWeight: 'bold',
      lineHeight: 40
    },
    splitLine: {
      lineStyle: {
        width: 0
      }
    }
  },

  title: {
    subtext: 'PLASTICITY CHART',
    left: 'center',
    subtextStyle: {
      fontSize: 14,
      lineHeight: 60,
      color: 'black',
      fontWeight: 'bold'
    }
  },

  graphic: [
    {
      type: 'group',
      children: [
        {
          type: 'image',
          style: {
            image: 'uploads/img/plasticity-chart.png',
            x: 65,
            y: 50,
            width: 595,
            height: 335
          }
        }
      ]
    }
  ],

  toolbox: {
    show: true,
    feature: {
      saveAsImage: {}
    }
  },

  series: [
    {
      data: [[document.getElementById(47).value, document.getElementById(49).value]],
      type: 'scatter',
      symbol: 'diamond',
      symbolSize: 11,
      color: 'orange'
    }
  ]
};

if (option && typeof option === "object") {
  myChart.setOption(option);
}

window.addEventListener("resize", myChart.resize);