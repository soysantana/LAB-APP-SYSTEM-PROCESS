document.addEventListener('DOMContentLoaded', function () {
  const dom = document.getElementById('taylor-graph');
  const myChart = echarts.init(dom, null, {
    renderer: 'canvas',
    useDirtyRect: false,
  });

  function updateChart() {
    const xNo1 = parseFloat(localStorage.getItem('secNo6'));
    const xNo2 = parseFloat(localStorage.getItem('secNo15'));
    const xNo3 = parseFloat(localStorage.getItem('secNo30'));
    const xNo4 = parseFloat(localStorage.getItem('secNo60'));
    const xNo5 = parseFloat(localStorage.getItem('miNo2'));
    const xNo6 = parseFloat(localStorage.getItem('miNo4'));
    const xNo7 = parseFloat(localStorage.getItem('miNo8'));
    const xNo8 = parseFloat(localStorage.getItem('miNo15'));
    const xNo9 = parseFloat(localStorage.getItem('miNo30'));
    const xNo10 = parseFloat(localStorage.getItem('miNo60'));
    const xNo11 = parseFloat(localStorage.getItem('hrNo2'));
    const xNo12 = parseFloat(localStorage.getItem('hrNo4'));
    const xNo13 = parseFloat(localStorage.getItem('hrNo8'));
    const xNo14 = parseFloat(localStorage.getItem('hrNo16'));
    const xNo15 = parseFloat(localStorage.getItem('hrNo24'));

    const yNo1 = parseFloat(localStorage.getItem('timeF1N1'));
    const yNo2 = parseFloat(localStorage.getItem('timeF1N2'));
    const yNo3 = parseFloat(localStorage.getItem('timeF1N3'));
    const yNo4 = parseFloat(localStorage.getItem('timeF1N4'));
    const yNo5 = parseFloat(localStorage.getItem('timeF1N5'));
    const yNo6 = parseFloat(localStorage.getItem('timeF1N6'));
    const yNo7 = parseFloat(localStorage.getItem('timeF1N7'));
    const yNo8 = parseFloat(localStorage.getItem('timeF1N8'));
    const yNo9 = parseFloat(localStorage.getItem('timeF1N9'));
    const yNo10 = parseFloat(localStorage.getItem('timeF1N10'));
    const yNo11 = parseFloat(localStorage.getItem('timeF1N11'));
    const yNo12 = parseFloat(localStorage.getItem('timeF1N12'));
    const yNo13 = parseFloat(localStorage.getItem('timeF1N13'));
    const yNo14 = parseFloat(localStorage.getItem('timeF1N14'));
    const yNo15 = parseFloat(localStorage.getItem('timeF1N15'));

    const xname = localStorage.getItem('nam_Kg_Cass_N1');

    const option = {
      xAxis: {
        type: "value"
      },

      yAxis: {
        min: yNo1,
        inverse: true,
        type: "value"
      },

      title: {
        text: xname,
        left: "center"
      },

      series: [
        {
          data: [
            [xNo1, yNo1],
            [xNo2, yNo2],
            [xNo3, yNo3],
            [xNo4, yNo4],
            [xNo5, yNo5],
            [xNo6, yNo6],
            [xNo7, yNo7],
            [xNo8, yNo8],
            [xNo9, yNo9],
            [xNo10, yNo10],
            [xNo11, yNo11],
            [xNo12, yNo12],
            [xNo13, yNo13],
            [xNo14, yNo14],
            [xNo15, yNo15],
          ],
          type: 'line',
          showSymbol: true,
          color: 'orange',
          smooth: true
        },
      ],
    };

    if (option && typeof option === 'object') {
      myChart.setOption(option);
    }
  }

  // Actualizar la gráfica cada 5 segundos (5000 milisegundos)
  setInterval(updateChart, 5000);
});

document.addEventListener('DOMContentLoaded', function () {
  const dom = document.getElementById('taylor-graph-2');
  const myChart = echarts.init(dom, null, {
    renderer: 'canvas',
    useDirtyRect: false,
  });

  function updateChart() {
    const xNo1 = parseFloat(localStorage.getItem('secNo6'));
    const xNo2 = parseFloat(localStorage.getItem('secNo15'));
    const xNo3 = parseFloat(localStorage.getItem('secNo30'));
    const xNo4 = parseFloat(localStorage.getItem('secNo60'));
    const xNo5 = parseFloat(localStorage.getItem('miNo2'));
    const xNo6 = parseFloat(localStorage.getItem('miNo4'));
    const xNo7 = parseFloat(localStorage.getItem('miNo8'));
    const xNo8 = parseFloat(localStorage.getItem('miNo15'));
    const xNo9 = parseFloat(localStorage.getItem('miNo30'));
    const xNo10 = parseFloat(localStorage.getItem('miNo60'));
    const xNo11 = parseFloat(localStorage.getItem('hrNo2'));
    const xNo12 = parseFloat(localStorage.getItem('hrNo4'));
    const xNo13 = parseFloat(localStorage.getItem('hrNo8'));
    const xNo14 = parseFloat(localStorage.getItem('hrNo16'));
    const xNo15 = parseFloat(localStorage.getItem('hrNo24'));

    const yNo1 = parseFloat(localStorage.getItem('timeF2N'));
    const yNo2 = parseFloat(localStorage.getItem('timeF2N1'));
    const yNo3 = parseFloat(localStorage.getItem('timeF2N2'));
    const yNo4 = parseFloat(localStorage.getItem('timeF2N3'));
    const yNo5 = parseFloat(localStorage.getItem('timeF2N4'));
    const yNo6 = parseFloat(localStorage.getItem('timeF2N5'));
    const yNo7 = parseFloat(localStorage.getItem('timeF2N6'));
    const yNo8 = parseFloat(localStorage.getItem('timeF2N7'));
    const yNo9 = parseFloat(localStorage.getItem('timeF2N8'));
    const yNo10 = parseFloat(localStorage.getItem('timeF2N9'));
    const yNo11 = parseFloat(localStorage.getItem('timeF2N10'));
    const yNo12 = parseFloat(localStorage.getItem('timeF2N11'));
    const yNo13 = parseFloat(localStorage.getItem('timeF2N12'));
    const yNo14 = parseFloat(localStorage.getItem('timeF2N13'));
    const yNo15 = parseFloat(localStorage.getItem('timeF2N14'));

    const xname = localStorage.getItem('nam_Kg_Cass_N2');

    const option = {
      xAxis: {
        type: "value",
      },

      yAxis: {
        min: yNo1,
        inverse: true,
        type: "value"
      },

      title: {
        text: xname,
        left: "center"
      },

      series: [
        {
          data: [
            [xNo1, yNo1],
            [xNo2, yNo2],
            [xNo3, yNo3],
            [xNo4, yNo4],
            [xNo5, yNo5],
            [xNo6, yNo6],
            [xNo7, yNo7],
            [xNo8, yNo8],
            [xNo9, yNo9],
            [xNo10, yNo10],
            [xNo11, yNo11],
            [xNo12, yNo12],
            [xNo13, yNo13],
            [xNo14, yNo14],
            [xNo15, yNo15],
          ],
          type: 'line',
          showSymbol: true,
          color: 'orange',
          smooth: true
        },
      ],
    };

    if (option && typeof option === 'object') {
      myChart.setOption(option);
    }
  }

  // Actualizar la gráfica cada 5 segundos (5000 milisegundos)
  setInterval(updateChart, 5000);
});

document.addEventListener('DOMContentLoaded', function () {
  const dom = document.getElementById('taylor-graph-3');
  const myChart = echarts.init(dom, null, {
    renderer: 'canvas',
    useDirtyRect: false,
  });

  function updateChart() {
    const xNo1 = parseFloat(localStorage.getItem('secNo6'));
    const xNo2 = parseFloat(localStorage.getItem('secNo15'));
    const xNo3 = parseFloat(localStorage.getItem('secNo30'));
    const xNo4 = parseFloat(localStorage.getItem('secNo60'));
    const xNo5 = parseFloat(localStorage.getItem('miNo2'));
    const xNo6 = parseFloat(localStorage.getItem('miNo4'));
    const xNo7 = parseFloat(localStorage.getItem('miNo8'));
    const xNo8 = parseFloat(localStorage.getItem('miNo15'));
    const xNo9 = parseFloat(localStorage.getItem('miNo30'));
    const xNo10 = parseFloat(localStorage.getItem('miNo60'));
    const xNo11 = parseFloat(localStorage.getItem('hrNo2'));
    const xNo12 = parseFloat(localStorage.getItem('hrNo4'));
    const xNo13 = parseFloat(localStorage.getItem('hrNo8'));
    const xNo14 = parseFloat(localStorage.getItem('hrNo16'));
    const xNo15 = parseFloat(localStorage.getItem('hrNo24'));

    const yNo1 = parseFloat(localStorage.getItem('timeF3N'));
    const yNo2 = parseFloat(localStorage.getItem('timeF3N1'));
    const yNo3 = parseFloat(localStorage.getItem('timeF3N2'));
    const yNo4 = parseFloat(localStorage.getItem('timeF3N3'));
    const yNo5 = parseFloat(localStorage.getItem('timeF3N4'));
    const yNo6 = parseFloat(localStorage.getItem('timeF3N5'));
    const yNo7 = parseFloat(localStorage.getItem('timeF3N6'));
    const yNo8 = parseFloat(localStorage.getItem('timeF3N7'));
    const yNo9 = parseFloat(localStorage.getItem('timeF3N8'));
    const yNo10 = parseFloat(localStorage.getItem('timeF3N9'));
    const yNo11 = parseFloat(localStorage.getItem('timeF3N10'));
    const yNo12 = parseFloat(localStorage.getItem('timeF3N11'));
    const yNo13 = parseFloat(localStorage.getItem('timeF3N12'));
    const yNo14 = parseFloat(localStorage.getItem('timeF3N13'));
    const yNo15 = parseFloat(localStorage.getItem('timeF3N14'));

    const xname = localStorage.getItem('nam_Kg_Cass_N3');

    const option = {
      xAxis: {
        type: "value",
      },

      yAxis: {
        min: yNo1,
        inverse: true,
        type: "value"
      },

      title: {
        text: xname,
        left: "center"
      },

      series: [
        {
          data: [
            [xNo1, yNo1],
            [xNo2, yNo2],
            [xNo3, yNo3],
            [xNo4, yNo4],
            [xNo5, yNo5],
            [xNo6, yNo6],
            [xNo7, yNo7],
            [xNo8, yNo8],
            [xNo9, yNo9],
            [xNo10, yNo10],
            [xNo11, yNo11],
            [xNo12, yNo12],
            [xNo13, yNo13],
            [xNo14, yNo14],
            [xNo15, yNo15],
          ],
          type: 'line',
          showSymbol: true,
          color: 'orange',
          smooth: true
        },
      ],
    };

    if (option && typeof option === 'object') {
      myChart.setOption(option);
    }
  }

  // Actualizar la gráfica cada 5 segundos (5000 milisegundos)
  setInterval(updateChart, 5000);
});

document.addEventListener('DOMContentLoaded', function () {
  const dom = document.getElementById('taylor-graph-4');
  const myChart = echarts.init(dom, null, {
    renderer: 'canvas',
    useDirtyRect: false,
  });

  function updateChart() {
    const xNo1 = parseFloat(localStorage.getItem('secNo6'));
    const xNo2 = parseFloat(localStorage.getItem('secNo15'));
    const xNo3 = parseFloat(localStorage.getItem('secNo30'));
    const xNo4 = parseFloat(localStorage.getItem('secNo60'));
    const xNo5 = parseFloat(localStorage.getItem('miNo2'));
    const xNo6 = parseFloat(localStorage.getItem('miNo4'));
    const xNo7 = parseFloat(localStorage.getItem('miNo8'));
    const xNo8 = parseFloat(localStorage.getItem('miNo15'));
    const xNo9 = parseFloat(localStorage.getItem('miNo30'));
    const xNo10 = parseFloat(localStorage.getItem('miNo60'));
    const xNo11 = parseFloat(localStorage.getItem('hrNo2'));
    const xNo12 = parseFloat(localStorage.getItem('hrNo4'));
    const xNo13 = parseFloat(localStorage.getItem('hrNo8'));
    const xNo14 = parseFloat(localStorage.getItem('hrNo16'));
    const xNo15 = parseFloat(localStorage.getItem('hrNo24'));

    const yNo1 = parseFloat(localStorage.getItem('timeF4N'));
    const yNo2 = parseFloat(localStorage.getItem('timeF4N1'));
    const yNo3 = parseFloat(localStorage.getItem('timeF4N2'));
    const yNo4 = parseFloat(localStorage.getItem('timeF4N3'));
    const yNo5 = parseFloat(localStorage.getItem('timeF4N4'));
    const yNo6 = parseFloat(localStorage.getItem('timeF4N5'));
    const yNo7 = parseFloat(localStorage.getItem('timeF4N6'));
    const yNo8 = parseFloat(localStorage.getItem('timeF4N7'));
    const yNo9 = parseFloat(localStorage.getItem('timeF4N8'));
    const yNo10 = parseFloat(localStorage.getItem('timeF4N9'));
    const yNo11 = parseFloat(localStorage.getItem('timeF4N10'));
    const yNo12 = parseFloat(localStorage.getItem('timeF4N11'));
    const yNo13 = parseFloat(localStorage.getItem('timeF4N12'));
    const yNo14 = parseFloat(localStorage.getItem('timeF4N13'));
    const yNo15 = parseFloat(localStorage.getItem('timeF4N14'));

    const xname = localStorage.getItem('nam_Kg_Cass_N4');

    const option = {
      xAxis: {
        type: "value",
      },

      yAxis: {
        min: yNo1,
        inverse: true,
        type: "value"
      },

      title: {
        text: xname,
        left: "center"
      },

      series: [
        {
          data: [
            [xNo1, yNo1],
            [xNo2, yNo2],
            [xNo3, yNo3],
            [xNo4, yNo4],
            [xNo5, yNo5],
            [xNo6, yNo6],
            [xNo7, yNo7],
            [xNo8, yNo8],
            [xNo9, yNo9],
            [xNo10, yNo10],
            [xNo11, yNo11],
            [xNo12, yNo12],
            [xNo13, yNo13],
            [xNo14, yNo14],
            [xNo15, yNo15],
          ],
          type: 'line',
          showSymbol: true,
          color: 'orange',
          smooth: true
        },
      ],
    };

    if (option && typeof option === 'object') {
      myChart.setOption(option);
    }
  }

  // Actualizar la gráfica cada 5 segundos (5000 milisegundos)
  setInterval(updateChart, 5000);
});

document.addEventListener('DOMContentLoaded', function () {
  const dom = document.getElementById('taylor-graph-5');
  const myChart = echarts.init(dom, null, {
    renderer: 'canvas',
    useDirtyRect: false,
  });

  function updateChart() {
    const xNo1 = parseFloat(localStorage.getItem('secNo6'));
    const xNo2 = parseFloat(localStorage.getItem('secNo15'));
    const xNo3 = parseFloat(localStorage.getItem('secNo30'));
    const xNo4 = parseFloat(localStorage.getItem('secNo60'));
    const xNo5 = parseFloat(localStorage.getItem('miNo2'));
    const xNo6 = parseFloat(localStorage.getItem('miNo4'));
    const xNo7 = parseFloat(localStorage.getItem('miNo8'));
    const xNo8 = parseFloat(localStorage.getItem('miNo15'));
    const xNo9 = parseFloat(localStorage.getItem('miNo30'));
    const xNo10 = parseFloat(localStorage.getItem('miNo60'));
    const xNo11 = parseFloat(localStorage.getItem('hrNo2'));
    const xNo12 = parseFloat(localStorage.getItem('hrNo4'));
    const xNo13 = parseFloat(localStorage.getItem('hrNo8'));
    const xNo14 = parseFloat(localStorage.getItem('hrNo16'));
    const xNo15 = parseFloat(localStorage.getItem('hrNo24'));

    const yNo1 = parseFloat(localStorage.getItem('timeF5N'));
    const yNo2 = parseFloat(localStorage.getItem('timeF5N1'));
    const yNo3 = parseFloat(localStorage.getItem('timeF5N2'));
    const yNo4 = parseFloat(localStorage.getItem('timeF5N3'));
    const yNo5 = parseFloat(localStorage.getItem('timeF5N4'));
    const yNo6 = parseFloat(localStorage.getItem('timeF5N5'));
    const yNo7 = parseFloat(localStorage.getItem('timeF5N6'));
    const yNo8 = parseFloat(localStorage.getItem('timeF5N7'));
    const yNo9 = parseFloat(localStorage.getItem('timeF5N8'));
    const yNo10 = parseFloat(localStorage.getItem('timeF5N9'));
    const yNo11 = parseFloat(localStorage.getItem('timeF5N10'));
    const yNo12 = parseFloat(localStorage.getItem('timeF5N11'));
    const yNo13 = parseFloat(localStorage.getItem('timeF5N12'));
    const yNo14 = parseFloat(localStorage.getItem('timeF5N13'));
    const yNo15 = parseFloat(localStorage.getItem('timeF5N14'));

    const xname = localStorage.getItem('nam_Kg_Cass_N5');

    const option = {
      xAxis: {
        type: "value",
      },

      yAxis: {
        min: yNo1,
        inverse: true,
        type: "value"
      },

      title: {
        text: xname,
        left: "center"
      },

      series: [
        {
          data: [
            [xNo1, yNo1],
            [xNo2, yNo2],
            [xNo3, yNo3],
            [xNo4, yNo4],
            [xNo5, yNo5],
            [xNo6, yNo6],
            [xNo7, yNo7],
            [xNo8, yNo8],
            [xNo9, yNo9],
            [xNo10, yNo10],
            [xNo11, yNo11],
            [xNo12, yNo12],
            [xNo13, yNo13],
            [xNo14, yNo14],
            [xNo15, yNo15],
          ],
          type: 'line',
          showSymbol: true,
          color: 'orange',
          smooth: true
        },
      ],
    };

    if (option && typeof option === 'object') {
      myChart.setOption(option);
    }
  }

  // Actualizar la gráfica cada 5 segundos (5000 milisegundos)
  setInterval(updateChart, 5000);
});

/*
var dom = document.getElementById("taylor-graph");
var myChart = echarts.init(dom, null, {
  renderer: "canvas",
  useDirtyRect: false
});
var app = {};

var option;

option = {
  xAxis: {
    type: "value"
  },
  yAxis: {
    min: 350,
    max: 490,
    inverse: true,
    type: "value"
  },
  series: [
    {
      data: [
        [0.316227766, 354.0],
        [0.5, 409.0],
        [0.707106781, 425.0],
        [1, 437.0],
        [1.414213562, 445.0],
        [2, 451.0],
        [2.828427125, 455.0],
        [3.872983346, 458.0],
        [5.477225575, 461.0],
        [7.745966692, 465.0],
        [10.95445115, 467.0],
        [15.49193338, 470.0],
        [21.9089023, 471.0],
        [30.98386677, 472.0],
        [37.94733192, 476.0]
      ],
      type: "line",
      smooth: true
    }
  ]
};

if (option && typeof option === "object") {
  myChart.setOption(option);
}

window.addEventListener("resize", myChart.resize);
*/