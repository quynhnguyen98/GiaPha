<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đây là trang web gia phả</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container pt-5 pb-4">
        <?php
        include "minifile/head-footer/head.php"
        ?>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <?php
     include "minifile/head-footer/menu.php"
     ?>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">About Us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>About us <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
        <div class="container">
            <!-- <div class="row d-flex">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url(images/about.jpg);">
    					<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="icon-play"></span>
    					</a>
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5">
    				<div class="row justify-content-start py-5">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome to Lawn Care</span>
		            <h2 class="mb-4">Welcome to Lawn Care Company</h2>
		            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
		            <div class="services-wrap">
		            	<a href="#" class="services-list">Gutter cleaning
		            		<div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div>
		            	</a>
		            	<a href="#" class="services-list">Organinc fertilization and weed control
		            		<div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div>
		            	</a>
		            	<a href="#" class="services-list">Compost top dressing &amp; compost tea application
		            		<div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div>
		            	</a>
		            	<a href="#" class="services-list">New lawn installation
		            		<div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div>
		            	</a>
		            	<a href="#" class="services-list">Mulch and other services available
		            		<div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div>
		            	</a>
		            </div>
		          </div>
		        </div>
	        </div>
        </div> -->
            <div>
                <style>
                .node {
                    cursor: pointer;
                }

                .node circle {
                    fill: #fff;
                    stroke: steelblue;
                    stroke-width: 3px;
                }

                .node text {
                    font: 12px sans-serif;
                }

                .link {
                    fill: none;
                    stroke: #ccc;
                    stroke-width: 2px;
                }
                </style>



                <!-- load the d3.js library -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.min.js"></script>

                <script>
                var treeData = [{
                          
                                "name" : "jhjdhajdhwja",
                                "parent": "null",
                                "children": [{
                                    "name": "jahfwjk",
                                    "parent": "Top Level",
                                    "children": [{
                                        "name": "Son of A",
                                        "parent": "Level 2: A",
                                        "children": [{
                                            "name": "zxcvzxcv",
                                            "parent": "Son of A"
                                        }]
                                    }, {
                                        "name": "Daughter of A",
                                        "parent": "Level 2: A"
                                    }]
                                }, {
                                    "name": "Level 2: B",
                                    "parent": "Top Level"
                                }]
                            }];


                        // ************** Generate the tree diagram	 *****************
                        var margin = {
                                top: 20,
                                right: 120,
                                bottom: 20,
                                left: 120
                            },
                            width = 960 - margin.right - margin.left,
                            height = 500 - margin.top - margin.bottom;

                        var i = 0,
                            duration = 750,
                            root;

                        var tree = d3.layout.tree()
                            .size([height, width]);

                        var diagonal = d3.svg.diagonal()
                            .projection(function(d) {
                                return [d.y, d.x];
                            });

                        var svg = d3.select("body").append("svg")
                            .attr("width", width + margin.right + margin.left)
                            .attr("height", height + margin.top + margin.bottom)
                            .append("g")
                            .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

                        root = treeData[0];
                        root.x0 = height / 2;
                        root.y0 = 0;

                        update(root);

                        d3.select(self.frameElement).style("height", "500px");

                        function update(source) {

                            // Compute the new tree layout.
                            var nodes = tree.nodes(root).reverse(),
                                links = tree.links(nodes);

                            // Normalize for fixed-depth.
                            nodes.forEach(function(d) {
                                d.y = d.depth * 180;
                            });

                            // Update the nodes…
                            var node = svg.selectAll("g.node")
                                .data(nodes, function(d) {
                                    return d.id || (d.id = ++i);
                                });

                            // Enter any new nodes at the parent's previous position.
                            var nodeEnter = node.enter().append("g")
                                .attr("class", "node")
                                .attr("transform", function(d) {
                                    return "translate(" + source.y0 + "," + source.x0 + ")";
                                })
                                .on("click", click);

                            nodeEnter.append("circle")
                                .attr("r", 1e-6)
                                .style("fill", function(d) {
                                    return d._children ? "lightsteelblue" : "#fff";
                                });

                            nodeEnter.append("text")
                                .attr("x", function(d) {
                                    return d.children || d._children ? -13 : 13;
                                })
                                .attr("dy", ".35em")
                                .attr("text-anchor", function(d) {
                                    return d.children || d._children ? "end" : "start";
                                })
                                .text(function(d) {
                                    return d.name;
                                })
                                .style("fill-opacity", 1e-6);

                            // Transition nodes to their new position.
                            var nodeUpdate = node.transition()
                                .duration(duration)
                                .attr("transform", function(d) {
                                    return "translate(" + d.y + "," + d.x + ")";
                                });

                            nodeUpdate.select("circle")
                                .attr("r", 10)
                                .style("fill", function(d) {
                                    return d._children ? "lightsteelblue" : "#fff";
                                });

                            nodeUpdate.select("text")
                                .style("fill-opacity", 1);

                            // Transition exiting nodes to the parent's new position.
                            var nodeExit = node.exit().transition()
                                .duration(duration)
                                .attr("transform", function(d) {
                                    return "translate(" + source.y + "," + source.x + ")";
                                })
                                .remove();

                            nodeExit.select("circle")
                                .attr("r", 1e-6);

                            nodeExit.select("text")
                                .style("fill-opacity", 1e-6);

                            // Update the links…
                            var link = svg.selectAll("path.link")
                                .data(links, function(d) {
                                    return d.target.id;
                                });

                            // Enter any new links at the parent's previous position.
                            link.enter().insert("path", "g")
                                .attr("class", "link")
                                .attr("d", function(d) {
                                    var o = {
                                        x: source.x0,
                                        y: source.y0
                                    };
                                    return diagonal({
                                        source: o,
                                        target: o
                                    });
                                });

                            // Transition links to their new position.
                            link.transition()
                                .duration(duration)
                                .attr("d", diagonal);

                            // Transition exiting nodes to the parent's new position.
                            link.exit().transition()
                                .duration(duration)
                                .attr("d", function(d) {
                                    var o = {
                                        x: source.x,
                                        y: source.y
                                    };
                                    return diagonal({
                                        source: o,
                                        target: o
                                    });
                                })
                                .remove();

                            // Stash the old positions for transition.
                            nodes.forEach(function(d) {
                                d.x0 = d.x;
                                d.y0 = d.y;
                            });
                        }

                        // Toggle children on click.
                        function click(d) {
                            if (d.children) {
                                d._children = d.children;
                                d.children = null;
                            } else {
                                d.children = d._children;
                                d._children = null;
                            }
                            update(d);
                   
                        } 
                </script>


            </div>
        </div>
    </section>

    <section class="ftco-intro bg-primary py-5">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <h2>Contact with us</h2>
                    <p>Do you have any comments or questions about the products then contact us.</p>
                </div>
                <div class="col-md-5 text-md-right">
                    <span class="contact-number">+00(123) 456-78-09</span>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-4">Happy Clients</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- start footer -->
    <?php
        include "minifile/head-footer/footer.php"
        ?>
    <!-- end footer -->



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>

</body>

</html>