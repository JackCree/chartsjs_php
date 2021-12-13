<!DOCTYPE HTML>
<html>
   <head>
        <meta charset="utf-8" />
        <title>Dynamic Chart in PHP using Chart.js</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Chartjs library -->
        <script	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">     
    </head> 
    <body>
        <div class="container">
            <h1>Creating a dynamic chart in PHP using Chart.js</h1>
            <!-- Form -->
            <div class="card">
                <div class="card-header">Survey</div>
                <div class="card-body">
                    <div class="form-group">
                        <h2>What is your favorite popular language in 2021 ?</h2>
                            <div class="form-check">                                
                                <input type="radio" name="programming_language" class="programming_language" id="programming_language_1" value="PHP" checked/>
                                <label class="form-check-label mb-2" for="programming_language_1">PHP</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="programming_language" class="programming_language" id="programming_language_2" value="Javascript"/>
                                <label class="form-check-label mb-2" for="programming_language_2">Javascript</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="programming_language" class="programming_language" id="programming_language_3" value="Python"/>
                                <label class="form-check-label mb-2" for="programming_language_3">Python</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="programming_language" class="programming_language" id="programming_language_4" value="Java"/>
                                <label class="form-check-label mb-2" for="programming_language_4">Java</label>
                            </div> 
                        </div>
                        <div class="form-group">
                                <button type="button" name="submit-data" class="btn btn-primary" id="submit_data">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Data Visualisation -->
            <div class="container-fluid">
                <!-- First Line -->
                <div class="row">
                    <!-- Pie Chart -->
                    <div class="col-md-4">
                        <div class="card mt-4">
                            <div class="card-header">Pie Chart</div>
                            <div class="card-body">
                                <div class="chart-container pie-chart">
                                    <canvas id="pie_chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Doughnut Chart -->
                    <div class="col-md-4">
                        <div class="card mt-4">
                            <div class="card-header">Doughnut Chart</div>
                            <div class="card-body">
                                <div class="chart-container pie-chart">
                                    <canvas id="doughnut_chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Bar Chart -->
                    <div class="col-md-4">
                        <div class="card mt-4">
                            <div class="card-header">Bar Chart</div>
                            <div class="card-body">
                                <div class="chart-container pie-chart">
                                    <canvas id="bar_chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second Line -->
                <div class="row">
                    <!-- Pie Chart -->
                    <div class="col-md-6">
                        <div class="card mt-4">
                            <div class="card-header">Radar Chart</div>
                            <div class="card-body">
                                <div class="chart-container pie-chart">
                                    <canvas id="radar_chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Doughnut Chart -->
                    <div class="col-md-6">
                        <div class="card mt-4">
                            <div class="card-header">Polar Area Chart</div>
                            <div class="card-body">
                                <div class="chart-container pie-chart">
                                    <canvas id="polar_area_chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        <!-- Jquery library -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Bootstrap library -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>