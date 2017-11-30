<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Food order</title>
<link rel="stylesheet" type="text/css" href="<?php echo public_url('site') ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo public_url('site') ?>/css/style2.css">
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    var gmap = new google.maps.LatLng(21.046485, 105.794763);
    var marker;
    function initialize()
    {
        var mapProp = {
            center:new google.maps.LatLng(21.046485, 105.794763),
            zoom:16,mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

        var styles = [
            {
                featureType: 'road.arterial',
                elementType: 'all',
                stylers: [
                    { hue: '#fff' },
                    { saturation: 100 },
                    { lightness: -48 },
                    { visibility: 'on' }
                ]
            },
            {
                featureType: 'road',
                elementType: 'all',
                stylers: []
            },
            {
                featureType: 'water',
                elementType: 'geometry.fill',
                stylers: [
                    { color: '#adc9b8' }
                ]
            },
            {
                featureType: 'landscape.natural',
                elementType: 'all',
                stylers: [
                    { hue: '#809f80' },
                    { lightness: -35 }
                ]
            }
        ];

        var styledMapType = new google.maps.StyledMapType(styles);
        map.mapTypes.set('Styled', styledMapType);

        marker = new google.maps.Marker({
            map:map,
            draggable:true,
            animation: google.maps.Animation.DROP,
            position: gmap
        });
        google.maps.event.addListener(marker, 'click', toggleBounce);
    }

    function toggleBounce() {

    if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>