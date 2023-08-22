document.addEventListener('DOMContentLoaded', function () {
  const dom = document.getElementById('consolidation-graph');
  const myChart = echarts.init(dom, null, {
    renderer: 'canvas',
    useDirtyRect: false,
  });

  function updateChart() {
    const xNo1 = parseFloat(localStorage.getItem('xNo1'));
    const xNo2 = parseFloat(localStorage.getItem('xNo2'));
    const xNo3 = parseFloat(localStorage.getItem('xNo3'));
    const xNo4 = parseFloat(localStorage.getItem('xNo4'));
    const xNo5 = parseFloat(localStorage.getItem('xNo5'));
    const xNo7 = parseFloat(localStorage.getItem('xNo7'));
    const xNo8 = parseFloat(localStorage.getItem('xNo8'));
    const xNo9 = parseFloat(localStorage.getItem('xNo9'));
    const xNo10 = parseFloat(localStorage.getItem('xNo10'));
    const yNo1 = parseFloat(localStorage.getItem('yNo1'));
    const yNo2 = parseFloat(localStorage.getItem('yNo2'));
    const yNo3 = parseFloat(localStorage.getItem('yNo3'));
    const yNo4 = parseFloat(localStorage.getItem('yNo4'));
    const yNo5 = parseFloat(localStorage.getItem('yNo5'));
    const yNo7 = parseFloat(localStorage.getItem('yNo7'));
    const yNo8 = parseFloat(localStorage.getItem('yNo8'));
    const yNo9 = parseFloat(localStorage.getItem('yNo9'));
    const yNo10 = parseFloat(localStorage.getItem('yNo10'));

    const option = {
      xAxis: {
        min: 0.1,
        name: 'Vertical Stress - kPa',
        type: 'log',
        logBase: 10,
        inverse: false,
        nameLocation: 'center',
        nameTextStyle: {
          color: 'black',
          fontWeight: 'bold',
          fontSize: 15,
        },
      },

      yAxis: {
        min: yNo1,
        max: yNo10,
        name: 'Void Ratio (e)',
        nameLocation: 'center',
        nameTextStyle: {
          color: 'black',
          fontWeight: 'bold',
          fontSize: 15,
          lineHeight: 50,
        },
      },

      series: [
        {
          data: [
            [xNo1, yNo1],
            [xNo2, yNo2],
            [xNo3, yNo3],
            [xNo4, yNo4],
            [xNo5, yNo5],
          ],
          type: 'line',
          showSymbol: false,
          color: 'orange',
        },
        {
          data: [
            [xNo5, yNo5],
            [xNo7, yNo7],
            [xNo8, yNo8],
            [xNo9, yNo9],
            [xNo10, yNo10],
          ],
          type: 'line',
          showSymbol: false,
          color: 'orange',
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