function seafood_company_googlemap_init(dom_obj, coords) {
	"use strict";
	if (typeof SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'] == 'undefined') seafood_company_googlemap_init_styles();
	SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'].geocoder = '';
	try {
		var id = dom_obj.id;
		SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id] = {
			dom: dom_obj,
			markers: coords.markers,
			geocoder_request: false,
			opt: {
				zoom: coords.zoom,
				center: null,
				scrollwheel: false,
				scaleControl: false,
				disableDefaultUI: false,
				panControl: true,
				zoomControl: true, //zoom
				mapTypeControl: false,
				streetViewControl: false,
				overviewMapControl: false,
				styles: SEAFOOD_COMPANY_STORAGE['googlemap_styles'][coords.style ? coords.style : 'default'],
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
		};
		
		seafood_company_googlemap_create(id);

	} catch (e) {
		


	};
}

function seafood_company_googlemap_create(id) {
	"use strict";

	// Create map
	SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].map = new google.maps.Map(SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].dom, SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].opt);

	// Add markers
	for (var i in SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers)
		SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers[i].inited = false;
	seafood_company_googlemap_add_markers(id);
	
	// Add resize listener
	jQuery(window).resize(function() {
		if (SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].map)
			SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].map.setCenter(SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].opt.center);
	});
}

function seafood_company_googlemap_add_markers(id) {
	"use strict";
	for (var i in SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers) {
		
		if (SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers[i].inited) continue;
		
		if (SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers[i].latlng == '') {
			
			if (SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].geocoder_request!==false) continue;
			
			if (SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'].geocoder == '') SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'].geocoder = new google.maps.Geocoder();
			SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].geocoder_request = i;
			SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'].geocoder.geocode({address: SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers[i].address}, function(results, status) {
				"use strict";
				if (status == google.maps.GeocoderStatus.OK) {
					var idx = SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].geocoder_request;
					if (results[0].geometry.location.lat && results[0].geometry.location.lng) {
						SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers[idx].latlng = '' + results[0].geometry.location.lat() + ',' + results[0].geometry.location.lng();
					} else {
						SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers[idx].latlng = results[0].geometry.location.toString().replace(/\(\)/g, '');
					}
					SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].geocoder_request = false;
					setTimeout(function() { 
						seafood_company_googlemap_add_markers(id); 
						}, 200);
				} else
					dcl(SEAFOOD_COMPANY_STORAGE['strings']['geocode_error'] + ' ' + status);
			});
		
		} else {
			
			// Prepare marker object
			var latlngStr = SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers[i].latlng.split(',');
			var markerInit = {
				map: SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].map,
				position: new google.maps.LatLng(latlngStr[0], latlngStr[1]),
				clickable: SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers[i].description!=''
			};
			if (SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers[i].point) markerInit.icon = SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers[i].point;
			if (SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers[i].title) markerInit.title = SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers[i].title;
			SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers[i].marker = new google.maps.Marker(markerInit);
			
			// Set Map center
			if (SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].opt.center == null) {
				SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].opt.center = markerInit.position;
				SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].map.setCenter(SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].opt.center);				
			}
			
			// Add description window
			if (SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers[i].description!='') {
				SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers[i].infowindow = new google.maps.InfoWindow({
					content: SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers[i].description
				});
				google.maps.event.addListener(SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers[i].marker, "click", function(e) {
					var latlng = e.latLng.toString().replace("(", '').replace(")", "").replace(" ", "");
					for (var i in SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers) {
						if (latlng == SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers[i].latlng) {
							SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers[i].infowindow.open(
								SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].map,
								SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers[i].marker
							);
							break;
						}
					}
				});
			}
			
			SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'][id].markers[i].inited = true;
		}
	}
}

function seafood_company_googlemap_refresh(id) {
	"use strict";
	for (id in SEAFOOD_COMPANY_STORAGE['googlemap_init_obj']) {
		seafood_company_googlemap_create(id);
	}
}

function seafood_company_googlemap_init_styles() {
	// Init Google map
	SEAFOOD_COMPANY_STORAGE['googlemap_init_obj'] = {};
	SEAFOOD_COMPANY_STORAGE['googlemap_styles'] = {
		'default': []
	};
	if (window.seafood_company_theme_googlemap_styles!==undefined)
		SEAFOOD_COMPANY_STORAGE['googlemap_styles'] = seafood_company_theme_googlemap_styles(SEAFOOD_COMPANY_STORAGE['googlemap_styles']);
}