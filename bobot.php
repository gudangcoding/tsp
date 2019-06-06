<div class="page-header">
    <h1>Bobot Titik</h1>
</div>

<form class="form-inline">    
    <input type="hidden" name="m" value="bobot" />
    <div class="form-group">
        <label>Kelompok </label>
        <select class="form-control" name="kode_kelompok" onchange="this.form.submit()">
            <option value='K02'>Pura di Bali</option>
            <option value='K01'>Pantai di Bali</option>        
        </select>
    </div>
</form>
<hr />
<form method="post">
    <div class="panel panel-default">
        <div class="panel-heading form-inline">                    
            <div class="form-group">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</a>
            </div>
            <div class="form-group">
                <a class="btn btn-default" href="cetak.php?m=bobot" target="_blank"><span class="glyphicon glyphicon-plus"></span> Cetak</a>
            </div>     
            <div class="form-group">
                <select class="form-control" name="titik1" id="start">                                       
                                    </select>
            </div>
            <div class="form-group">
                <select class="form-control" name="titik2" id="end">                                   
                                    </select>
            </div>
        </div>
        <div class="panel-body">           
            <div id="map" style="height: 300px;"></div>
        </div>
                <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th class="nw">Nama Alternatif</th>
                                    </tr>
            </thead>
            <tbody>
                        </tbody>
            </table>
        </div>
    </div>
</form>
<script>

function initMap() {
    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer;
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 7,
      center: {
        lat : -8.251889, 
        lng : 115.076818      }
    });
    directionsDisplay.setMap(map);

    var onChangeHandler = function() {
      calculateAndDisplayRoute(directionsService, directionsDisplay);
    };
    document.getElementById('start').addEventListener('change', onChangeHandler);
    document.getElementById('end').addEventListener('change', onChangeHandler);
}

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
    directionsService.route({
      origin: {
        lat : parseFloat($('#start').find(':selected').data('lat')), 
        lng : parseFloat($('#start').find(':selected').data('lng')), 
      },
      destination: {
        lat : parseFloat($('#end').find(':selected').data('lat')), 
        lng : parseFloat($('#end').find(':selected').data('lng')), 
      },
      travelMode: 'DRIVING'
    }, function(response, status) {
      if (status === 'OK') {
        $('.bobot_' + $('#start').val() + '_' + $('#end').val()).val(response.routes[0].legs[0].distance.value / 1000);
        $('.bobot_' + $('#end').val() + '_' + $('#start').val()).val(response.routes[0].legs[0].distance.value / 1000);

        directionsDisplay.setDirections(response);
      } else {      
        window.alert('Directions request failed due to ' + satus);
      }
    });
}

$(function(){
    initMap();
})
</script>