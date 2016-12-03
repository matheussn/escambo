var map;
function initialize() {

  	var mapOptions = {
  		center: new google.maps.LatLng(-18.9180862, -48.2569898),
  		zoom: 14,
  		mapTypeId: google.maps.MapTypeId.ROADMAP
  	};
  	map = new google.maps.Map(document.getElementById("map"),mapOptions);

  	var contentString = '<div >'+
  	  '<div class="card-content">'+
      '<h3 class="card-title">Objeto para doação</h3>'+
      '<div class="row">'+
      '<div class="col s4">'+
      '<img src="./images/brinquedos.jpg" width="180">'+
      '</div>'+
      '<div class="col s8" style="font-size:18px;">'+
      '<ul> ' +
      '<li>Titulo: Brinquedos usados</li>'+
      '<li>Descrição: Brinquedos semi-novos com uso de aproximadamente um ano.</li>'+
      '<li>Autor: Maycon Pacheco</li>'+
      '<li>Data: 03/12/2016</li>'+
      '</ul>'+
      '</div>'+
      '</div>'+
      '<div class="card-actions">'+
      '<button data-target="modal1" class="btn">Entrar em contato</button>'+
      '</div>'+
      '</div>'+
	  '</div>'+
	  '<div id="modal1" class="modal modal-fixed-footer">'+
      '<div class="modal-content">'+
      '<h4>Maycon Pacheco</h4>'+
      '<p>A bunch of text</p>'+
    '</div>'+
    '<div class="modal-footer">'+
      '<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>'+
    '</div>'+
  '</div>';

    var infowindow = new google.maps.InfoWindow({
    	content: contentString
  	});

  	//$.getJSON('http://localhost:5000/barganha/api/v1.0/objetos', function(data) { 
            //$.each( data.objetos, function(i, value) {

                var myLatlng = new google.maps.LatLng(/*value.latitude*/-18.9180862, /*value.longitude*/-48.2569898);
                //alert(myLatlng);
                var marker = new google.maps.Marker({
	                position: myLatlng,
	                map: map,
	                title: "Objeto"/*+value.titulo*/
	                //icon: './images/marker.png'
                });
                marker.addListener('click', function() {
    				infowindow.open(map, marker);
  				});

            //});
	//});


}