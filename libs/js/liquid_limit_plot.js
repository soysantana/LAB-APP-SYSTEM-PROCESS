var dom = document.getElementById('chart-container');
var myChart = echarts.init(dom, null, {
  renderer: 'canvas',
  useDirtyRect: false
});
var app = {};

no1_blows = parseFloat(document.getElementById("2").value);
no2_blows = parseFloat(document.getElementById("3").value);
no3_blows = parseFloat(document.getElementById("4").value);

no1_mc = parseFloat(document.getElementById("23").value);
no2_mc = parseFloat(document.getElementById("24").value);
no3_mc = parseFloat(document.getElementById("25").value);

var option;

echarts.registerTransform(ecStat.transform.regression);
option = {
  dataset: [
    {
      source: [
        [no1_blows, no1_mc, 0, 'Blows + Moisture', 0],
        [no2_blows, no2_mc, 0, 'Blows + Moisture', 0],
        [no3_blows, no3_mc, 0,  'Blows + Moisture', 0]
      ]
    },
    {
      transform: {
        type: 'filter',
        config: { dimension: 4, eq: 0}
      }
    },
    {
      transform: {
        type: 'filter',
        config: { dimension: 4, eq: 1 }
      }
    },
    {
      transform: {
        type: 'ecStat:regression',
        config: {
          method: 'logarithmic'
        }
      }
    }
  ],
  tooltip: {
    trigger: 'axis',
    axisPointer: {
      type: 'cross'
    }
  },
  xAxis: {
    type: 'value',
    splitLine: {
      lineStyle: {
        type: 'dashed'
      }
    }
  },
  yAxis: {
    type: 'value',
    splitLine: {
      lineStyle: {
        type: 'dashed'
      }
    }
  },
  series: [
    {
      type: 'scatter',
      datasetIndex: 1,
      symbol: 'diamond'
    },
    {
      type: 'scatter',
      datasetIndex: 2
    },
    {
      name: 'line',
      type: 'line',
      smooth: true,
      datasetIndex: 3,
      symbolSize: 0.1,
      symbol: 'circle',
      label: { show: true, fontSize: 16 },
      labelLayout: { dx: -20 },
      encode: { label: 2, tooltip: 1 }
    }
  ]
};


if (option && typeof option === 'object') {
  myChart.setOption(option);
}

window.addEventListener('resize', myChart.resize);