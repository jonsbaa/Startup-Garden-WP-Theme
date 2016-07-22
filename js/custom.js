function loadGalleria() {
  Galleria.loadTheme('http://startupsummerprogram.org/wp-content/themes/startupgarden/galleria/themes/classic/galleria.classic.min.js');
  var flickr = new Galleria.Flickr();
  flickr.setOptions({
      max: 50,
      imageSize: 'big',
      thumbSize: 'small'
  }).set('72157656133748716', function(data) {
      Galleria.run('.galleria', {
          dataSource: data,
          theme: 'classic'
      });
  });
} 
loadGalleria();
