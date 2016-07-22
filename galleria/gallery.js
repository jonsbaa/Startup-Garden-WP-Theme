Galleria.loadTheme('http://nellimiriam.fi/wordpress/wp-content/themes/wpbootstrap/galleria/themes/folio/galleria.folio.min.js');
  var flickr = new Galleria.Flickr();
  flickr.setOptions({
      max: 120,
      imageSize: 'original',
      thumbSize: 'medium'
  }).set('72157663832858731', function(data) {
      Galleria.run('.gallery', {
          dataSource: data,
      });
  });