<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    
    <p class="d-inline-flex gap-1">
      <a class="btn btn-primary collapsed" data-bs-toggle="collapse" href="#cassagraph" role="button" aria-expanded="false" aria-controls="cassagraph">Casagrande</a>
      <button class="btn btn-primary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#taylorgraph" aria-expanded="false" aria-controls="taylorgraph">Taylor</button>
      <button class="btn btn-primary collapsed" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="cassagraph taylorgraph">Mostra Graficas</button>
    </p>
    <div class="row">
      <div class="col">
        <div class="multi-collapse collapse" id="cassagraph" style="width: 420px; height: 20px;">
          <div class="card card-body">
            <div id="cassagran-graph" style="width: 420px; height: 420px;"></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="multi-collapse collapse" id="cassagraph" style="width: 420px; height: 20px;">
          <div class="card card-body">
            <div id="cassagran-graph-2" style="width: 420px; height: 420px;"></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="multi-collapse collapse" id="cassagraph" style="width: 420px; height: 20px;">
          <div class="card card-body">
            <div id="cassagran-graph-3" style="width: 420px; height: 420px;"></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="multi-collapse collapse" id="cassagraph" style="width: 420px; height: 20px;">
          <div class="card card-body">
            <div id="cassagran-graph-4" style="width: 420px; height: 420px;"></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="multi-collapse collapse" id="cassagraph" style="width: 420px; height: 20px;">
          <div class="card card-body">
            <div id="cassagran-graph-5" style="width: 420px; height: 420px;"></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="multi-collapse collapse" id="taylorgraph" style="width: 420px; height: 20px;">
          <div class="card card-body">
            <div id="taylor-graph" style="width: 420px; height: 420px;"></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="multi-collapse collapse" id="taylorgraph" style="width: 420px; height: 20px;">
          <div class="card card-body">
            <div id="taylor-graph-2" style="width: 420px; height: 420px;"></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="multi-collapse collapse" id="taylorgraph" style="width: 420px; height: 20px;">
          <div class="card card-body">
            <div id="taylor-graph-3" style="width: 420px; height: 420px;"></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="multi-collapse collapse" id="taylorgraph" style="width: 420px; height: 20px;">
          <div class="card card-body">
            <div id="taylor-graph-4" style="width: 420px; height: 420px;"></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="multi-collapse collapse" id="taylorgraph" style="width: 420px; height: 20px;">
          <div class="card card-body">
            <div id="taylor-graph-5" style="width: 420px; height: 420px;"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Graph y Librerias -->
    <script src="https://fastly.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
    <script src="libs/js/cassagrande_graph.js"></script>
    <script src="libs/js/taylor_graph.js"></script>
  </body>
</html>