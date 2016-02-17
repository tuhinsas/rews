(function(){
	var data = {
		labels: ["July","August", "September", "October", "November", "December"],
		datasets: [
		    {
		        label: "My First dataset",
		        fillColor: "rgba(220,220,220,0.2)",
		        strokeColor: "rgba(220,220,220,1)",
		        pointColor: "rgba(220,220,220,1)",
		        pointStrokeColor: "#fff",
		        pointHighlightFill: "#fff",
		        pointHighlightStroke: "rgba(220,220,220,1)",
		        data: [65, 59, 80, 81, 56, 55, 40]
		    },
		    {
		        label: "My Second dataset",
		        fillColor: "rgba(151,187,205,0.2)",
		        strokeColor: "rgba(151,187,205,1)",
		        pointColor: "rgba(151,187,205,1)",
		        pointStrokeColor: "#fff",
		        pointHighlightFill: "#fff",
		        pointHighlightStroke: "rgba(151,187,205,1)",
		        data: [28, 48, 40, 19, 86, 27, 90]
		    }
		]
	};
	var options ={
		responsive: false,
		maintainAspectRatio: true,
	}
	var ctx = document.getElementById("user-chart").getContext("2d");
	var myLineChart = new Chart(ctx).Line(data, options);
})();

(function(){
	var data = [
	    {
	        value: 300,
	        color:"#F7464A",
	        highlight: "#FF5A5E",
	        label: "Red"
	    },
	    {
	        value: 50,
	        color: "#46BFBD",
	        highlight: "#5AD3D1",
	        label: "Green"
	    },
	    {
	        value: 100,
	        color: "#FDB45C",
	        highlight: "#FFC870",
	        label: "Yellow"
	    }
	];

	var ctx = document.getElementById("category-pie").getContext("2d");
	var myPieChart = new Chart(ctx).Pie(data);

})();
//# sourceMappingURL=admin.js.map
