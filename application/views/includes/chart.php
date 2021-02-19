

 <!-- Chart JS -->
 <script src="<?php echo base_url() ?>resources/js/Chart.min.js"></script>
 <script src="<?php echo base_url() ?>resources/js/Chart.js"></script>
 <script src="<?php echo base_url() ?>resources/js/Chart.bundle.js"></script>
 <script src="<?php echo base_url() ?>resources/js/Chart.bundle.min.js"></script>




<script>
var dataset = []
function show_chart(){
    $('#chart').html('<canvas id="myChart" width="500" height="100"></canvas>')
    console.log(dataset)
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
    



</script>