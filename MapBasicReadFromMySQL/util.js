// -----------------------------------------------
// AUthor : Giric Goyal
//
// Illustrating how to include js files into other js files.
// -----------------------------------------------

// Include Map.js
// This is just one way of including .js files in other .js files

document.write('<scr'+'ipt type="text/javascript" src="map.js" ></scr'+'ipt>');

// An object to hold all the variables and methods.

var Util = {
	
	// pos values for 2D coordinates of the points.
	posx: 0.0,
	posy: 0.0,
	
	// Call to funcMap() in map.js
	// store the pos values
	// funcMap() converts lat lon value sto 2D coordinates
	latLon2D:function(name, lat, lon){
		Map.funcMap(lat, lon);
		this.posx = Map.posx;
		this.posy = Map.posy;
	}
}
