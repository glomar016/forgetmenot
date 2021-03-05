

 <!-- Chart JS -->
 <script src="<?php echo base_url() ?>resources/js/Chart.min.js"></script>
 <script src="<?php echo base_url() ?>resources/js/Chart.js"></script>
 <script src="<?php echo base_url() ?>resources/js/Chart.bundle.js"></script>
 <script src="<?php echo base_url() ?>resources/js/Chart.bundle.min.js"></script>




<script>
var dataset = []
var dailyset = []
var dateset = []
var dayset = []
var monthset = []
function show_chart(){
    $('#chart').html('<canvas id="myChart" width="500" height="100"></canvas>')
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
        labels: ['Completed Task', 'Active Task'],
        datasets: [{
            label: '# of Task',
            data: [dataset[0], dataset[1]],
            backgroundColor: [
                '#28a745',
                '#46d4e0'
            ],
            borderColor: [
                '#28a745',
                '#46d4e0'
            ],
            borderWidth: 1
        }]
        },
        });
        
}

function show_productivity(){
    $('#productivity').html('<canvas id="productivtyChart" width="1000" height="500"></canvas>')
        var ctx = document.getElementById('productivtyChart').getContext('2d');
        var productivtyChart = new Chart(ctx, {
        type: 'bar',
        data: {
        labels: [dayset[0], dayset[1], dayset[2], dayset[3], dayset[4], dayset[5], dayset[6]],
        datasets: [{
            label: 'Accomplished Tasks',
            data: [dailyset[0], dailyset[1], dailyset[2], dailyset[3], dailyset[4], dailyset[5], dailyset[6]],
            backgroundColor: [
                'blue',
                'orange',
                'yellow',
                'green',
                'violet',
                'indigo',
                'red'
            ],
            borderColor: [
                'red',
                'orange',
                'yellow',
                'green',
                'violet',
                'indigo',
                'blue'
            ],
        }]
        },
            options: {
            scales: {
                y: {
                    beginAtZero: true
                },
                yAxes: [{
                ticks: {
                    beginAtZero: true,
                    maxTicksLimit: 10,
                    stepSize: 5,
                    max: 50,
                    fontFamily: "Poppins",
                    fontSize: 12
                },
                gridLines: {
                    display: false,
                    color: '#247BA0'
                }
                }]
            }
        }
        });
        
}
    
function show_month(){
    $('#monthly_productivity').html('<canvas id="monthChart" width="1000" height="500"></canvas>')
        var ctx = document.getElementById('monthChart').getContext('2d');
        var productivtyChart = new Chart(ctx, {
        type: 'bar',
        data: {
        labels: ['January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [{
            label: 'Accomplished Tasks',
            data: [monthset[0], monthset[1], monthset[2], monthset[3], monthset[4], monthset[5], monthset[6], monthset[7], monthset[8], monthset[9], monthset[10], monthset[11]],
            backgroundColor: [
                'orange',
                'blue',
                'yellow',
                'green',
                'violet',
                'indigo',
                'red'
            ],
            borderColor: [
                'red',
                'orange',
                'yellow',
                'green',
                'violet',
                'indigo',
                'blue'
            ],
        }]
        },
            options: {
            scales: {
                y: {
                    beginAtZero: true
                },
                yAxes: [{
                ticks: {
                    beginAtZero: true,
                    maxTicksLimit: 10,
                    stepSize: 5,
                    max: 50,
                    fontFamily: "Poppins",
                    fontSize: 12
                },
                gridLines: {
                    display: false,
                    color: '#247BA0'
                }
                }]
            }
        }
        });
        
}
    



</script>