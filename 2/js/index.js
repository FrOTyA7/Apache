/* jshint esversion: 6 */

((main) => {

	this.requestAnimationFrame = (() => {
		return window.requestAnimationFrame ||
			window.webkitRequestAnimationFrame ||
			window.mozRequestAnimationFrame ||
			window.oRequestAnimationFrame ||
			window.msRequestAnimationFrame ||
			function(callback) {
				window.setTimeout(callback, 1000 / 60);
			};
	})();

	main(this, document, Vector2);

})((window, document, v2, undefined) => {

	'use strict';
	
	const PI = Math.PI,
		TAU = PI*2,
		TO_RAD = PI/180,
		TO_DEG = 180/PI,
		COS = Math.cos,
		SIN = Math.sin,
		RAND = Math.random,
		ROUND = Math.round;
	
	const APP_DEFAULTS = {
		canvas: {
			width: 0,
			height: 0,
			fill: 'rgba(0,0,0,0.5)',
		},
		particles: {
			count: 1000,
			size: 2,
			fill: 'rgba(255,0,0,1)',
			threshold: 20
		}
	};

	class Particle extends v2 {
		constructor() {
			super();
			//this.x = window.innerWidth * 0.5;
			//this.y = window.innerHeight * 0.5;
			this.delta = ROUND(RAND() * 360);
			this.amp1 = ROUND(RAND() * 9) + 1;
			this.amp2 = ROUND(RAND() * 9) + 1;
			this.velocity = new v2();
		}
		
		updateColor() {
			this.color = 'hsla(' + this.delta.toString() + ',50%, 50%, 1)';
		}
		
		update() {
			this.move();
			this.updateColor();
			this.checkBoundaries();
		}
		
		move() {
			this.delta++;
			this.velocity.x = COS(this.delta * 0.2) * this.amp1 + COS(this.delta * 0.025) * this.amp2;
			this.velocity.y = SIN(this.delta * 0.2) * this.amp1 + SIN(this.delta * 0.025) * this.amp2;
			this.add(this.velocity);
		}
		
		checkBoundaries() {
			if(this.x > window.innerWidth) this.x = 0;
			if(this.x < 0) this.x = window.innerWidth;
			if(this.y > window.innerHeight) this.y = 0;
			if(this.y < 0) this.y = window.innerHeight;
		}
	}

	class App {
		constructor() {
			this.setup();
			this.resize();
			this.populate();
			this.render();
		}

		setup() {
			this.mouseOver = false;
			this.mouse = new v2();
			this.center = new v2();
			this.props = JSON.parse(JSON.stringify(APP_DEFAULTS));
			this.canvas = document.querySelector('.canvas');
			this.ctx = this.canvas.getContext('2d');
			let self = this;
			window.onresize = () => {
				self.resize();
			};
			this.canvas.onmousemove = self.mouseHandler.bind(self);
			this.canvas.onmouseleave = self.mouseHandler.bind(self);
		}
		
		populate() {
			this.particles = [];
			for (let i = 0; i < this.props.particles.count; i++) {
				let p = new Particle();
				this.particles.push(p);
			}
		}

		mouseHandler(e) {
			this.mouse.x = e.clientX;
			this.mouse.y = e.clientY;
			if (e.type === 'mousemove') this.mouseOver = true;
			if (e.type === 'mouseleave') this.mouseOver = false;
		}
		
		resize() {
			this.canvas.width = this.props.canvas.width = window.innerWidth;
			this.canvas.height = this.props.canvas.height = window.innerHeight;
			this.center.x = this.props.canvas.width * 0.5;
			this.center.y = this.props.canvas.height * 0.5;
		}

		draw() {
			this.ctx.fillStyle = this.props.canvas.fill;
			this.ctx.fillRect(0, 0, this.props.canvas.width, this.props.canvas.height);
			for (let i = 0, len = this.props.particles.count; i < len; i++) {
				let p = this.particles[i];
				p.update();
				this.ctx.fillStyle = p.color;
				this.ctx.fillRect(p.x, p.y, this.props.particles.size, this.props.particles.size);
				if(this.mouseOver){
					p.lerp(this.mouse);
				}
			}
		}

		render() {
			let self = this;
			self.draw();
			window.requestAnimationFrame(self.render.bind(self));
		}

	}

	window.onload = () => {
		let app = new App();
	};

});