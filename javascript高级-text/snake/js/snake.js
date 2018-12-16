//创建蛇对象  通过自调用函数
(function() {
    function Snake(options) {
        options = options || {};
        // 蛇节的大小
        this.width = options.width || 20;
        this.height = options.height || 20;
        //蛇节的移动方向
        this.direction = options.direction || 'right';
        // 设的身体第一个元素是蛇头
        this.body = [{ x: 2, y: 0, color: 'red' }, { x: 1, y: 0, color: 'skyblue' }, { x: 0, y: 0, color: 'skyblue' }]
    }
    var snakeArr = [];

    function remove() {
        for (var i = snakeArr.length - 1; i >= 0; i--) {
            snakeArr[i].parentNode.removeChild(snakeArr[i]);
            // console.log(snakeArr.length);

            snakeArr.splice(i, 1);
        }
    }
    Snake.prototype.render = function(mapObj) {
        remove();
        for (var i = 0; i < this.body.length; i++) {
            var obj = this.body[i];
            // 创建div
            var divObj = document.createElement('div');
            mapObj.appendChild(divObj);
            snakeArr.push(divObj);
            divObj.style.position = 'absolute';
            divObj.style.width = this.width + 'px';
            divObj.style.height = this.height + 'px';
            divObj.style.left = obj.x * this.width + 'px';
            divObj.style.top = obj.y * this.height + 'px';
            divObj.style.backgroundColor = obj.color;
        }
    }
    Snake.prototype.move = function(foodObj, mapObj) {
        for (var i = this.body.length - 1; i > 0; i--) {
            this.body[i].x = this.body[i - 1].x;
            this.body[i].y = this.body[i - 1].y;
        }
        switch (this.direction) {
            case 'right':
                this.body[0].x += 1;
                break;
            case 'left':
                this.body[0].x -= 1;
                break;
            case 'top':
                this.body[0].y -= 1;
                break;
            case 'bottom':
                this.body[0].y += 1;
                break;
        }
        var headerX = this.body[0].x * this.width;
        var headerY = this.body[0].y * this.height;
        // console.log(headerX);2
        // console.log(foodObj.x);
        // console.log(foodObj.y);
        // console.log(headerY);

        if (headerX == foodObj.x && headerY == foodObj.y) {

            // alert('ok');

            var last = this.body[this.body.length - 1];
            this.body.push({
                x: last.x,
                y: last.y,
                color: last.color
            });
            foodObj.render(mapObj);
        }

    }
    window.Snake = Snake;
})();
// var mapObj = document.getElementById('map');
// var snake = new Snake();
// snake.render(mapObj);