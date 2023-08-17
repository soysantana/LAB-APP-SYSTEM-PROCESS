var dom = document.getElementById('PointLoadGraph');
var myChart = echarts.init(dom, null, {
  renderer: 'canvas',
  useDirtyRect: false
});
var app = {};

var option;

option = {
  parallelAxis: [
    { dim: 0, inverse: true, min: 20, max: 100 },
    { dim: 1, min: 0, max: 5},
  ],
  graphic: [
    {
      type: 'group',
      children: [
        {
          type: 'image',
          style: {
            image: "uploads/img/plt-line-d.png",
            x: 58,
            y: 30,
            width: 60,
            height: 415,
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
            image: "uploads/img/plt-line-u.png",
            x: 390,
            y: 30,
            width: 60,
            height: 415,
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
            image: "uploads/img/plt-line-class.png",
            x: 200,
            y: 0,
            width: 105,
            height: 380,
          }
        }
      ]
    },
  ],
  series: {
    type: 'parallel',
    lineStyle: {
      width: 5
    },
    data: [
      [42, 3]
    ]
  }
};

if (option && typeof option === 'object') {
  myChart.setOption(option);
}

window.addEventListener('resize', myChart.resize);