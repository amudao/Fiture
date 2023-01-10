function func1 () {
    var dataPoints = [];
    
    var stockChart1 = new CanvasJS.StockChart("chartContainer1",{
      title: {
          text: "Stock 1"
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
      
      stockChart1.render();
    });
    func2();
  }

 
function func2 () {
  var dataPoints = [];
  
  var stockChart2 = new CanvasJS.StockChart("chartContainer2",{
    title: {
        text: "Bitcoin"
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
    
    stockChart2.render();
  });
}

