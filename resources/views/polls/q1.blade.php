<div class="media first_child">
    <img src="{{ asset('img/ques.png') }}" alt="" class="img-responsive img-circle">
    <form action="{{ url('/polls/1') }}" method="POST">
        {{ csrf_field() }}
        <div class="media_body">
            <p><b>Raees of the batch</b></p>
            <div class="row" style="display: inline-block;">
                <div class="col-sm-8  ">
                    <div class="">
                        <div class="input-field">
                            @if(!empty($polls['q1']))
                            <input placeholder="Sample Ans" type="text" name="q1" required="required" id="q1" value="{{$polls['q1']}}">
                            @else
                            <input placeholder="Sample Ans" type="text" name="q1" required="required" id="q1">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group" style="margin-left: 20px;">
                        <button type="submit" class="btn btn-success"><i class="material-icons"> done </i></button>
                    </div>

                    <div class="form-group" style="margin-left: 20px;">
                        <a data-toggle="collapse" data-target="#r1" class="btn btn-primary">Results</a>
                    </div>

                </div>
                @if(implode(" ",$errors->get(0))==1)
                <div class="alert alert-danger">
                    <strong>Error!</strong> {{implode(" ",$errors->get(1))}}
                </div>
                @endif
                @if(!empty($res[1]))
                <?php $x[1] = array_keys($res[1]);
                $y[1] = array_values($res[1]); ?>
                <div class="collapse" id="r1" style="width: 300px;height: 300px;">
                    <canvas id="myChart1" width="400" height="400"></canvas>
                    <script>
                        var x1 = <?php echo json_encode($x[1]); ?>;
                        var y1 = <?php echo json_encode($y[1]); ?>;
                        var ctx1 = document.getElementById("myChart1").getContext('2d');
                        var myChart1 = new Chart(ctx1, {
                            type: 'bar',
                            data: {
                                labels: x1,
                                datasets: [{
                                    label: '# of Votes',
                                    data: y1,
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