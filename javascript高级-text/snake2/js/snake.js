(function() {
    //创建蛇对象
    function Snake(options) {
        options = options || {};
        this.width = options.width || 20;
        this.height = options.height || 20;
        this.direction = options.direction || 'right'; // 移动方向  默认向右移动
        this.body = [{
            x: 3,
            y: 2,
            backgroundColor: 'red'
        }, {
            x: 2,
            y: 2,
            backgroundColor: 'skyblue'
        }, {
            x: 1,
            y: 2,
            backgroundColor: 'skyblue'
        }]
    }
    var snakeArr = [];

    function remove() {
        for (var i = snakeArr.length - 1; i >= 0; i--) {
            snakeArr[i].parentNode.removeChild(snakeArr[i]);
            snakeArr.splice(i, 1);
        }
        // console.log(snakeArr);
    }
    // 给蛇添加属性  并渲染在地图上
    Snake.prototype.render = function(map) {
            remove();
            //创建蛇节
            for (var i = 0; i < this.body.length; i++) {
                var divObj = document.createElement('div');
                map.appendChild(divObj);
                snakeArr.push(divObj);
                divObj.style.width = this.width + 'px';
                divObj.style.height = this.height + 'px';
                divObj.style.position = 'absolute';
                divObj.style.left = this.body[i].x * this.width + 'px';
                divObj.style.top = this.body[i].y * this.height + 'px';
                divObj.style.backgroundColor = this.body[i].backgroundColor;
            }
        }
        //让蛇移动
    Snake.prototype.move = function(food, map) {
        //让最后一个蛇节的坐标等于前面一节的坐标
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
        //如果蛇头的坐标和食物的坐标重合  则蛇节加一节  食物重新生成
        var snakeX = this.body[0].x * this.width;
        var snakeY = this.body[0].y * this.height;
        var foodX = food.x;
        var foodY = food.y;
        if (snakeX == foodX && snakeY == foodY) {
            var last = this.body[this.body.length - 1];
            this.body.push({
                x: last.x,
                y: last.y,
                backgroundColor: last.backgroundColor
            });
            food.render(map);
        }
    }
    window.Snake = Snake;
})();

//测试
// 获取地图元素
// var map = document.getElementById('map') ;
// var snake = new Snake();
// snake.render(map)