// options
// {
//   color: ['orange', 'blue', 'gold', 'green', 'purple', 'mono'],
//   distribution: ['random', 'grid', 'heart', 'circle', 'anima']
// }
var config = {
  color: 'blue',
  distribution: 'circle'
};

var colorOptions = {
  blue: {
    bg: "rgb(0, 20, 20)",
    fg: "rgba(22, 33, 220, 0.05)"
  },
  fire: {
    bg: "rgb(20, 0, 0)",
    fg: "rgba(255, 120, 0, 0.04)"
  },
  gold: {
    bg: "rgb(0, 20, 20)",
    fg: "rgba(80, 60, 60, 0.06)"
  },
  green: {
    bg: "rgb(0, 20, 0)",
    fg: "rgba(16, 88, 33, 0.06)"
  },
  purple: {
    bg: "rgb(7, 7, 20)",
    fg: "rgba(50, 50, 150, 0.02)"
  },
  mono: {
    bg: "rgb(0, 0, 0)",
    fg: "rgba(255, 255, 255, 0.008)"
  }
};

function sandline (ctx, p1, p2) {
  var samples = 35;

  for (var i = 0; i < samples; i++) {
    var location = Math.random();
    var x = lerp(p1.x, p2.x, location);
    var y = lerp(p1.y, p2.y, location);

    ctx.fillRect(x, y, 1, 1);
  }
}

function lerp(a, b, f) {
  return a + f * (b - a);
}

function Point(x, y) {
  this.pos          = Vector(x, y);
  this.lastpos      = Vector(x, y);
  this.origin       = Vector(x, y);
  this.velocity     = Vector((0.5 - Math.random()) * 0.8, (0.5 - Math.random()) * 0.8);
  this.acceleration = Vector();
}

Point.prototype.updatePos = function () {
  this.pos.add(this.velocity);
  this.velocity.add(this.acceleration);
};

var ctx = fullscreenCanvas().ctx;
var canvas = ctx.canvas;

function Randomwalk(x, y, color) {
  this.person = new Point(x, y);
  this.friend = new Point(x + (0.5 - Math.random()) * 10, y + (0.5 - Math.random()) * 10);
  this.color = color;
  this.life = 0;
}

function gravity(pos1, pos2, G) {
  var diff = Vector(pos1).subtract(pos2);
  var norm = Math.sqrt(100.0 + diff.lengthSq());
  var mag = G / (norm * norm * norm);

  return diff.scale(G / Math.pow(norm, 3));
}

Randomwalk.prototype.update = function () {
  this.person.velocity.x += (0.5 - Math.random()) * 0.1;
  this.person.velocity.y += (0.5 - Math.random()) * 0.1;

  this.friend.velocity.x += (0.5 - Math.random()) * 0.1;
  this.friend.velocity.y += (0.5 - Math.random()) * 0.1;

  var dx = this.person.velocity.x - this.friend.velocity.x;
  var dy = this.person.velocity.y - this.friend.velocity.y;

  this.person.velocity.x += dx * 0.05;
  this.person.velocity.y += dy * 0.05;

  this.friend.velocity.x += dx * 0.05;
  this.friend.velocity.y += dy * 0.05;

  var d = gravity(this.person.pos, this.friend.pos, 8);
  this.person.velocity.subtract(d);
  this.friend.velocity.add(d);

  var d1 = gravity(this.person.pos, this.person.origin, 3);
  this.person.velocity.subtract(d1);

  var d2 = gravity(this.friend.pos, this.friend.origin, 3);
  this.friend.velocity.subtract(d2);

  this.person.updatePos();
  this.friend.updatePos();
  this.life += 1;
};

Randomwalk.prototype.draw = function (ctx) {
  var originalAlpha = Spectra(this.color).alpha();
  ctx.fillStyle = Spectra(this.color).alpha(originalAlpha - this.life / 43500).rgbaString();
  sandline(ctx, this.person.pos, this.friend.pos);
};

var rs = [];

// different distributions

function init() {
  rs = [];
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  ctx.fillStyle = colorOptions[config.color].bg;
  ctx.globalCompositeOperation = "lighter";
  ctx.fillRect(0, 0, canvas.width, canvas.height);
  ctx.fillStyle = colorOptions[config.color].fg;

  if (config.distribution === "grid") {
    var amountPerRow = 8;
    var dx = canvas.width / amountPerRow;
    var dy = canvas.height / amountPerRow;
    for (var i = 0; i < amountPerRow; i++) {
      for (var j = 0; j < amountPerRow; j++) {
        var amount = Math.ceil(Math.random() * 6);
        for (var k = 0; k < amount; k++) {
          rs.push(new Randomwalk(
            dx * i + dx/2,
            dy * j + dy/2,
            colorOptions[config.color].fg
          ));
        }
      }
    }
  } else if (config.distribution === "random") {
    for (var i = 0; i < 500; i++) {
      rs.push(new Randomwalk(Math.random() * ctx.canvas.width, Math.random() * ctx.canvas.height, colorOptions[config.color].fg));
    }
  } else if (config.distribution === "circle") {
    var r = canvas.width / 7;
    for (var i = 0; i < 2 * Math.PI; i += 0.04) {
      var x = Math.cos(i) * r;
      var y = Math.sin(i) * r;

      rs.push(new Randomwalk(x + canvas.width / 2, y + canvas.height / 2, colorOptions[config.color].fg));
    }
  } else if (config.distribution === "anima") {
    var r = 155;
    for (var i = 0; i < 2 * Math.PI; i += 0.04) {
      var x = Math.cos(i) * r;
      var y = Math.sin(i) * r;

      rs.push(new Randomwalk(x + canvas.width / 2, y + canvas.height / 2, colorOptions['blue'].fg));
    }

    for (var i = 0; i < 2 * Math.PI; i += 0.06) {
      var x = Math.cos(i) * r;
      var y = Math.sin(i) * r;

      rs.push(new Randomwalk(x + canvas.width / 2, y + canvas.height / 2, colorOptions['fire'].fg));
    }

    for (var i = 0; i < 2 * Math.PI; i += 0.06) {
      var x = Math.cos(i) * r;
      var y = Math.sin(i) * r;

      rs.push(new Randomwalk(x + canvas.width / 2, y + canvas.height / 2, colorOptions['green'].fg));
    }
  } else if (config.distribution === "heart") {
    for (var t = 0; t < 300; t++) {
      x = 16 * Math.pow(Math.sin(t), 3);
      y = 100 - (13 * Math.cos(t) - 5 * Math.cos(2 * t) - 2 * Math.cos(3 * t) - Math.cos(4 * t));
      x *= 12;
      y *= 12;
      rs.push(new Randomwalk(x + canvas.width / 2, y - 800, colorOptions[config.color].fg));
    }
  } else if (config.distribution = 'point') {
    for (var i = 0; i < 75; i++) {
      rs.push(new Randomwalk(canvas.width / 2, canvas.height / 2, colorOptions[config.color].fg));
    }
  }
}

init();

// options
// {
//   color: ['orange', 'blue', 'gold', 'green', 'purple', 'mono'],
//   distribution: ['random', 'grid', 'heart', 'circle', 'anima']
// }



var toggle = renderLoop(function () {
  rs.forEach(function (r) {
    r.update();
    r.draw(ctx);
  });
});

config.init = init;
config['pause/unpause'] = function freeze() {
  toggle();
};

var gui = new dat.GUI();
gui.add(config, 'color', ['fire', 'blue', 'gold', 'green', 'purple', 'mono']);
gui.add(config, 'distribution', ['random', 'grid', 'heart', 'circle', 'anima', 'point']);
gui.add(config, 'init');
gui.add(config, 'pause/unpause');
config['.'] = 'Right click on image to save';
gui.add(config, '.');