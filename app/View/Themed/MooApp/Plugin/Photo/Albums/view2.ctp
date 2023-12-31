<script type="text/javascript" src="<?php echo $this->Html->url( '/', true ); ?>extras/jquery.min.1.7.js"></script>
<script type="text/javascript" src="<?php echo $this->Html->url( '/', true ); ?>extras/modernizr.2.5.3.min.js"></script>
<script type="text/javascript" src="<?php echo $this->Html->url( '/', true ); ?>lib/hash.js"></script>
<script>
    var paths = null;
</script>
<?php
    $photoModel = Moocore::getInstance()->getModel('Photo');
    $photos = $photoModel->find( 'all', array('order' => array('Photo.id DESC') ));
    $paths = array();
    for($i = 0; $i < count($photos); $i ++)
    {
        $photo_path = $photos[$i]['Photo']['thumbnail'];
        $photo_created = $photos[$i]['Photo']['created'];
        $photo_id = $photos[$i]['Photo']['id'];
        $photo_created1 = explode(" ", $photo_created);
        $photo_created = $photo_created1[0];
        list($year, $month, $day) = split('[/.-]', $photo_created);
        $path = $year . "/" . $month . "/" . $day . "/" . $photo_id . "/" . $photo_path;
        array_push($paths, $path);
    }
?>
<script>
    paths = new Array();
<?php
    for($i = 0; $i < count($paths); $i ++):
    {
?>
        paths[<?php echo $i; ?>] = '<?php echo $paths[$i]; ?>';
<?php
    }
    endfor;
?>
</script>
<div id="canvas">
	<div class="zoom-icon zoom-icon-in"></div>
	<div class="magazine-viewport">
		<div class="container">
			<div class="magazine">
				<!-- Next button -->
				<div ignore="1" class="next-button"></div>
				<!-- Previous button -->
				<div ignore="1" class="previous-button"></div>
			</div>
		</div>
	</div>
	<!-- Thumbnails -->
	<div class="thumbnails">
		<div>
			<ul>
<?php
    for($i = 1; $i <= count($paths); $i ++):
    {
        if($i == 1 ):
        {
?>
				<li class="d">
					<img src="<?php echo $this->Html->url( '/', true ); ?>uploads/photos/thumbnail/<?php echo $paths[$i - 1];?>" width="76" height="100" class="page-<?php echo $i;?>">
					<span><?php echo $i;?></span>
				</li>
<?php
        }
        else:
        {
            if($i < count($paths)):
            {
?>
				<li class="d">
					<img src="<?php echo $this->Html->url( '/', true ); ?>uploads/photos/thumbnail/<?php echo $paths[$i - 1];?>" width="76" height="100" class="page-<?php echo $i;?>">
					<img src="<?php echo $this->Html->url( '/', true ); ?>uploads/photos/thumbnail/<?php echo $paths[$i];?>" width="76" height="100" class="page-<?php echo $i + 1;?>">
					<span><?php echo $i;?>-<?php echo $i + 1;?></span>
				</li>
<?php
				$i ++;
			}
			else:
			{
?>
				<li class="d">
					<img src="<?php echo $this->Html->url( '/', true ); ?>uploads/photos/thumbnail/<?php echo $paths[$i - 1];?>" width="76" height="100" class="page-<?php echo $i;?>">
					<span><?php echo $i;?></span>
				</li>
<?php
			}
			endif;
		}
		endif;
	}
	endfor;
?>
			<ul>
		<div>
	</div>
</div>

<script type="text/javascript">
function loadApp() {
 	$('#canvas').fadeIn(1000);
 	var flipbook = $('.magazine');
 	// Check if the CSS was already loaded
	if (flipbook.width()==0 || flipbook.height()==0) {
		setTimeout(loadApp, 10);
		return;
	}
	// Create the flipbook
	flipbook.turn({
		// Magazine width
		width: 922,
		// Magazine height
		height: 600,
		// Duration in millisecond
		duration: 1000,
		// Hardware acceleration
		acceleration: !isChrome(),
		// Enables gradients
		gradients: true,
		// Auto center this flipbook
		autoCenter: true,
		// Elevation from the edge of the flipbook when turning a page
		elevation: 50,
		// The number of pages
		pages: <?php echo count($paths); ?>,
		// Events
		when: {
			turning: function(event, page, view) {
				var book = $(this),
				currentPage = book.turn('page'),
				pages = book.turn('pages');
				// Update the current URI
				Hash.go('page/' + page).update();
				// Show and hide navigation buttons
				disableControls(page);
				$('.thumbnails .page-'+currentPage).
					parent().
					removeClass('current');
				$('.thumbnails .page-'+page).
					parent().
					addClass('current');
			},
			turned: function(event, page, view) {
				disableControls(page);
				$(this).turn('center');
				if (page==1) {
					$(this).turn('peel', 'br');
				}
			},
			missing: function (event, pages) {
				// Add pages that aren't in the magazine
				for (var i = 0; i < pages.length; i++)
					addPage(pages[i], $(this));
			}
		}
	});

	// Zoom.js
	$('.magazine-viewport').zoom({
		flipbook: $('.magazine'),
		max: function() {
			return largeMagazineWidth()/$('.magazine').width();
		},
		when: {
			swipeLeft: function() {
				$(this).zoom('flipbook').turn('next');
			},
			swipeRight: function() {
				$(this).zoom('flipbook').turn('previous');
			},
			resize: function(event, scale, page, pageElement) {
//				if (scale==1)
//					loadSmallPage(page, pageElement);
//				else
//					loadLargePage(page, pageElement);
			},
			zoomIn: function () {
			},

			zoomOut: function () {
			}
		}
	});

	// Zoom event
//	if ($.isTouch)
//		$('.magazine-viewport').bind('zoom.doubleTap', zoomTo);
//	else
//		$('.magazine-viewport').bind('zoom.tap', zoomTo);
	// Using arrow keys to turn the page
	$(document).keydown(function(e){
		var previous = 37, next = 39, esc = 27;
		switch (e.keyCode) {
			case previous:
				// left arrow
				$('.magazine').turn('previous');
				e.preventDefault();
			break;
			case next:
				//right arrow
				$('.magazine').turn('next');
				e.preventDefault();
			break;
			case esc:
				$('.magazine-viewport').zoom('zoomOut');
				e.preventDefault();
			break;
		}
	});

	// URIs - Format #/page/1
	Hash.on('^page\/([0-9]*)$', {
		yep: function(path, parts) {
			var page = parts[1];
			if (page!==undefined) {
				if ($('.magazine').turn('is'))
					$('.magazine').turn('page', page);
			}

		},
		nop: function(path) {
			if ($('.magazine').turn('is'))
				$('.magazine').turn('page', 1);
		}
	});


	$(window).resize(function() {
		resizeViewport();
	}).bind('orientationchange', function() {
		resizeViewport();
	});

	// Events for thumbnails
	$('.thumbnails').click(function(event) {
		var page;
		if (event.target && (page=/page-([0-9]+)/.exec($(event.target).attr('class'))) ) {
			$('.magazine').turn('page', page[1]);
		}
	});

	$('.thumbnails li').
		bind($.mouseEvents.over, function() {
			$(this).addClass('thumb-hover');
		}).bind($.mouseEvents.out, function() {
			$(this).removeClass('thumb-hover');
		});
	if ($.isTouch) {
		$('.thumbnails').
			addClass('thumbanils-touch').
			bind($.mouseEvents.move, function(event) {
				event.preventDefault();
			});
	} else {
		$('.thumbnails ul').mouseover(function() {
			$('.thumbnails').addClass('thumbnails-hover');
		}).mousedown(function() {
			return false;
		}).mouseout(function() {
			$('.thumbnails').removeClass('thumbnails-hover');
		});
	}

	// Regions
	if ($.isTouch) {
		$('.magazine').bind('touchstart', regionClick);
	} else {
		$('.magazine').click(regionClick);
	}

	// Events for the next button
	$('.next-button').bind($.mouseEvents.over, function() {
		$(this).addClass('next-button-hover');

	}).bind($.mouseEvents.out, function() {
		$(this).removeClass('next-button-hover');
	}).bind($.mouseEvents.down, function() {
		$(this).addClass('next-button-down');
	}).bind($.mouseEvents.up, function() {
		$(this).removeClass('next-button-down');
	}).click(function() {
		$('.magazine').turn('next');
	});

	// Events for the next button
	$('.previous-button').bind($.mouseEvents.over, function() {
		$(this).addClass('previous-button-hover');
	}).bind($.mouseEvents.out, function() {
		$(this).removeClass('previous-button-hover');
	}).bind($.mouseEvents.down, function() {
		$(this).addClass('previous-button-down');
	}).bind($.mouseEvents.up, function() {
		$(this).removeClass('previous-button-down');
	}).click(function() {
		$('.magazine').turn('previous');
	});
	resizeViewport();
	$('.magazine').addClass('animated');
}

// Zoom icon
$('.zoom-icon').bind('mouseover', function() {
 	if ($(this).hasClass('zoom-icon-in'))
 		$(this).addClass('zoom-icon-in-hover');
 	if ($(this).hasClass('zoom-icon-out'))
 		$(this).addClass('zoom-icon-out-hover');
 }).bind('mouseout', function() {
 	 if ($(this).hasClass('zoom-icon-in'))
 		$(this).removeClass('zoom-icon-in-hover');
 	if ($(this).hasClass('zoom-icon-out'))
 		$(this).removeClass('zoom-icon-out-hover');
 }).bind('click', function() {
 	if ($(this).hasClass('zoom-icon-in'))
 		$('.magazine-viewport').zoom('zoomIn');
 	else if ($(this).hasClass('zoom-icon-out'))
		$('.magazine-viewport').zoom('zoomOut');
 });

 $('#canvas').hide();
// Load the HTML4 version if there's not CSS transform
yepnope({
	test : Modernizr.csstransforms,
	yep: ['<?php echo $this->Html->url( '/', true ); ?>lib/turn.min.js'],
	nope: ['<?php echo $this->Html->url( '/', true ); ?>lib/turn.html4.min.js'],
	both: ['<?php echo $this->Html->url( '/', true ); ?>lib/zoom.min.js', '<?php echo $this->Html->url( '/', true ); ?>css/magazine.css'],
	complete: loadApp
});
</script>

<script>
/*
 * Magazine sample
 */

function addPage(page, book) {

    var id, pages = book.turn('pages');

    // Create a new element for this page
    var element = $('<div />', {});

    // Add the page to the flipbook
    if (book.turn('addPage', element, page)) {

        // Add the initial HTML
        // It will contain a loader indicator and a gradient
        element.html('<div class="gradient"></div><div class="loader"></div>');

        // Load the page
        loadPage(page, element);
    }

}

function loadPage(page, pageElement) {

    // Create an image element

    var img = $('<img />');

    img.mousedown(function(e) {
        e.preventDefault();
    });

    img.load(function() {

        // Set the size
        $(this).css({width: '100%', height: '100%'});

        // Add the image to the page after loaded

        $(this).appendTo(pageElement);

        // Remove the loader indicator

        pageElement.find('.loader').remove();
    });

    // Load the page
    img.attr('src', '<?php echo $this->Html->url( '/', true ); ?>/uploads/photos/thumbnail/' + paths[page - 1]);

//	loadRegions(page, pageElement);

}

// Zoom in / Zoom out

function zoomTo(event) {

    setTimeout(function() {
        if ($('.magazine-viewport').data().regionClicked) {
            $('.magazine-viewport').data().regionClicked = false;
        } else {
            if ($('.magazine-viewport').zoom('value')==1) {
                $('.magazine-viewport').zoom('zoomIn', event);
            } else {
                $('.magazine-viewport').zoom('zoomOut');
            }
        }
    }, 1);

}



// Load regions

function loadRegions(page, element) {

    $.getJSON('images/pages/'+page+'-regions.json').
    done(function(data) {

        $.each(data, function(key, region) {
            addRegion(region, element);
        });
    });
}

// Add region

function addRegion(region, pageElement) {

    var reg = $('<div />', {'class': 'region  ' + region['class']}),
        options = $('.magazine').turn('options'),
        pageWidth = options.width/2,
        pageHeight = options.height;

    reg.css({
        top: Math.round(region.y/pageHeight*100)+'%',
        left: Math.round(region.x/pageWidth*100)+'%',
        width: Math.round(region.width/pageWidth*100)+'%',
        height: Math.round(region.height/pageHeight*100)+'%'
    }).attr('region-data', $.param(region.data||''));


    reg.appendTo(pageElement);
}

// Process click on a region

function regionClick(event) {

    var region = $(event.target);

    if (region.hasClass('region')) {

        $('.magazine-viewport').data().regionClicked = true;

        setTimeout(function() {
            $('.magazine-viewport').data().regionClicked = false;
        }, 100);

        var regionType = $.trim(region.attr('class').replace('region', ''));

        return processRegion(region, regionType);

    }

}

// Process the data of every region

function processRegion(region, regionType) {

    data = decodeParams(region.attr('region-data'));

    switch (regionType) {
        case 'link' :

            window.open(data.url);

            break;
        case 'zoom' :

            var regionOffset = region.offset(),
                viewportOffset = $('.magazine-viewport').offset(),
                pos = {
                    x: regionOffset.left-viewportOffset.left,
                    y: regionOffset.top-viewportOffset.top
                };

            $('.magazine-viewport').zoom('zoomIn', pos);

            break;
        case 'to-page' :

            $('.magazine').turn('page', data.page);

            break;
    }

}

// http://code.google.com/p/chromium/issues/detail?id=128488

function isChrome() {

    return navigator.userAgent.indexOf('Chrome')!=-1;

}

function disableControls(page) {
    if (page==1)
        $('.previous-button').hide();
    else
        $('.previous-button').show();

    if (page==$('.magazine').turn('pages'))
        $('.next-button').hide();
    else
        $('.next-button').show();
}

// Set the width and height for the viewport

function resizeViewport() {

    var width = $(window).width(),
        height = $(window).height(),
        options = $('.magazine').turn('options');

    $('.magazine').removeClass('animated');

    $('.magazine-viewport').css({
        width: width,
        height: height
    }).
    zoom('resize');


    if ($('.magazine').turn('zoom')==1) {
        var bound = calculateBound({
            width: options.width,
            height: options.height,
            boundWidth: Math.min(options.width, width),
            boundHeight: Math.min(options.height, height)
        });

        if (bound.width%2!==0)
            bound.width-=1;


        if (bound.width!=$('.magazine').width() || bound.height!=$('.magazine').height()) {

            $('.magazine').turn('size', bound.width, bound.height);

            if ($('.magazine').turn('page')==1)
                $('.magazine').turn('peel', 'br');

            $('.next-button').css({height: bound.height, backgroundPosition: '-38px '+(bound.height/2-32/2)+'px'});
            $('.previous-button').css({height: bound.height, backgroundPosition: '-4px '+(bound.height/2-32/2)+'px'});
        }

        $('.magazine').css({top: -bound.height/2, left: -bound.width/2});
    }

    var magazineOffset = $('.magazine').offset(),
        boundH = height - magazineOffset.top - $('.magazine').height(),
        marginTop = (boundH - $('.thumbnails > div').height()) / 2;

    if (marginTop<0) {
        $('.thumbnails').css({height:1});
    } else {
        $('.thumbnails').css({height: boundH});
        $('.thumbnails > div').css({marginTop: marginTop});
    }

    if (magazineOffset.top<$('.made').height())
        $('.made').hide();
    else
        $('.made').show();

    $('.magazine').addClass('animated');

}


// Number of views in a flipbook

function numberOfViews(book) {
    return book.turn('pages') / 2 + 1;
}

// Current view in a flipbook

function getViewNumber(book, page) {
    return parseInt((page || book.turn('page'))/2 + 1, 10);
}

function moveBar(yes) {
    if (Modernizr && Modernizr.csstransforms) {
        $('#slider .ui-slider-handle').css({zIndex: yes ? -1 : 10000});
    }
}

function setPreview(view) {

    var previewWidth = 112,
        previewHeight = 73,
        previewSrc = 'pages/preview.jpg',
        preview = $(_thumbPreview.children(':first')),
        numPages = (view==1 || view==$('#slider').slider('option', 'max')) ? 1 : 2,
        width = (numPages==1) ? previewWidth/2 : previewWidth;

    _thumbPreview.
    addClass('no-transition').
    css({width: width + 15,
        height: previewHeight + 15,
        top: -previewHeight - 30,
        left: ($($('#slider').children(':first')).width() - width - 15)/2
    });

    preview.css({
        width: width,
        height: previewHeight
    });

    if (preview.css('background-image')==='' ||
        preview.css('background-image')=='none') {

        preview.css({backgroundImage: 'url(' + previewSrc + ')'});

        setTimeout(function(){
            _thumbPreview.removeClass('no-transition');
        }, 0);

    }

    preview.css({backgroundPosition:
    '0px -'+((view-1)*previewHeight)+'px'
    });
}

// Width of the flipbook when zoomed in

function largeMagazineWidth() {

    return 2214;

}

// decode URL Parameters

function decodeParams(data) {

    var parts = data.split('&'), d, obj = {};

    for (var i =0; i<parts.length; i++) {
        d = parts[i].split('=');
        obj[decodeURIComponent(d[0])] = decodeURIComponent(d[1]);
    }

    return obj;
}

// Calculate the width and height of a square within another square

function calculateBound(d) {

    var bound = {width: d.width, height: d.height};

    if (bound.width>d.boundWidth || bound.height>d.boundHeight) {

        var rel = bound.width/bound.height;

        if (d.boundWidth/rel>d.boundHeight && d.boundHeight*rel<=d.boundWidth) {

            bound.width = Math.round(d.boundHeight*rel);
            bound.height = d.boundHeight;

        } else {

            bound.width = d.boundWidth;
            bound.height = Math.round(d.boundWidth/rel);

        }
    }

    return bound;
}
</script>

