//-------------------------------Navigation entre les photos de la page detail-----------------------------------------

var petitesPhotos= document.getElementById('petites_photos')
var grandePhoto = document.getElementById('imagePreview')

for(var divPhoto of petitesPhotos.children){
	divPhoto.addEventListener('click', function(e){
		var chemin = e.target.src;
		grandePhoto.setAttribute("src", chemin);
		});
}