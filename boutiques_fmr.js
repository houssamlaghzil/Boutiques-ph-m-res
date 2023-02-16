//--------------------------------------------Affichage de la carte--------------------------------------------------------------
//Paramètres généraux
var centre_x = 2.6;
var centre_y = 48.8;
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
		minZoom: 11,
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
			var url = 'recherche_geom.php?'+
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
	return {color: 'lavender',
			fillColor: 'blueViolet',
			fillOpacity: 0.1,
			weight: 4
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

var paragraphe = document.getElementById('pInfos');
var ficheInfo = document.getElementById('info');
var topFicheInfo = ficheInfo.getBoundingClientRect().top;
var croixFicheInfo = document.getElementById('closeInfo');
var titreFicheInfo = document.getElementById('hInfo');

croixFicheInfo.addEventListener('click', fermerFicheInfo);
function fermerFicheInfo(){
	ficheInfo.classList.add('closedInfo');
	window.scroll({top: 0, behavior: 'smooth'});
	titreFicheInfo.innerHTML = 'Cliquez sur une boutique pour en savoir plus';
	
	//Deselection
	tooltipOptions.className = 'etiquette';
	layerSelect.bindTooltip(nomSelect,tooltipOptions);
}

//-----------------------------------------------Marker--------------------------------------------------------------
// style des icones
var LeafIcon = L.Icon.extend({
		options: {iconSize: [23, 32], iconAnchor: [11, 32]}	
});	

redIcon = new LeafIcon({iconUrl: 'icones/red.png'});
blueIcon = new LeafIcon({iconUrl: 'icones/blue.png'});
var layerSelect = L.layerGroup();
var nomSelect = '';

function onEachFeature(feature, layer) {
	
	//Etiquette
	layer.bindTooltip(feature.properties.nom_pi,tooltipOptions);
	
	//Popup avec photo
	if(feature.properties.chemin_image1 != ''){
		var chemin = '"import/photos/' + feature.properties.chemin_image1 + '"';
		var visuel = '<img src=' + chemin + ' class="miniature">';
	}else{
		var visuel = '<svg class="miniature" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M36.8 192H449.6c20.2-19.8 47.9-32 78.4-32c30.5 0 58.1 12.2 78.3 31.9c18.9-1.6 33.7-17.4 33.7-36.7c0-7.3-2.2-14.4-6.2-20.4L558.2 21.4C549.3 8 534.4 0 518.3 0H121.7c-16 0-31 8-39.9 21.4L6.2 134.7c-4 6.1-6.2 13.2-6.2 20.4C0 175.5 16.5 192 36.8 192zM384 224H320V384H128V224H64V384v80c0 26.5 21.5 48 48 48H336c26.5 0 48-21.5 48-48V384 352 224zm144 16c17.7 0 32 14.3 32 32v48H496V272c0-17.7 14.3-32 32-32zm-80 32v48c-17.7 0-32 14.3-32 32V480c0 17.7 14.3 32 32 32H608c17.7 0 32-14.3 32-32V352c0-17.7-14.3-32-32-32V272c0-44.2-35.8-80-80-80s-80 35.8-80 80z"/></svg>';
	}
	visuel +='<p class="etiquetteSelect">' + feature.properties.nom_pi + '</p>';
	layer.bindPopup(visuel);
	
	//Fiche detaillee
	layer.on('click', function(e){
		paragraphe.innerHTML = '';
		for(nomChamp in feature.properties){
			if (nomChamp != "chemin_image1" && nomChamp != "chemin_image2" && nomChamp != "chemin_image3" && feature.properties[nomChamp] !=''){
				var re = new RegExp('_','g');
				if (nomChamp == "nom_pi"){
					titreFicheInfo.innerHTML = feature.properties[nomChamp];
				} else if (nomChamp == "adresse_pi"){
					paragraphe.innerHTML += '<p><span class="champ">adresse :</span> '+feature.properties[nomChamp]+'</p>';
				} else{
					paragraphe.innerHTML += '<p><span class="champ">'+nomChamp.replace(re,' ')+' :</span> '+feature.properties[nomChamp]+'</p>';
				}
			}
		}
		
		document.getElementById('image_apercu').style = "visibility:hidden";
		document.getElementById('image_apercu2').style = "visibility:hidden";
		document.getElementById('image_apercu3').style = "visibility:hidden";
		if(feature.properties.chemin_image1 != ""){
			document.getElementById('photo').src ="import/photos/" + feature.properties.chemin_image1;
			document.getElementById('image_apercu').removeAttribute('style');
			if(feature.properties.chemin_image2 != ""){
				document.getElementById('photo2').src ="import/photos/" + feature.properties.chemin_image2;
				document.getElementById('image_apercu2').removeAttribute('style');
				if(feature.properties.chemin_image3 != ""){
					document.getElementById('photo3').src ="import/photos/" + feature.properties.chemin_image3;
					document.getElementById('image_apercu3').removeAttribute('style');
				}			
			}	
		}
		//Deplacement de la vue
		ficheInfo.classList.remove('closedInfo');
		// window.scroll({top: window.scrollY + topFicheInfo - 30, behavior: 'smooth'});
		
		// Style de selection
		tooltipOptions.className = 'etiquette';
		layerSelect.bindTooltip(nomSelect,tooltipOptions);
		tooltipOptions.className = 'etiquetteSelect';
		layer.bindTooltip(feature.properties.nom_pi,tooltipOptions);

		//Memoire du dernier selectionne
		layerSelect = layer;
		nomSelect = feature.properties.nom_pi
	});
}

var xhrmarker = new XMLHttpRequest();
var url = 'recherche_marker.php';
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
		
		//Fermeture de la fiche info
		map.addEventListener('popupclose', fermerFicheInfo);
	}
});