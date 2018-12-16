(function() {
    var foodObj;
    //创建游戏对象
    function Game(mapObj) {
        this.food = new Food();
        this.snake = new Snake();
        this.mapObj = mapObj;
        foodObj = this.food;
    }
    //声明一个函数;定义一个定时器
    var timeId = null;

    function runSnake() {
        var timeId = setInterval(function() {
            game.snake.move(foodObj, mapObj);
            game.snake.render(game.mapObj);
            //当碰到边界的时间清除定时器,弹出game over
            var snakeX = game.mapObj.offsetWidth / game.snake.width;
            var snakeY = game.mapObj.offsetHeight / game.snake.height;
            // console.log(snakeX);
            var head = game.snake.body[0];
            var headX = head.x;
            var headY = head.y;
            if (headX < 0 || headX >= snakeX) {
                clearInterval(timeId);
                alert('game over');
            }
            if (headY < 0 || headY >= snakeY) {
                clearInterval(timeId);
                alert('game over');
            }
        }, 300);
    }

    function getCode() {
        document.addEventListener('keydown', function(e) {

            switch (e.keyCode) {
                case 37:
                    game.snake.direction = 'left';
                    break;
                case 38:
                    game.snake.direction = 'top';
                    break;
                case 39:
                    game.snake.direction = 'right';
                    break;
                case 40:
                    game.snake.direction = 'bottom';
                    break;
            }
        }, false);
    }
    Game.prototype.start = function() {
        this.food.render(this.mapObj);
        // this.snake.move();
        // this.snake.render(this.mapObj);
        // this.snake.move();
        // this.snake.render(this.mapObj);
        // this.snake.move();
        // this.snake.render(this.mapObj);
        runSnake();
        getCode();
    }
    window.Game = Game;
})();
// var mapObj = document.getElementById('map')
// var game = new Game(mapObj);
// game.start();