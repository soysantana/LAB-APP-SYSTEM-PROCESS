var dom = document.getElementById('chart-container');
var myChart = echarts.init(dom, null, {
  renderer: 'canvas',
  useDirtyRect: false
});
var app = {};

// Variables de datos
const r2 = parseFloat(document.getElementById("51.1").value);
const blowsN1 = parseFloat(document.getElementById("2").value);
const blowsN2 = parseFloat(document.getElementById("3").value);
const blowsN3 = parseFloat(document.getElementById("4").value);
const McN1 = parseFloat(document.getElementById("23").value);
const McN2 = parseFloat(document.getElementById("24").value);
const McN3 = parseFloat(document.getElementById("25").value);

// Datos originales
const datosX = [blowsN1, blowsN2, blowsN3];
const datosY = [McN1, McN2, McN3];

// Calcular la media de un arreglo de números
function calcularMedia(datos) {
  const sum = datos.reduce((total, valor) => total + valor, 0);
  return sum / datos.length;
}

// Calcular el coeficiente de determinación (RSQ)
function calcularRSQ(datosX, datosY) {
  const mediaX = calcularMedia(datosX);
  const mediaY = calcularMedia(datosY);

  let numerador = 0;
  let denominadorX = 0;
  let denominadorY = 0;

  for (let i = 0; i < datosX.length; i++) {
    numerador += (datosX[i] - mediaX) * (datosY[i] - mediaY);
    denominadorX += Math.pow(datosX[i] - mediaX, 2);
    denominadorY += Math.pow(datosY[i] - mediaY, 2);
  }

  const rsq = Math.pow(numerador, 2) / (denominadorX * denominadorY);
  return rsq;
}

// Calcular el logaritmo natural (LN) de un arreglo de números
function calcularLN(datos) {
  return datos.map((valor) => Math.log(valor));
}

// Calcular RSQ
const rsq = calcularRSQ(datosX, datosY);

var option;

echarts.registerTransform(ecStat.transform.regression);

const data = [
  { blows: blowsN1, mc: McN1 },
  { blows: blowsN2, mc: McN2 },
  { blows: blowsN3, mc: McN3 }
];

const sourceData = data.map((item) => [item.blows, item.mc]);

option = {
  dataset: [
    {
      source: sourceData
    },
    {
      transform: {
        type: 'ecStat:regression',
        config: { method: 'logarithmic' }
      }
    }
  ],
  title: {
    subtext: 'MULTI-POINT LIQUID LIMIT PLOT',
    left: 'center',
    subtextStyle: {
      fontSize: 15,
      color: 'black',
      fontWeight: 'bold'
    }
  },
  xAxis: {
    type: 'log',
    name: 'Number of Blows',
    nameLocation: 'center',
    nameTextStyle: {
      color: 'black',
      fontWeight: 'bold',
      lineHeight: 20
    }
  },
  yAxis: {
    name: 'Moisture Content (%)',
    splitNumber: 8,
    min: 30,
    nameLocation: 'center',
    nameTextStyle: {
      color: 'black',
      fontWeight: 'bold',
      lineHeight: 35
    },
    splitLine: {
      lineStyle: {
        color: 'gray', // Color de las líneas horizontales en el eje y
        width: 1 // Grosor de las líneas horizontales en el eje y
      }
    }
  },
  toolbox: {
    show: true,
    feature: {
      saveAsImage: {}
    }
  },
  series: [
    {
      type: 'scatter',
      symbolSize: 12,
      z: 5, // Ajusta el valor z de la serie para que sea mayor que las líneas verticales
      symbol: 'diamond'
    },
    {
      name: 'line',
      type: 'line',
      color: 'orange',
      smooth: true,
      datasetIndex: 1,
      symbolSize: 0,
      z: 5, // Ajusta el valor z de la serie para que sea mayor que las líneas verticales
      symbol: 'circle',
      label: { show: true, fontSize: 16 },
      labelLayout: { dy: -30 },
      encode: { label: 2, tooltip: 1 }
    },
    {
      name: 'RSQ',
      type: 'line',
      symbolSize: 0,
      z: 5, // Ajusta el valor z de la serie para que sea mayor que las líneas verticales
      symbol: 'circle',
      data: sourceData.map((item, index) => {
        if (item[0] === blowsN1 && item[1] === McN1) {
          return {
            value: [item[0], item[1]],
            label: {
              show: true,
              fontSize: 16,
              formatter: 'R²= ' + r2.toFixed(4),
              position: 'top', // Colocar la etiqueta a la derecha del punto
              offset: [0, -10] // Ajustar el desplazamiento horizontal (puedes ajustar estos valores según tus necesidades)
            }
          };
        }
      })
      // Resto de la configuración para la serie RSQ...
    },

    // Agregar líneas verticales en el eje x para McN1, McN2 y McN3
    {
      name: 'Vertical Line Interval',
      type: 'scatter',
      symbolSize: 0,
      symbol: 'none',
      markLine: {
        symbol: 'none',
        silent: true, // Desactivar la animación
        label: {
          show: false // Ocultar los números en las líneas verticales
        },
        lineStyle: {
          type: 'line',
          color: 'gray', // Color de las líneas verticales
          width: 1 // Grosor de las líneas verticales
        },
        data: [
          { xAxis: 15 },
          { xAxis: 20 },
          { xAxis: 30 },
          { xAxis: 40 },
          { xAxis: 50 },
          { xAxis: 60 },
          { xAxis: 70 },
          { xAxis: 100 }
        ]
      }
    }
  ]
};

if (option && typeof option === 'object') {
  myChart.setOption(option);
}

window.addEventListener('resize', myChart.resize);