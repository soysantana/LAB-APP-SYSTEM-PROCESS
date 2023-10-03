<!DOCTYPE html>
<html>
npm install regression
<head>
    <title>Calculadora de PLL</title>
</head>
<body>
    <h1>Calculadora de PLL</h1>
    <p>Abre la consola del navegador para ver los resultados.</p>

    <script src="https://cdn.jsdelivr.net/npm/regression@2.0.1/dist/regression.min.js"></script>

    <script>
        
       // Valores de entrada
var golpes = [31, 23, 15];
var mc = [50.68, 53.19, 55.65];
var x = 25;

// Crear un conjunto de datos
var data = [];
for (var i = 0; i < golpes.length; i++) {
    data.push([Math.log(golpes[i]), mc[i]]);
}

// Realizar la regresión lineal
var result = regression.linear(data);

// Obtener los coeficientes c y b
var c = result.equation[0]; // Pendiente
var b = result.equation[1]; // Intercepto

// Calcular R^2
var rSquared = result.r2;

// Calcular PLL
var lnX = Math.log(x);
var PLL = c * lnX + b;

// Resultados en la consola
console.log("Coeficiente de determinación (R^2): " + rSquared.toFixed(12));
console.log("Valor de predicción (PLL) para x=" + x + ": " + PLL);
console.log("Valor de c: " + c.toFixed(7));
console.log("Valor de b: " + b.toFixed(8));

    </script>
</body>
</html>
