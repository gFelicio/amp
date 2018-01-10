<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>
        Colours
    </title>

    <style type="text/css">
        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }

        #container {
          text-align: center;
          display: flex;
          flex-wrap: wrap;
          width: -webkit-fill-available;
          width: -moz-available;
          height: -webkit-fill-available;
        }

        .box {
          width: 50%;
          line-height: 100px;
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          align-items: center;
          font-size: 25px;
          font-family: sans-serif;
          font-weight: bold;
        }
    </style>
</head>
<body>
    <div id="container"></div>

    <script type="text/javascript">

        var c = document.getElementById('container');

        var colourIsLight = function (r, g, b) {

          // Counting the perceptive luminance
          // human eye favors green color...
          var a = 1 - (0.299 * r + 0.587 * g + 0.114 * b) / 255;
          console.log('a = ' + a);
          return (a < 0.5);
        }

        var randomRgb = function () {
          var r = /* 189; //*/ Math.floor(Math.random() * 256);
          console.log('r = ' + r);
          var g = /*60; //*/ Math.floor(Math.random() * 256);
          console.log('g = ' + g);
          var b = /*151; //*/ Math.floor(Math.random() * 256);
          console.log('b = ' + b);
          return [r, g, b];
        };

        var colourFromRgb = function (r, g, b) {
          return 'rgb(' + r + ',' + g + ',' + b + ')';
        };

        for (var i = 0; i < 12; i += 1) {
          var el = document.createElement('div');
          el.setAttribute('class', 'box');
          el.textContent = "";

          var bgRgb = randomRgb();
          var bgColour = colourFromRgb(bgRgb[0], bgRgb[1], bgRgb[2]);
          var textColour = colourIsLight(bgRgb[0], bgRgb[1], bgRgb[2]) ? 'black' : 'white';

          if(textColour == 'black')
          {
            el.textContent = "This color is light-ish";
          }
          else
          {
            el.textContent = "This color is dark-ish";
          }

          el.setAttribute('style', 'background-color: ' + bgColour + '; color: ' + textColour);

          c.appendChild(el);
        }
    </script>
</body>
</html>
