var dom = document.getElementById('chart-container');
var myChart = echarts.init(dom, null, {
  renderer: 'canvas',
  useDirtyRect: false
});
var app = {};

blowsN1 = parseFloat(document.getElementById("2").value);
blowsN2 = parseFloat(document.getElementById("3").value);
blowsN3 = parseFloat(document.getElementById("4").value);
McN1 = parseFloat(document.getElementById("23").value);
McN2 = parseFloat(document.getElementById("24").value);
McN3 = parseFloat(document.getElementById("25").value);
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
    subtext: "MULTI-POINT LIQUID LIMIT PLOT",
    left: "center",
    subtextStyle: {
      fontSize: 15,
      color: "black",
      fontWeight: "bold"
    }
  },
  xAxis: {
    type: 'log',
    name: "Number of Blows",
    nameLocation: "center",
    nameTextStyle: {
      color: "black",
      fontWeight: "bold",
      lineHeight: 20
    }
  },
  yAxis: {
    name: "Moisture Content (%)",
    nameLocation: "center",
    nameTextStyle: {
      color: "black",
      fontWeight: "bold",
      lineHeight: 35
    }
  },
  series: [
    {
      type: 'scatter',
      symbolSize: 12,
      symbol: 'diamond'
    },
    {
      name: 'line',
      type: 'line',
      color: 'orange',
      smooth: true,
      datasetIndex: 1,
      symbolSize: 0,
      symbol: 'circle',
      label: { show: true, fontSize: 16 },
      labelLayout: { dy: -30 },
      encode: { label: 2, tooltip: 1 }
    },
    {
      name: 'RSQ',
      type: 'line',
      symbolSize: 0,
      symbol: 'circle',
      data: sourceData.map((item, index) => {
        if (item[0] === blowsN1 && item[1] === McN1) {
          return {
            value: [item[0], item[1]],
            label: {
              show: true,
              fontSize: 16,
              formatter: 'R²= ' + rsq.toFixed(4),
              position: 'top', // Colocar la etiqueta a la derecha del punto
              offset: [0, -10] // Ajustar el desplazamiento horizontal (puedes ajustar estos valores según tus necesidades)
            }
          };
        }
      })
      // Resto de la configuración para la serie RSQ...
    }
  ]
};

if (option && typeof option === 'object') {
  myChart.setOption(option);
}

window.addEventListener('resize', myChart.resize);