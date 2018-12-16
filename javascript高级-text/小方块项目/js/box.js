//创建小方块对象
function Box(boxObj, options) {
    options = options || {};
    this.width = options.width || 20;
    this.height = options.height || 20;
    this.x = options.x || 0;
    this.y = options.y || 0;
    this.backgroundColor = options.backgroundColor || 'pink';
    this.divObj = document.createElement('div');
    boxObj.appendChild(this.divObj);
    this.boxObj = boxObj;
    // this.into();
}

Box.prototype.into = function() {
    var divObj = this.divObj;
    divObj.style.width = this.width + 'px';
    divObj.style.height = this.height + 'px';
    divObj.style.position = 'absolute';
    divObj.style.left = this.x + 'px';
    divObj.style.top = this.y + 'px';
    divObj.style.backgroundColor = this.backgroundColor;
}

Box.prototype.random = function() {
    this.x = Tools.getRandom(0, this.boxObj.offsetWidth / this.width - 1) * this.width;
    this.y = Tools.getRandom(0, this.boxObj.offsetHeight / this.height - 1) * this.height;
    this.divObj.style.left = this.x + 'px';
    this.divObj.style.top = this.y + 'px';
}
var boxObj = document.getElementById('container');
var arr = [];
for (var i = 0; i < 10; i++) {
    var r = Tools.getRandom(0, 255);
    var g = Tools.getRandom(0, 255);
    var b = Tools.getRandom(0, 255);
    var a = new Box(boxObj, { backgroundColor: 'rgb(' + r + ',' + g + ',' + b + ')' });
    arr.push(a);
}

function run() {
    for (var i = 0; i < arr.length; i++) {
        arr[i].random();
        arr[i].into();
    }
}
run();

setInterval(run, 1000)