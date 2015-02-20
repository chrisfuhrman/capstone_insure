
var data = {
  "xScale": "ordinal",
  "yScale": "linear",
  "main": [

    {
      "className": ".Jan",
      "data": [
        {
          "x": "Quotes",
          "y": 25
        },
        {
          "x": "Draft",
          "y": 5
        },
        {
          "x": "Pending",
          "y": 5
        },
        {
          "x": "Approved",
          "y": 4
        }
      ]
    },    
    {
      "className": ".FEb",
      "data": [
        {
          "x": "Quotes",
          "y": 31
        },
        {
          "x": "Draft",
          "y": 23
        },
        {
          "x": "Pending",
          "y": 22
        },
        {
          "x": "Approved",
          "y": 20
        }
      ]
    },





  ]
};

var myChart = new xChart('bar', data, '#chart');