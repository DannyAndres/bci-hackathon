@extends('layouts.app')

@section('content')
<div class="center">
      <div class="sidebar">
      </div>
      <div class="part1">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Empresas</li>
          </ol>
        </nav>

        <!-- Maqueta -->
        <ul class="list-group">
          <li class="list-group-item">Empresa 1</li>
          <li class="list-group-item">Empresa 2</li>
          <li class="list-group-item">Empresa 3</li>
          <li class="list-group-item">Empresa 4</li>
          <li class="list-group-item active">Empresa 5</li>
          <li class="list-group-item">Empresa 6</li>
          <li class="list-group-item">Empresa 7</li>
          <li class="list-group-item">Empresa 8</li>
          <li class="list-group-item">Empresa 9</li>
        </ul>
      </div>

      <div class="part2">
        <div class="half1">
          <div class="card">
            <div class="card-body">
              <div class="alert alert-primary" role="alert"><strong>Número de empresas totales : </strong>{{ sizeof(\App\Company::all()) }}</div>
              <div class="alert alert-primary" role="alert"><strong>Meta de trabajadores : </strong>{{ \App\Worker::find(1)->goal }} interacciones con empresas</div>
              <div class="alert alert-primary" role="alert"><strong>Número de trabajadores : </strong>{{ sizeof(\App\Worker::all()) }}</div>
            </div>
          </div>
        </div>
        <hr>
        <!-- Fin maqueta -->
        <div class="half2">
          <div class="graph">
              <canvas style="width: 100px !important;" id="chart-area"></canvas>
          </div>
        </div>
      </div>
      <div class="sidebar">
      </div>
    </div>

<script type="text/javascript">
	
var config = {
  type: 'pie',
  data: {
    datasets: [{
      data: [
        20,
        17,
        8,
        5
      ],
      backgroundColor: [
        window.chartColors.blue,
        window.chartColors.red,
        window.chartColors.yellow,
        window.chartColors.green,
      ],
      label: 'Dataset 1'
    }],
    labels: [
      'Reacciones',
      'Comentarios',
      'Compartir',
      'Menciones'
    ]
  },
  options: {
    responsive: true
  }
};

window.onload = function() {
  var ctx = document.getElementById('chart-area').getContext('2d');
  window.myPie = new Chart(ctx, config);
};

document.getElementById('randomizeData').addEventListener('click', function() {
  config.data.datasets.forEach(function(dataset) {
    dataset.data = dataset.data.map(function() {
      return randomScalingFactor();
    });
  });

  window.myPie.update();
});

var colorNames = Object.keys(window.chartColors);

document.getElementById('addDataset').addEventListener('click', function() {
  var newDataset = {
    backgroundColor: [],
    data: [],
    label: 'New dataset ' + config.data.datasets.length,
  };

  for (var index = 0; index < config.data.labels.length; ++index) {
    newDataset.data.push(randomScalingFactor());

    var colorName = colorNames[index % colorNames.length];
    var newColor = window.chartColors[colorName];
    newDataset.backgroundColor.push(newColor);
  }

  config.data.datasets.push(newDataset);
  window.myPie.update();
});

document.getElementById('removeDataset').addEventListener('click', function() {
  config.data.datasets.splice(0, 1);
  window.myPie.update();
});


</script>
@endsection
