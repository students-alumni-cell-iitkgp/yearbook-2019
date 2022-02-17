<div class="media first_child">
    <img src="{{ asset('img/ques.png') }}" alt="" class="img-responsive img-circle">
    <form action="{{ url('/polls/2') }}" method="POST">
        {{ csrf_field() }}
        <div class="media_body">
            <p><b>Khabri of the Batch</b></p>
            <div class="row" style="display: inline-block;">
                <div class="col-sm-8">
                    <div class="">
                        <div class="input-field">
                            @if(!empty($polls['q3']))
                            <input placeholder="Sample Ans" type="text" name="q3" required="required" id="q3" value="{{$polls['q3']}}">
                            @else
                            <input placeholder="Sample Ans" type="text" name="q3" required="required" id="q3">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group" style="margin-left: 20px;">
                        <button type="submit" class="btn btn-success" style="margin-top: 0px;"><i class="material-icons"> done </i></button>
                    </div>

                    <div class="form-group" style="margin-left: 20px;">
                        <a data-toggle="collapse" data-target="#r3" class="btn btn-primary">Results</a>
                    </div>

                </div>
                @if(implode(" ",$errors->get(0))==3)
                <div class="alert alert-danger">
                    <strong>Error!</strong> {{implode(" ",$errors->get(1))}}
                </div>
                @endif
                @if(!empty($res[3]))
                <?php $x[3] = array_keys($res[3]);
                $y[3] = array_values($res[3]); ?>
                <div class="collapse" id="r3" style="width: 300px;height: 300px;">
                    <canvas id="myChart3" width="400" height="400"></canvas>
                    <script>
                        var x3 = <?php echo json_encode($x[3]); ?>;
                        var y3 = <?php echo json_encode($y[3]); ?>;
                        var ctx3 = document.getElementById("myChart3").getContext('2d');
                        var myChart3 = new Chart(ctx3, {
                            type: 'bar',
                            data: {
                                labels: x3,
                                datasets: [{
                                    label: '# of Votes',
                                    data: y3,
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(255,99,132,1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });
                    </script>

                </div>
                @endif
            </div>
        </div>
    </form>
</div>