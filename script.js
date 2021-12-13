$(document).ready(function(){ 
    //Send the data when the button is clicked
    $('#submit_data').click(function(){
        var language = $('input[name=programming_language]:checked').val();
        
        $.ajax({
            url:"data.php",
            method: "POST",
            data: {action: 'insert', language:language},
            beforeSend:function(){
                $('#submit_data').attr('disabled','disabled');
            },
            success:function(data){
               $('#submit_data').attr('disabled', false);
               $('programming_language_1').prop('checked','checked');
               $('programming_language_2').prop('checked','false');
               $('programming_language_3').prop('checked','false'); 
               $('programming_language_4').prop('checked','false');

               alert("Your feedback has been send...");

               makechart();
            }
        })
    });
    //Print the data into the charts
    makechart();
    
    //Define the handleHover
    // Append '4d' to the colors (alpha channel), except for the hovered index
    function handleHover(evt, item, legend) {
        legend.chart.data.datasets[0].backgroundColor.forEach((color, index, colors) => {
        colors[index] = index === item.index || color.length === 9 ? color : color + '4D';
        });
        legend.chart.update();
    }

    // Removes the alpha channel from background colors
    function handleLeave(evt, item, legend) {
        legend.chart.data.datasets[0].backgroundColor.forEach((color, index, colors) => {
        colors[index] = color.length === 9 ? color.slice(0, -2) : color;
        });
        legend.chart.update();
    }

    //Define the function to print the data into differents charts
    function makechart(){
        $.ajax({
            url:"data.php",
            method: "POST",
            data:{action:'fetch'},
            dataType:"JSON",
            success:function(data){
                var language = [];
                var total = [];
                var color = [];

                for(var count = 0; count < data.length; count ++){
                    language.push(data[count].language);
                    total.push(data[count].total);
                    color.push(data[count].color);
                }
                var chart_data = {
                    labels: language,
                    datasets: [
                        {
                            label: "Vote",
                            backgroundColor: color,
                            color: "fff",
                            data:total
                        }
                    ]
                };                

                var options = {
                    responisve: true,
                    scales: {
                        yAxes: [{
                            ticks: {
                                min: 0
                            }
                        }]
                    },
                    legend: {
                        display: true,
                        position: 'bottom',
                    },
                    plugins: {
                        legend: {
                          onHover: handleHover,
                          onLeave: handleLeave
                        }
                    },                   
                };
                var options_2 = {
                    responisve: true,
                    legend : {
                        display: true,
                        position: 'bottom'
                    },
                    plugins: {
                        legend: {
                          onHover: handleHover,
                          onLeave: handleLeave
                        }
                    }
                }

                var group_chart1 = $('#pie_chart');

                var graph1 = new Chart(group_chart1, {
                    type: "pie",
                    data: chart_data,
                    options: options_2
                });

                var group_chart2 = $('#doughnut_chart');

                var graph2 = new Chart(group_chart2, {
                    type: "doughnut",
                    data: chart_data,
                    options: options_2
                });

                var group_chart3 = $('#bar_chart');

                var graph3 = new Chart(group_chart3, {
                    type: "bar",
                    data: chart_data,
                    options: options
                });

                var group_chart4 = $('#radar_chart');

                var graph4 = new Chart(group_chart4, {
                    type: "radar",
                    data: chart_data,
                    options: options_2
                });

                var group_chart5 = $('#polar_area_chart');

                var graph5 = new Chart(group_chart5, {
                    type: "polarArea",
                    data: chart_data,
                    options: options_2
                });               
            }
        })
    }
});