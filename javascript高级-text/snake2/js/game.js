(function() {
    var food;
    //创建游戏对象
    function Game(map) {
        this.food = new Food();
        this.snake = new Snake();
        this.map = map;
        food = this.food;
    }
    //定义一个定时器  
    var timeId = null;
    //定义一个函数  封装定时器
    function runSnake() {
        timeId = setInterval(function() {
            // 调用蛇对象的move  和  render  方法
            game.snake.move(food, map);
            game.snake.render(game.map);
            var snakeMaxX = game.map.offsetWidth / game.snake.width;
            var snakeMaxY = game.map.offsetHeight / game.snake.height;
            // console.log(snakeMaxX);
            // console.log(snakeMaxY);
            var snakeX = game.snake.body[0].x;
            var snakeY = game.snake.body[0].y;
            // console.log(snakeX);
            // console.log(snakeY);
            if (snakeX < 0 || snakeX >= snakeMaxX || snakeY < 0 || snakeY >= snakeMaxY) {
                clearInterval(timeId);
                alert('Game Over');
            }
        }, 200);
    }
    // 创建一个按键函数
    function getCode() {
        document.addEventListener('keydown', function(e) {
            // console.log(e.keyCode);
            //40-bottom
            //38-top
            //37-left
            //39-right
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
        }, false)

    }
    //把 食物和蛇对象渲染在地图上
    Game.prototype.start = function() {
        this.food.render(this.map);
        this.snake.render(this.map);
        // this.snake.move();
        // this.snake.render(this.map);
        runSnake();
        getCode();
    }
    window.Game = Game;
})();
var map = document.getElementById('map') // 获取地图元素
var game = new Game(map);
game.start()