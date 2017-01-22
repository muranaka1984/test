/* While it does *crash* the console while inspecting element (because of all the height and margin changes done inline on each span), there are no performance issues on user-side */


function equalizer(bar) {
  // Syntax: Math.random() * (max-min = range) + min;
  // My bars will be at least 70px, and at most 170px tall
  var height = Math.random() * 392 + 282;
  // Any timing would do the trick, mine is height times 7.5 to get a speedy yet bouncy vibe
  var timing = height * 0.5;
  // If you need to align them on a baseline, just remove this line and also the "marginTop: marg" from the "animate"
  var marg = 282;
  
  bar.animate({
      height: height,
      marginTop: marg
  }, timing, function() {
      equalizer($(this));
  });
}

// Action on play-pause buttons can be added here (should be a wholesome function rather than annonymous)
$('#music-bars span').each(function(i) {
  equalizer($(this));
});

var bgColors = ["blue", "orange", "green", "red", "purple", "yellow"];
 
$('#music-bars span').each(function() {
  var i = Math.floor(Math.random() * bgColors.length);
  $(this).addClass(bgColors[i]);
});


// light

TweenMax.to('.light0', 5.1, {
  left: '1500px',
  repeat: -1,
  yoyo: true
});

TweenMax.to('.light1', 5.1, {
  delay: 1,
  left: '-1500px',
  repeat: -1,
  yoyo: true
});

TweenMax.to('.light2', 2.3, {
  right: '500px',
  repeat: -1,
  yoyo: true
});

TweenMax.to('.light3', 2.3, {
  delay: 1,
  left: '-500px',
  repeat: -1,
  yoyo: true
});

TweenMax.to('.light4', 2.1, {
  left: '1000px',
  repeat: -1,
  yoyo: true
});

TweenMax.to('.light5', 2.1, {
  left: '-300px',
  repeat: -1,
  yoyo: true
});

