<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ==============================================
        Title and Meta Tags
        =============================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polls</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- ==============================================
        Favicons
        =============================================== -->
    <link rel="icon" href="{{asset('img/navbar/kgplogo1.png')}}" sizes="32x32" type="image/gif" />
    <link rel="apple-touch-icon" href="{{ asset('img/favicons/apple-touch-icon.png') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    {{-- <script src="{{ asset('js/jquery.min.js') }}"></script> --}}

    <!-- ==============================================
        CSS
        =============================================== -->
    <link type="text/css" href="{{ asset('css/demos/photo.css') }}" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <!-- ==============================================
        Feauture Detection
        =============================================== -->

    <!--Navigation Section -->
    @extends('navbar')

    <style type="text/css">
    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


</head>

<body>

    @section('main-content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/base.js') }}"></script>
    <script src="{{ asset('plugins/slimscroll/jquery.slimscroll.js') }}"></script>



    <style type="text/css">
        :root {
            --primary-color-dark-blue-1: hsl(217, 28%, 15%);
            --primary-color-dark-blue-2: hsl(218, 28%, 13%);
            --primary-color-dark-blue-3: hsl(216, 53%, 9%);
            --primary-color-dark-blue-4: hsl(219, 30%, 18%);
        }

        @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&family=Nunito&family=Source+Sans+Pro&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Neonderthaw&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Karla&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Serif&display=swap');

        section {
            background-color: var(--primary-color-dark-blue-2) !important;
            font-family: 'IBM Plex Serif', serif;
        }

        .row {
            width: 100%;
        }

        .back {
            overflow-y: auto;
            margin-bottom: 20px;
            padding-left: 150px
        }

        .media {
            margin-top: 0px;
            margin-bottom: 15px;
            margin-right: 10px;
            padding: 20px;
            background-color: var(--primary-color-dark-blue-4) !important;
            border-radius: 6px;
        }

        .media_body p {
            margin-top: 0px;
            font-size: large;
        }

        .form-group button {
            border: none;
            margin-top: 0 !important;
            background-color: var(--primary-color-dark-blue-4) !important;
        }

        .media p,
        .header {
            font-family: 'Courier New', Courier, monospace;
        }

        .polls-input .input-field input {
            margin-left: 0 !important;
            margin-top: 0 !important;
        }

        h1,
        h5 {
            text-align: center;
        }

        @media screen and (max-width:500px) {
            .back {

                margin-left: 0px;
                padding-left: 15px;

            }

            .media {

                margin-right: 0px;

            }
        }
    </style>
    <section class="header">
        <?php
        $titles = [
            'Richie Rich',
            'Nightangle of the batch',
            'The Caffeine Commander',
            'The Group Chat Ghost',
            'The Wifi Magnet',
            'Swag Master',
            'Harry Potter of the Batch',
            'The Algorithm Alchemist',
            'Sleep Scheduler',
            'The Advice Guru',
            'Batch Mascot',
            'Classroom DJ',
            'Social Butterfly'
        ];
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 ">
                    <h1>Polls</h1>
                    <hr>
                    <h5>
                        Vote for your favourite Batchmates, the really good singer, or the guy/girl who always makes the group laugh
                    </h5>
                </div>
            </div>
        </div>
    </section>
    <section class="notifications back">
        <div class="container-fluid">
            <div class="row justify-content-around">
                <?php
                $polls_size = 13;
                for ($i = 0; $i < $polls_size; $i++) :
                    $q = 'q' . ($i + 1);  // Adjusting $q to start from 1
                    $link = '/polls/' . ($i + 1);
                ?>
                    <div class="col-xs-11 col-lg-5 col-md-5 media">
                        <!-- <img src="{{ asset('img/ques.png') }}" alt="" class="img-responsive img-circle"> -->
                        <form action="{{ url($link) }}" method="POST">
                            {{ csrf_field() }}
                            <div class="media_body">
                                <p><i class="fas fa-poll fa-lg"></i><b> {{ $titles[$i] }} </b></p>
                                <div class="row" style="display: inline-block;">
                                    <div class="col-sm-10 col-md-12 col-lg-9">
                                        <div class="polls-input">
                                            <div class="input-field">
                                                @if(!empty($polls[$q]))
                                                <input placeholder="Sample Ans" type="text" name="{{$q}}" required="required" id="{{$q}}" value="{{$polls[$q]}}">
                                                @else
                                                <input placeholder="Choose your batchmate" type="text" name="{{$q}}" required="required" id="{{$q}}">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-2 col-lg-3">
                                        <div class="form-group" style="margin-left: 20px;">
                                            <button>
                                                <submit type="submit" class="btn btn-primary">Submit
                                            </button>
                                        </div>

                                        <!-- <div class="form-group" style="margin-left: 20px;">
                                            <a data-toggle="collapse" data-target="#r1" class="btn btn-primary">Results</a>
                                        </div> -->

                                    </div>
                                    @if(implode(" ",$errors->get(0))==1)
                                    <div class="alert alert-danger">
                                        <strong>Error!</strong> {{implode(" ",$errors->get(1))}}
                                    </div>
                                    @endif
                                    @if(!empty($res[$i]))
                                    <?php
                                    $x[$i] = array_keys($res[$i]);
                                    $y[$i] = array_values($res[$i]);
                                    $r = 'r' . $i;
                                    $mychart = 'mychart' . $i;
                                    ?>
                                    <div class="collapse" id="{{ $r }}" style="width: 300px;height: 300px;">
                                        <canvas id="{{ $mychart }}" width="400" height="400"></canvas>
                                        <script>
                                            var x = <?php echo json_encode($x[$i]); ?>;
                                            var y = <?php echo json_encode($y[$i]); ?>;
                                            var ctx1 = document.getElementById("myChart1").getContext('2d');
                                            var myChart1 = new Chart(ctx1, {
                                                type: 'bar',
                                                data: {
                                                    labels: x,
                                                    datasets: [{
                                                        label: '# of Votes',
                                                        data: y,
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
                <?php endfor; ?>
            </div>
        </div>
    </section>




    <script>
        $('#polls').removeClass('p-2 nav-icon-lg dark-black');
        $('#polls').addClass('p-2 nav-icon-lg mint-green');
    </script>
    <script>
        $('#Slim,#Slim2').slimScroll({
            height: "auto",
            position: 'right',
            railVisible: true,
            alwaysVisible: true,
            size: "8px",
        });
    </script>
    <script>
        $('.input-field').children().css({
            "background-color": "#f4f4f4",
            "border": "none",
            "border-radius": "5px",
            "padding-top": "3px",
            "padding-left": "5px",
            "line-height": "33px",
            "cursor": "text"
        });
        $(document).ready(function() {
            $('#q1, #q2, #q3, #q4, #q5, #q6, #q7, #q8, #q9, #q10, #q11, #q12, #q13, #q14').autocomplete({
                source: [names]
            });
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    @endsection
</body>

</html>