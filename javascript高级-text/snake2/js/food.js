(function() {
    //创建食物对象
    function Food(options) {
        options = options || {};
        this.width = options.width || 20;
        this.height = options.height || 20;
        this.backgroundColor = options.backgroundColor || 'orange';
    }

    //创建一个数组  接收食物对象
    var foodArr = [];
    // 创建一个移除食物对象函数
    function remove() {
        //从最后一个移除
        for (var i = foodArr.length - 1; i >= 0; i--) {
            //移除数组中的div
            foodArr[i].parentNode.removeChild(foodArr[i]);
            foodArr.splice(i, 1)
        }
    }
    //给食物添加属性  渲染到地图上
    Food.prototype.render = function(map) {
        remove();
        //创建食物div
        var div = document.createElement('div');
        //追加到地图中
        map.appendChild(div);
        foodArr.push(div);
        //随机移动食物  设置随机坐标
        this.x = Tools.getRandom(0, map.offsetWidth / this.width - 1) * this.width;
        this.y = Tools.getRandom(0, map.offsetHeight / this.height - 1) * this.height;
        div.style.left = this.x + 'px';
        div.style.top = this.y + 'px';
        div.style.width = this.width + 'px';
        div.style.height = this.height + 'px';
        div.style.backgroundColor = this.backgroundColor;
        div.style.position = 'absolute';
    }
    window.Food = Food;
})();
//测试
// 获取地图元素
// var map = document.getElementById('map');
// var food = new Food();
// food.render(map);