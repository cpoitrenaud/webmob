/*permet de mémoriser les données saisies par l'internaute*/

MemoireSite = {
    displayError : true
}
MemoireSite.set = function(key,val)  {
    if (localStorage)
        localStorage.setItem(key,val);
    else if(this.displayError)
        this.displayUnsupported()
    return this;
}
MemoireSite.get = function(key)  {
    if (localStorage)
        return localStorage.getItem(key);
    else if(this.displayError)
        this.displayUnsupported()
    return false;
}
MemoireSite.reset = function(key)  {
    this.set(key,undefined)
    return this;
}
MemoireSite.clear = function()  {
    if (localStorage)
        localStorage.clear();
    else if(this.displayError)
        this.displayUnsupported()
    return this;
}
/* une méthode à notre objet de stockage pour afficher une popup en cas de non support du stockage*/
MemoireSite.displayUnsupported = function()  {
    alert("Votre navigateur ne supporte pas le HTML5 et le stockage serveur. Impossible de mémoriser votre saisie.")
}

/* geolocalisation */
myGps = {}
myGps.init = function()  {
    myGps.update();
    return this;
}
myGps.update = function(callback)  {
	if (typeof callback=="function")
	{
		navigator.geolocation.getCurrentPosition(callback, myGps._onError); //fonction de rappel
	}
	else
	{
		navigator.geolocation.getCurrentPosition(myGps._set, myGps._onError);
	}
	return this;
}
myGps._set = function(position)  {
    var infopos = "";
    infopos += "Latitude : "+position.coords.latitude +"<br/>";
    infopos += "Longitude: "+position.coords.longitude+"<br/>";
    infopos += "Altitude : "+position.coords.altitude +"<br/>";
    MemoireSite.set("lastPosition",infopos);
    return this;
}
myGps.get = function(key)  {
    return MemoireSite.get("lastPosition");
}
myGps.reset = function(key)  {
    this.update()
    return this;
}
myGps._onError = function(error)  {
    var info = "<b>Erreur lors de la géolocalisation : ";
    switch(error.code) {
        case error.TIMEOUT:
            info += "Timeout !<br/>";
            break;
        case error.PERMISSION_DENIED:
            info += "Vous n’avez pas donné la permission<br/>";
            break;
        case error.POSITION_UNAVAILABLE:
            info += "La position n’a pu être déterminée<br/>";
            break;
        case error.UNKNOWN_ERROR:
            info += "Erreur inconnue";
            break;
            info += "</b>";
    }
    MemoireSite.set("lastPosition",info);
}