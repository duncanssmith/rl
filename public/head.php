<head>
<title>ranterslodge.co.uk</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" media="all"/>
    <link rel="stylesheet" href="media/css/main.css" type="text/css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ asset('/media/js/vendor/jquery/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('/media/js/vendor/twitter/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

    <script>
        $(function() {
            $('a[href*=#]:not([href=#carousel-menu])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 800);
                        return false;
                    }
                }
            });
        });
    </script>


<?php
	include 'data.php';
    $path="media/images/";
	$path2017="media/images/2017/";
?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Ranters Lodge Artists' Studio-Cottage, Chesil Beach, Chiswell, Portland, England">
<meta name="keywords" content="Ranters Lodge, Cottage, Rental, Holiday rental, Holiday cottage, Portland, Judith Frost, Dorset Art, Art, Artists' Studio, Artists Studio, artist studio, Dorset Studios, Dorset, Chiswell, Chesil, Chesil Bank, Chesil Beach, World Heritage Site, Jurassic, Jurassic Coast, Fortuneswell, Weares, West Weares">
<meta name="content" content="Ranters Lodge, Rental, Holiday rental, Holiday cottage, Portland, Judith Frost, Artists Studio Cottage, artist studio, Dorset Studios, Dorset, Chiswell, Chesil Beach, World Heritage Site, Jurassic Coast, Fortuneswell">
<meta name="search" content="yes">
</head>
