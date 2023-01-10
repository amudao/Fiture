window.onload = function () {
    var dataPoints = [];
    
    var stockChart = new CanvasJS.StockChart("chartContainer",{
      title: {
          text: "Example Stock"
        },
      charts: [{      
        data: [{        
          type: "line", 
          dataPoints : dataPoints
        }]
      }],
      navigator: {
        slider: {
          minimum: new Date(2018,04, 01),
          maximum: new Date(2018,06, 01)
        }
      }
    }); 
  
    $.getJSON("https://canvasjs.com/data/docs/btcusd2018.json", function(data) {  
      for(var i = 0; i < data.length; i++){
        dataPoints.push({x: new Date(data[i].date), y: Number(data[i].close)});
      }
      
      stockChart.render();
    });
  }