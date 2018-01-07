<div class="modal fade bs-modal-sm in" id="addon-delay" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-md">
		<div class="modal-content no-border">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">Console Delay - <span id="console-delay"></span></h4>
			</div>
			<div class="modal-body">
				
				<div class="wrapper">
                    <canvas id="console_deplay_chart"></canvas>
                </div>
                
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
                
                <script>
                
                function open_delay() {
                    $('#addon-delay').modal('show');
                }
                
                var ctx = document.getElementById('console_deplay_chart').getContext("2d");
                
                ctx.height = 500;
                var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
                gradientStroke.addColorStop(0, '#232428');
                gradientStroke.addColorStop(1, '#232428');
                
                var gradientFill = ctx.createLinearGradient(500, 0, 100, 0);
                gradientFill.addColorStop(0, "#2776dc");
                gradientFill.addColorStop(1, "#3498db");
                
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        datasets: [
                        {
                            label: "Delay",
                            borderColor: gradientStroke,
                            pointBorderColor: gradientStroke,
                            pointBackgroundColor: gradientStroke,
                            pointHoverBackgroundColor: gradientStroke,
                            pointHoverBorderColor: gradientStroke,
                            pointBorderWidth: 5,
                            pointHoverRadius: 5,
                            pointHoverBorderWidth: 1,
                            pointRadius: 3,
                            fill: true,
                            backgroundColor: gradientFill,
                            borderWidth: 4,
                            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                        }
                        
                        ],
                        labels: ['#1', '#2', '#3', '#4', '#5', '#6', '#7', '#8', '#9' ,'#10']
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        animation: {
                            // Change this to "0" for no animation (Default)
                            // Change this to "20000" for nice slow animations
                            // Change this to "5000" for faster animations (Looks a little weird)
                            duration: 0
                        },
                        scales: {
                          xAxes: [{
                            display: false
                          }],
                          yAxes: [{
                            display: false,
                          }],
                        }
                    }
                });
                </script>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			</div>
		 </div>
	</div>
</div>
