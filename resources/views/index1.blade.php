@extends('layouts.app')
@section('css')
    <style>
        .loading {
            position: fixed;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(-90deg, #FFD09E, #106564);
        }
    </style>
@endsection
{{--loding小鹿 form codepen--}}
<canvas id="loading" class="loading"></canvas>


{{--</div>--}}
@section('js')
    <script src="vendor/js/d3.min.js"></script>
    <script>
        var canvas = document.getElementById("loading");
        var width = canvas.width = 450;
        var height = canvas.height = 450;
        var ctx = canvas.getContext("2d");
        var current = 0;
        var dataNum;
        var json;
        var ScrrenPoint;
        var angle = 0;

        d3.json("vendor/json/deer.json", function (error, root) {
            dataNum = root.length;
            json = root;
            ScrrenPoint = new vertex();
            var perv = 0, m = 0;
            d3.timer(function (elapsed) {
                m += (elapsed - perv);
                perv = elapsed;
                if (m < 30) return;
                m = 0;
                current = current + 1 != json.morphTargets.length ? current : 0;
                ctx.setTransform(1, 0, 0, 1, 0, 0);
                ctx.translate(width / 2, height / 2 + 50);
                ctx.clearRect(-width / 2, -height / 2 - 50, width, height);
                ctx.scale(1.5, -1.5);
                ctx.fillStyle = "rgba(255,255,255,0.8)";
                var vecs = json.morphTargets[current].vertices;
                var sin = Math.sin(angle);
                var cos = Math.cos(angle);
                for (var i = 0; i < vecs.length; i += 3) {
                    var p = [vecs[i + 0], vecs[i + 1], vecs[i + 2]];
                    var po = [0, 0, 0];
                    po[0] = cos * p[0] - sin * p[2];
                    po[1] = p[1] - 30;
                    po[2] = cos * p[2] + sin * p[0];
                    ScrrenPoint.setVertex(po);
                    var s = ScrrenPoint.getScrrenPoint();
                    ctx.fillRect(s.x, s.y, 1.5, 1.5);
                }
                current++;
                angle += 0.01;
            });
        })

        function vertex() {
            this.x = 0;
            this.y = 0;
            this.z = 0;
            this.fl = 1000;
        }
        vertex.prototype.setVertex = function (p) {
            this.x = p[0];
            this.y = p[1];
            this.z = p[2];
        }
        vertex.prototype.getScrrenPoint = function () {
            var scale_z = this.fl + this.z;
            var scale = this.fl / scale_z;
            var x = this.x * scale;
            var y = this.y * scale;
            return {x: x, y: y, scale: scale};
        }
        //
        var $loading = $('#loading')

        setTimeout(function () {
            $loading.fadeOut();
        }, 300);
    </script>
@endsection
