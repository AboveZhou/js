(function() {
    var mapObj = document.getElementById('map')
    var game = new Game(mapObj);
    game.start();
    window.game = game;
    window.mapObj = mapObj;
})();