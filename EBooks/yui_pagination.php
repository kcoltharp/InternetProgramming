<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/yui.css" />
		<script src="http://yui.yahooapis.com/3.6.0/build/yui/yui-min.js"></script>
	</head>
	<body id="container">
			<div id="scrollview-container">
			<div id="scrollview-header">
				<h1>Paged ScrollView</h1>
			</div>

			<div id="scrollview-content" class="yui3-scrollview-loading">
				<ul>
					<li><img src="http://farm5.static.flickr.com/4136/4802088086_c621e0b501.jpg" alt="Above The City II"></li>
					<li><img src="http://farm5.static.flickr.com/4114/4801461321_1373a0ef89.jpg" alt="Walls and Canyon"></li>
					<li><img src="http://farm5.static.flickr.com/4100/4801614015_4303e8eaea.jpg" alt="Stairs Using In Situ Stone"></li>
					<li><img src="http://farm5.static.flickr.com/4076/4801368583_854e8c0ef3.jpg" alt="Tree Silhouette"></li>
				</ul>
			</div>

			<div id="scrollview-pager">
				<button id="scrollview-prev">Prev</button>
				<button id="scrollview-next">Next</button>
			</div>
		</div>

		<div id="additional-content">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam hendrerit elit id vulputate. Pellentesque pellentesque erat rutrum velit facilisis sodales convallis tellus lacinia. Curabitur gravida mi sit amet nulla suscipit sed congue dolor volutpat. Aenean sem tortor, pretium et euismod in, imperdiet sit amet urna. Ut ante nisi, auctor mattis suscipit a, ullamcorper eget leo. Phasellus sagittis ante at lectus rutrum ut sollicitudin sem malesuada. Duis ultrices sapien et nulla tincidunt malesuada. Mauris ante turpis, dignissim eu tincidunt vitae, placerat quis diam. In augue nisl, cursus at rutrum ut, scelerisque et erat. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris orci dui, aliquam ut convallis ut, dapibus et erat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam erat volutpat. Mauris placerat elit id lectus rhoncus in dignissim justo mollis. Donec nec odio sapien. In iaculis euismod felis non laoreet. Mauris ornare varius neque, et congue erat porta a. Aliquam nec auctor lectus. Etiam ut ipsum a nibh iaculis fringilla.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam hendrerit elit id vulputate. Pellentesque pellentesque erat rutrum velit facilisis sodales convallis tellus lacinia. Curabitur gravida mi sit amet nulla suscipit sed congue dolor volutpat. Aenean sem tortor, pretium et euismod in, imperdiet sit amet urna. Ut ante nisi, auctor mattis suscipit a, ullamcorper eget leo. Phasellus sagittis ante at lectus rutrum ut sollicitudin sem malesuada. Duis ultrices sapien et nulla tincidunt malesuada. Mauris ante turpis, dignissim eu tincidunt vitae, placerat quis diam. In augue nisl, cursus at rutrum ut, scelerisque et erat. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris orci dui, aliquam ut convallis ut, dapibus et erat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam erat volutpat. Mauris placerat elit id lectus rhoncus in dignissim justo mollis. Donec nec odio sapien. In iaculis euismod felis non laoreet. Mauris ornare varius neque, et congue erat porta a. Aliquam nec auctor lectus. Etiam ut ipsum a nibh iaculis fringilla.</p>
		</div>

		<script type="text/javascript" charset="utf-8">
		YUI().use('scrollview', 'scrollview-paginator', function(Y) {

			var scrollView = new Y.ScrollView({
				id: "scrollview",
				srcNode : '#scrollview-content',
				width : 325,
				flick: {
					minDistance:5,
					minVelocity:1.1,
					axis: "x"
				}
			});

			scrollView.plug(Y.Plugin.ScrollViewPaginator, {
				selector: 'li'
			});

			scrollView.render();

			var content = scrollView.get("contentBox");

			content.delegate("click", function(e) {
				// For mouse based devices, we need to make sure the click isn't fired
				// at the end of a drag/flick. We use 2 as an arbitrary threshold.
				if (Math.abs(scrollView.lastScrolledAmt) < 2) {
					alert(e.currentTarget.getAttribute("alt"));
				}
			}, "img");

			// Prevent default image drag behavior
			content.delegate("mousedown", function(e) {
				e.preventDefault();
			}, "img");

			Y.one('#scrollview-next').on('click', Y.bind(scrollView.pages.next, scrollView.pages));
			Y.one('#scrollview-prev').on('click', Y.bind(scrollView.pages.prev, scrollView.pages));

		});
		</script>
	</body>
</html>