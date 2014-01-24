// -------------------------------------------------------------
// Author : Giric Goyal
//
// Illustration of Plotting on map
// ------------------------------------------------------------


// object to hold all the variables and methods.
// It is best to put all the variables and the methods in an object.

var Map = {
	// Object Members

	// Width and Height of the world.png file.
	mapW: 634.0,
	mapH: 477.0,
	
	// Pos to store the 2D coordinates of the points after conversion from lon lat.
	posx: 0.0,
	posy: 0.0,

	// for mercator projection of a map. 

	// You can find many types of map projections.
	// Depending on the type of map image and the projection, you have to define methods 
	// Here is defined map method for mercator projection of a map.
	// You can find these conversion formulas easily on google.

	// this method converts the lon and lat to 2D cordinates.
	funcMap:function(lat, lon){
		this.posx = (lon + 180) * (this.mapW/360);
		latRad = lat * 3.14 / 180;
		mercN = Math.log(Math.tan((3.14/4) + (latRad/2)));
		this.posy = (this.mapH/2) - (this.mapW * mercN / (2 * 3.14));
	}	
}
