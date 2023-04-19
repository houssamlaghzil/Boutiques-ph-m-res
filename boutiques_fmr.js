//--------------------------------------------Affichage de la carte--------------------------------------------------------------
//Paramètres généraux
var centre_x = 2.6;
var centre_y = 48.7;
var zoom_defaut = 9;

//Initialisation de la carte
var map = L.map('map',{
	center: [centre_y, centre_x],
	zoom: zoom_defaut
});
map.options.minZoom = 8;
var lastClicked;

//Fond de plan	
L.tileLayer('https://tile.jawg.io/ccir-streets-grey/{z}/{x}/{y}.png?apiKey=7d9bf4e98509ba2d6f10c9ba8a63347eb437bbcae9616cad9329d581be9f6468&', {
	type: 'map',
		ext: 'png',
		attribution: 'Fond Jawg - OpenStreetMap contributors | CCI Seine-et-Marne',
		minZoom: 10,
	subdomains: '1234'
	}).addTo(map);	
L.tileLayer('https://tile.jawg.io/ccir-buildings/{z}/{x}/{y}.png?apiKey=7d9bf4e98509ba2d6f10c9ba8a63347eb437bbcae9616cad9329d581be9f6468&', {
	type: 'map',
		ext: 'png',
		attribution: 'Fond Jawg - OpenStreetMap contributors | CCI Seine-et-Marne',
		minZoom: 16,
	subdomains: '1234'
	}).addTo(map);
L.tileLayer('https://tile.jawg.io/ccir-labels/{z}/{x}/{y}.png?apiKey=7d9bf4e98509ba2d6f10c9ba8a63347eb437bbcae9616cad9329d581be9f6468&', {
	type: 'map',
		ext: 'png',
		attribution: 'Fond Jawg - OpenStreetMap contributors | CCI Seine-et-Marne',
		minZoom: 11,
	subdomains: '1234'
	}).addTo(map);
	
var param_couches = [{'nom' : 'departements',
						'ou' : 'dep_geom',
						'code' : 'code_dep',
						'intitule' : 'nom_dep',
						'type' : 'code_dep',
						'nom_groupe' : 'departements'
					}];	
var tooltipOptions = {
			permanent : false, 
			direction :'bottom',
			className : 'etiquette',
			offset: [0, 0]
	};

//Affichage des couches
var tabPromessesPrepa = param_couches.map((couche, indice) => preparerCouche(couche, indice));
var resultatsPrepa = Promise.all(tabPromessesPrepa).then(resultat => afficherCouches(resultat));

//--------------------------------------------Autres fonctions--------------------------------------------------------------

function preparerCouche(param, indice){
	return new Promise((resolve, reject) => {
		
			var xhrcouche = new XMLHttpRequest();
			var url = '../recherche_geom.php?'+
					'code='+ param.code +
					'&intitule='+ param.intitule +
					'&type='+ param.type +
					'&ou='+ param.ou;
			xhrcouche.open('GET', url);
			xhrcouche.send(null);
			
			xhrcouche.addEventListener('readystatechange', function(){
					if (xhrcouche.readyState == XMLHttpRequest.DONE && xhrcouche.status == 200){
						var retour = JSON.parse(xhrcouche.responseText);
						geojsonLayer = L.geoJson(retour,{
							style: style,
							zIndex: indice,
							onEachFeature: onEachFeatureDecor,
							interactive: true
						});
						resolve({objetCouche: geojsonLayer,
							nom : param.nom,
							nom_groupe : param.nom_groupe,
							index : indice
						});
					}
				});
		});
}

function afficherCouches(resultatsPrepa){
		
	var tabPromessesAffich = resultatsPrepa.map(resultat => afficherUneCouche(resultat));
	var resultatsAffich = Promise.all(tabPromessesAffich);
}

function afficherUneCouche(couche){
	return new Promise((resolve, reject) => {
		//On ajoute cette couche à la carte (indice = -1 si non trouvée)
		if(couche != undefined && couche.index >=0) {
			couche.objetCouche.addTo(map);
		}
		resolve();
	});
}

//Couleurs
function style(feature) {
	return {color: 'MediumPurple',
			fillColor: 'blueViolet',
			fillOpacity: 0.1,
			weight: 2
		};
}
//Etiquettes departements
function onEachFeatureDecor(feature, layer) {
	
	var etiquettesDepOptions = {
			permanent : true, 
			direction :'center',
			className : 'etiquetteDep',
	};
	
	layer.bindTooltip(feature.properties.nom,etiquettesDepOptions);
}

//--------------------------------------------Fiche info--------------------------------------------------------------

//-----------------------------------------------Marker--------------------------------------------------------------
//Liste des boutiques
var listePopulaires = document.getElementById('list_popular');

//Style des icones
var LeafIcon = L.Icon.extend({
		options: {iconSize: [42, 64], iconAnchor: [22, 64], className:'icone'}
});	

redIcon = new LeafIcon({iconUrl: '../icones/jaune.png'});
blueIcon = new LeafIcon({iconUrl: '../icones/bleu.png'});
var layerSelect = L.layerGroup();
var nomSelect = '';

function onEachFeature(feature, layer) {
	
	//Etiquette
	layer.bindTooltip(feature.properties.nom_pi,tooltipOptions);
	
	//Popup avec photo
	if(feature.properties.chemin_image1 != ''){
		var chemin = '../import/photos/' + feature.properties.chemin_image1;
		var visuel = '<a href="detail.php?boutique='+ feature.properties.idboutique +'"><img src="' + chemin + '" class="miniature">';
	}else{
		chemin ='';
		var defautXmlns = "http://www.w3.org/2000/svg";
		var viewBox = '0 0 640 512';
		var pathD = 'M36.8 192H449.6c20.2-19.8 47.9-32 78.4-32c30.5 0 58.1 12.2 78.3 31.9c18.9-1.6 33.7-17.4 33.7-36.7c0-7.3-2.2-14.4-6.2-20.4L558.2 21.4C549.3 8 534.4 0 518.3 0H121.7c-16 0-31 8-39.9 21.4L6.2 134.7c-4 6.1-6.2 13.2-6.2 20.4C0 175.5 16.5 192 36.8 192zM384 224H320V384H128V224H64V384v80c0 26.5 21.5 48 48 48H336c26.5 0 48-21.5 48-48V384 352 224zm144 16c17.7 0 32 14.3 32 32v48H496V272c0-17.7 14.3-32 32-32zm-80 32v48c-17.7 0-32 14.3-32 32V480c0 17.7 14.3 32 32 32H608c17.7 0 32-14.3 32-32V352c0-17.7-14.3-32-32-32V272c0-44.2-35.8-80-80-80s-80 35.8-80 80z';
		
		var visuel = '<a href="detail.php?boutique='+ feature.properties.idboutique +'"><svg class="miniature" xmlns='+ defautXmlns +
			' viewBox="' + viewBox +
			'">' +
			// <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->'+
			'<path d="'+ pathD+'"/></svg>';
	}
	visuel +='<p class="etiquetteSelect">' + feature.properties.nom_pi + '</p></a>';
	layer.bindPopup(visuel);
	
	//--------Liste des boutiques
	var divCol = document.createElement("div");
	divCol.setAttribute("class", "col-lg-4 col-md-6");
	var divCard =  document.createElement("div");
	divCard.setAttribute("class", "card");
	var lienDetails =  document.createElement("a");
	lienDetails.setAttribute("href", "detail.php?boutique=" + feature.properties.idboutique);
	lienDetails.setAttribute("title", feature.properties.nom_pi);
	var divImgBlock =  document.createElement("div");
	divImgBlock.setAttribute("class", "img-block");
	
	//Image
	if(chemin != ''){//photo
		var imgBoutique =  document.createElement("img");
		imgBoutique.setAttribute("class", "img-fluid");
		imgBoutique.setAttribute("src", chemin);
		imgBoutique.setAttribute("alt", feature.properties.nom_pi);
	}else{//pas de photo
		var imgBoutique =  document.createElementNS(defautXmlns, "svg");
		imgBoutique.setAttribute("viewBox", viewBox);
		var pathBoutique =  document.createElementNS(defautXmlns, "path");
		pathBoutique.setAttribute("d", pathD);
		imgBoutique.appendChild(pathBoutique);
	}
	
	var divCardBody = document.createElement("div");
	divCardBody.setAttribute("class", "card-body");
	var lienDetailsBody =  document.createElement("a");
	lienDetailsBody.setAttribute("href", "detail.php?boutique=" + feature.properties.idboutique);
	lienDetailsBody.setAttribute("title", feature.properties.nom_pi);
	var h3CardBody = document.createElement("h3");
	var h3Texte = document.createTextNode(feature.properties.nom_pi);
	var pCardBody = document.createElement("p");
	var pAdresse = document.createTextNode(feature.properties.adresse_pi);
	var ulCardBody = document.createElement("ul");
	
	//Champs en vedette
	if(feature.properties.activites_acceptees != ''){
		var liCardBody1 = document.createElement("li");
		var liActivite = document.createTextNode('Activités acceptées : ' + feature.properties.activites_acceptees);
		liCardBody1.appendChild(liActivite);
		ulCardBody.appendChild(liCardBody1);
	}
	if(feature.properties.surface_de_vente != ''){
		var liCardBody2 = document.createElement("li");
		var liSurface = document.createTextNode('Surface de vente : ' + feature.properties.surface_de_vente + 'm²');
		liCardBody2.appendChild(liSurface);
		ulCardBody.appendChild(liCardBody2);
	}
	
	divImgBlock.appendChild(imgBoutique);
	lienDetails.appendChild(divImgBlock);
	divCard.appendChild(lienDetails);
	
	pCardBody.appendChild(pAdresse);
	h3CardBody.appendChild(h3Texte);
	lienDetailsBody.appendChild(h3CardBody);
	lienDetailsBody.appendChild(pCardBody);
	divCardBody.appendChild(lienDetailsBody);

	divCardBody.appendChild(ulCardBody);
	divCard.appendChild(divCardBody);
	
	divCol.appendChild(divCard);
	listePopulaires.appendChild(divCol);
}

var xhrmarker = new XMLHttpRequest();
var url = '../recherche_marker.php';
xhrmarker.open('GET', url);
xhrmarker.send(null);

xhrmarker.addEventListener('readystatechange', function(){
if (xhrmarker.readyState == XMLHttpRequest.DONE && xhrmarker.status == 200){
		var retour = JSON.parse(xhrmarker.responseText);

		
		
		map.addLayer(L.geoJson(retour, {
							pointToLayer: function (feature, latlng) {return L.marker(latlng,{icon: blueIcon})}, 
							filter : function (feature, layer) { if (feature.properties.nom_pi.substring(0,6) != "Projet") {return true} else {return false}},
							onEachFeature: onEachFeature
							}));
							
		map.addLayer(L.geoJson(retour, {
							pointToLayer: function (feature, latlng) {return L.marker(latlng,{icon: redIcon})}, 
							filter : function (feature, layer) { if (feature.properties.nom_pi.substring(0,6) == "Projet") {return true} else {return false}},
							onEachFeature: onEachFeature
							}));
	}
});
//--------------------------------------Champ de recherche--------------------------------------------------------------
let selcity = document.getElementById('select_city');
var boutonChercher = document.getElementById('searchbutton');

boutonChercher.addEventListener('click', function(){

	let selcity = document.getElementById('select_city');
	if(selcity.value == 'default'){
		var geomChoix = [centre_y, centre_x];
		var zoomChoix = zoom_defaut;
	}else{
		var geomChoix = selcity.value.split(',');
		var zoomChoix = 13;
	}
	map.flyTo(geomChoix, zoomChoix);
});