(function() {
    //创建食物对象
    function Food(options) {
        options = options || {};
        this.width = options.width || 20;
        this.height = options.height || 20;
        this.color = options.color || 'orange';
        this.x = options.x || 0;
        this.y = options.y || 0;
    }

    var arr = [];

    function remove() {
        for (var i = arr.length - 1; i >= 0; i--) {
            arr[i].parentNode.removeChild(arr[i]);
            arr.splice(i, 1);
        }

    }
    // var Tools = {
    //         getRandom: function(min, max) {
    //             return Math.floor(Math.random() * (max - min + 1) + min);
    //         }
    //     }
    // 把食物显示在地图上

    Food.prototype.render = function(mapObj) {
        remove();
        //创建div
        var divObj = document.createElement('div');
        mapObj.appendChild(divObj);
        arr.push(divObj);
        // 随机移动
        this.x = Tools.getRandom(0, mapObj.offsetWidth / this.width - 1) * this.width;
        this.y = Tools.getRandom(0, mapObj.offsetHeight / this.height - 1) * this.height;
        divObj.style.width = this.width + 'px';
        divObj.style.height = this.height + 'px';
        divObj.style.left = this.x + 'px';
        divObj.style.top = this.y + 'px';
        divObj.style.backgroundColor = this.color;
        divObj.style.position = 'absolute';
    }
    window.Food = Food;
})();
// var mapObj = document.getElementById('map');
// var food = new Food();
// food.render(mapObj);