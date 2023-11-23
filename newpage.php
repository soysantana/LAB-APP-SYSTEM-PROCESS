<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/regression/2.0.1/regression.min.js" integrity="sha512-0k6FXllQktdobw8Nc8KQN2WtZrOuxpMn7jC2RKCF6LR7EdOhhrg3H5cBPxhs3CFzQVlO6ni1B9SDLUPhBs0Alg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/regression/2.0.1/regression.js" integrity="sha512-PHHRPMxJK1xGYLQPv9FoDbCF2X23Ao1lMAD52oLY9TBW033s4zwIXl5JQBGlfI2iOx3W1qP3LAS/MMv5Ttj0aQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>

function buscarFilaValorAproximado(lookupValue, data, colIndex) {
  if (colIndex < 1 || colIndex > data[0].length) {
    throw new Error("Índice de columna inválido");
  }

  let closestRow = data[0];
  let closestValue = data[0][colIndex - 1];
  let closestDifference = Math.abs(closestValue - lookupValue);

  for (const row of data.slice(1)) {
    const currentValue = row[colIndex - 1];
    const currentDifference = Math.abs(currentValue - lookupValue);

    if (currentDifference < closestDifference) {
      closestRow = row;
      closestValue = currentValue;
      closestDifference = currentDifference;
    }
  }

  return closestRow;
}

function calcularResultado(lookupValue, valoresX, valoresY) {
  const result = regression.logarithmic(valoresX.map((x, i) => [x, valoresY[i]]));
  const valorB = result.equation[0];
  const valorC = result.equation[1];
  return Math.exp((lookupValue - valorB) / valorC);
}

const datos = [
  [2.3, 0.075, 10.1, 0.25],
  [10.1, 0.25, 13.3, 0.30],
  [13.3, 0.30, 42.3, 0.85],
  [42.3, 0.850, 52.1, 1.18],
  [52.1, 1.18, 68.9, 2.00],
  [68.9, 2.00, 99.1, 4.75],
  [99.1, 4.75, 100.0, 9.50],
  [100.0, 9.50, 0.0, 0],
];

const d10 = buscarFilaValorAproximado(10, datos, 3);
const valoresX10 = [d10[1], d10[3]];
const valoresY10 = [d10[0], d10[2]];
const resultado10 = calcularResultado(10, valoresX10, valoresY10);
console.log("Resultado para 10:", resultado10.toFixed(2));

const d30 = buscarFilaValorAproximado(30, datos, 3);
const valoresX30 = [d30[1], d30[3]];
const valoresY30 = [d30[0], d30[2]];
const resultado30 = calcularResultado(30, valoresX30, valoresY30);
console.log("Resultado para 30:", resultado30.toFixed(2));

const d60 = buscarFilaValorAproximado(60, datos, 3);
const valoresX60 = [d60[1], d60[3]];
const valoresY60 = [d60[0], d60[2]];
const resultado60 = calcularResultado(60, valoresX60, valoresY60);
console.log("Resultado para 60:", resultado60.toFixed(2));

</script>
</body>
</html>