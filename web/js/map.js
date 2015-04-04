
  jQuery(function($){
    $('.map').append('<div class="overlay">').append('<div class="titre">');
      $('.map .titre').hide();
    var regions = [
      {name: 'Bizert'},
      {name: 'Béja'},
      {name: 'Jendouba'},
      {name: 'Le Kef'},
      {name: 'Siliana'},
      {name: 'Zaghouan'},
      {name: 'Manouba'},
      {name: 'Tunis'},
      {name: 'Ben Arous'},
      {name: 'Nabeul'},
      {name: 'Monastir'},
      {name: 'Sousse'},
      {name: 'Kairouan'},
      {name: 'Kasserine'},
      {name: 'Gafsa'},
      {name: 'Tozeur'},
      {name: 'Tataouine'},
      {name: 'Mednine'},
      {name: 'Gabés'},
      {name: 'Kebili'},
      {name: 'Mehdia'},
      {name: 'Sfax'},
      {name: 'Sidi Bouzid'}
    ]
    //On passe sur une région
    $('.map area').mouseover(function(){
      var index = $(this).index();
      var left = -index * 290 - 290;
      $('.map .titre').html(regions[index].name).stop().fadeTo(500,0.6);
      $('.map .overlay').css({
        backgroundPosition: left+"px 0px"
      });
    });
    //On sort de la map
    $('.map').mouseout(function(){
      $('.map .overlay').css({
        backgroundPosition: "290px 0px"
      });
      $('.map .titre').stop().fadeTo(500,0);
    });

  });