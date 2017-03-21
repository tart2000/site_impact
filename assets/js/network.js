/*global window, document, $, paper, Point, Path, Layer */

/*!
* Okay Plus
*
* Copyright 2014, Joe di Stefano - http://okaypl.us
* Released under the WTFPL license - http://sam.zoy.org/wtfpl/
*/

var $ = $ || jQuery,
    OK = OK || {};

var radius = 8,
    max_length = 200,
    node_count = 60,
    offset = 20,
    nodes = [],
    node_layer,
    colorRange = ['#89c9f7','#63b9f7','#1e5176','#416076','#3286c2','#69a7d2'],
    grey = '#efefef', // le gris de base 
    colorRatio = 6,
    edge_style = {
        strokeColor: '#e7e7e7',
        strokeWidth: 1.5
    },
    edges = [],
    edge_layer;

function Network() {

    this.init = function () {
        paper.install(window);
        paper.setup('canvas');

        edge_layer = new Layer();
        node_layer = new Layer();

        // Create nodes
        for (var i = 0; i < node_count; i += 1) {
            setTimeout(this.add_node, 100 * i);
        }

        // Set drawing loop
        view.onFrame = this.draw;
    };

    this.draw = function () {
        var i;

        edge_layer.removeChildren();

        for (i = 0; i < edges.length; i += 1) {
            edges[i].update();
        }

        for (i = 0; i < nodes.length; i += 1) {
            nodes[i].wander();
            nodes[i].update();
            nodes[i].checkBounds();
        }
    };

    this.add_node = function (x, y) {
        var node = new Node();
        node.init(x, y);
        nodes.push(node);
    };
};

function Edge() {
    this.init = function (node1, node2) {
        this.start = node1;
        this.end = node2;
    };

    this.update = function () {
        var length = distance(this.start.location.x, this.start.location.y, this.end.location.x, this.end.location.y),
            line;

        if (length < max_length) {
            line = new Path();
            line.add(this.start.location, this.end.location);
            line.opacity = 1 - (length / max_length);
            line.style = edge_style;

            edge_layer.addChild(line);
        }
    };
};

function Node() {
    project.activeLayer = node_layer;

    var maxSpeed        = Math.random() * 0.5 + 0.5,
        maxForce        = 0.4,
        angle           = Math.random() * 90,
        wrapAngle       = (Math.PI / 2) + angle,
        wanderTheta     = 0,
        lastLocation,
        x = random_int(-offset, view.size.width + offset),
        y = random_int(-offset, view.size.height + offset);

    this.path           = new Path.Circle({ center: [0, 0], radius: random_int(5, radius) });
    this.location       = new Point(x, y);
    this.velocity       = new Point(Math.random() * 10, Math.random() * 10);
    this.acceleration   = new Point(Math.random() * 20, Math.random() * 20);

    this.init = function (x, y) {
        var i,
            edge;

        if (typeof x !== 'undefined' && typeof y !== 'undefined') {
            this.location = new Point(x, y);
        }

        this.path.style = {
            fillColor: theColor()
        } // now with random color (orginal was #efefef)


        // Create edges to every other node
        for (i = 0; i < nodes.length; i += 1) {
            edge = new Edge();
            edge.init(this, nodes[i]);
            edges.push(edge);
        }
    };

    this.update = function () {
        lastLocation = this.location.clone();

        this.velocity.x += this.acceleration.x;
        this.velocity.y += this.acceleration.y;
        this.velocity.length = Math.min(maxSpeed, this.velocity.length);

        this.location.x += this.velocity.x;
        this.location.y += this.velocity.y;

        this.acceleration.length = 0;

        // Change node path position, without this it won't move
        this.path.position = this.location.clone();
    };

    this.steer = function (target, slowdown) {
        var steer,
            desired = new Point(target.x - this.location.x, target.y - this.location.y),
            dist = desired.length;

        if (dist > 0) {
            if (slowdown && dist < 100) {
                desired.length = maxSpeed * (dist / 100);
            } else {
                desired.length = maxSpeed;
            }

            steer = new Point(desired.x - this.velocity.x, desired.y - this.velocity.y);
            steer.length = Math.min(maxForce, steer.length);
        } else {
            steer = new Point(0, 0);
        }

        return steer;
    };

    this.seek = function (target) {
        var steer = this.steer(target, false);
        this.acceleration.x += steer.x;
        this.acceleration.y += steer.y;
    };

    this.wander = function () {
        var wanderR     = 5,
            wanderD     = 100,
            change      = 0.4,
            circleLocation,
            circleOffset,
            target;

        wanderTheta += Math.random() * (change * 2) - change;

        circleLocation = this.velocity.clone();
        circleLocation = circleLocation.normalize();
        circleLocation.x *= wanderD;
        circleLocation.y *= wanderD;
        circleLocation.x += this.location.x;
        circleLocation.y += this.location.y;

        circleOffset = new Point(wanderR * Math.cos(wanderTheta), wanderR * Math.sin(wanderTheta));

        target = new Point(circleLocation.x + circleOffset.x, circleLocation.y + circleOffset.y);

        this.seek(target);
    };

    this.checkBounds = function () {
        if (this.location.x < -offset) {
            this.location.x = view.size.width + offset;
        }
        if (this.location.x > view.size.width + offset) {
            this.location.x = -offset;
        }
        if (this.location.y < -offset) {
            this.location.y = view.size.height + offset;
        }
        if (this.location.y > view.size.height + offset) {
            this.location.y = -offset;
        }
    };
};

function randomHex() {
    return '#'+('00000'+(Math.random()*16777216<<0).toString(16)).substr(-6);
};

function colorInRange(items) {
    var lenum = Math.floor(Math.random()*(items.length))
    return items[lenum];
}

function theColor() {
    var myNum = Math.floor(Math.random() * colorRatio);
    if (myNum == 0) {
        return colorInRange(colorRange);
    } else {
        return grey;
    };
};

var random_int = function (min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
};

var distance = function (x1, y1, x2, y2) {
    return Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));
};



$(document).ready(function () {
    var container = $('#intro'),
        blurb = $('#intro-blurb'),
        canvas = $('<canvas id="canvas" style="width:100%;" resize></canvas>').prependTo(container),
        content_height = blurb.outerHeight(),
        window_height = $(window).outerHeight(),
        network = new Network();

    if (!container.length) {
        return false;
    }

    // Allow scrolling on small windows
    if (content_height > window_height) {
        container.height(content_height);
        canvas.height(content_height);
    } else {
        container.height(window_height);
        canvas.height(window_height);
    }

    network.init();


    container.click(function (e) {
        network.add_node(e.clientX, e.clientY);
    });
});
