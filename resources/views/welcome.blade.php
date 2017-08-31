@extends('template.template')

@section('link')

<style>
    .jadiBiru {
        background-color: red;
    }

    #myInput {
        font-family: lato;
        background-position: 10px 12px;
        background-repeat: no-repeat;
        width: 100%;
        font-size: 18px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
    }
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


@endsection

@section('navbar')
    <li class="page-scroll">
        <a href="#page-top">Welcome</a>
    </li>
    <li class="page-scroll">
        <a href="#about">About</a>
    </li>
    <li class="page-scroll">
        <a href="#contact">News</a>
    </li>
    <li class="page-scroll">
        <a>Contact</a>
    </li>
    <li class="page-scroll">
        <a href="#library">Library</a>
    </li>
@endsection

@section('content')
    
    <!-- Header -->
    <header>
        <div style="height: 100px; background-color: rgb(24,187,155);"></div>
        <div id="maincontent" tabindex="-1">
            <div>
                <div>
                    <img class="img-responsive" src="img/profile.png" alt="">
                </div>
            </div>
        </div>
    </header>


    <section id="content" class="container">
        <h1>Selamat datang di kleb!</h1>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt="Cabin">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cake.png" class="img-responsive" alt="Slice of cake">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/circus.png" class="img-responsive" alt="Circus tent">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/game.png" class="img-responsive" alt="Game controller">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/safe.png" class="img-responsive" alt="Safe">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/submarine.png" class="img-responsive" alt="Submarine">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="column">
                <div class="col-lg-12 text-center" id="gerak">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Web yang berisi testimoni</p>
                </div>
                <div class="col-lg-4">
                    <p>Web untuk belajar laravel</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Theme
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--List Buku Section -->
    <section id="library">
        <div class="container">
            <div>
                <h1 class="page-header text-center">List Buku</h1>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- biar cepet -->
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Sekarang..." title="Type in a name">

                    <div class="panel panel-default">  
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr class="navbar-default navbar-custom"  style="color: white; font-size: 16px;">
                                        <th class="col-sm-2">Nomor</th>
                                        <th class="col-sm-6">Nama Buku</th>
                                        <th>Status</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no = 1;
                                        $kelipatan2 = 0;
                                    ?>
                                    @foreach($books as $book)
                                        <tr 
                                        @if ($no % 2 === 1)
                                            class="success"
                                        @endif 
                                        @if ($no % 5 === 1)
                                            <?php $kelipatan2++; ?>
                                        @endif
                                        id="muncul-{{$no}}"> 
                                            
                                            <td>{{$no}}</td>
                                            <td id="{{$no}}"><a href="/{{$book->id}}" style="color: rgb(20, 66, 47); font-size: 20px;">{{$book->judul}}</a></td>
                                            <td>
                                                <button type="submit" class="btn btn-primary" id="pinjam_btn-{{$book->id}}">Pinjam</button>
                                            </td>   
                                            <td>
                                                <form action="/{{$book->id}}" method="post">
                                                    <button type="submit" class="btn btn-primary">Delete</button>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    {{ csrf_field() }}
                                                </form>
                                            </td>   
                                        </tr>
                                        <?php $no++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="/insert"><button class="btn btn-success col-lg-12"><h4>Tambah Buku</h4></button></a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="col-sm-12">
                        <div class="col-sm-6">
                            <div id="addToCarts" style="font-family: "Times New Roman";">
                                <button id="addToCarts-hide" class="btn btn-active col-sm-1 text-center" style="width: 30px; height: 30px; background-color: rgb(69, 158, 188); color: white;">x</button>
                                <p class="col-xs-8" >Add To Cart: ganteng</p>
                            </div>
                        </div>

                        <div class="col-sm-6" style="text-align: right;">
                            <button id="prev" class="btn btn-success">prev</button>
                            <?php $varbaru = 1?>
                            @while ($varbaru <= $kelipatan2)
                                <button id="tombol-{{$varbaru}}" class="btn btn-success"> 
                                        {{$varbaru}}
                                </button>
                                <?php $varbaru++ ?>
                            @endwhile
                            <button id="next" class="btn btn-success">next</button>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>    
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Testimoni</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form method="POST" action="{{url('message')}}">
                    {{ csrf_field() }}

                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email">Email Kamu</label>
                                <input type="email" name="email" class="form-control" placeholder="Email Kamu" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="message">Testimoni</label>
                                <textarea rows="5" name="message" class="form-control" placeholder="Testimoni" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Script Section -->
    <script>


    var lastClicked = 1;

    function tabelMuncul(n = 1){
        $("#muncul-"+ ((n*5)-4)).siblings().hide();
        for (i = 0; i < 5; i++){
            $("#muncul-"+(((n-1)*5)+i+1)).show();
        }
    }

    function tombolMuncul(n = 1) {
        $("#tombol-"+ n).siblings().hide();
        $("#next").show();
        $("#prev").show();
        for (i = -2; i < 3; i++){
            $("#tombol-"+(n+i)).show();
        }
    }

    function myFunction() {
        var input, filter, tr, td, a, i;
        // ambil input
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();

        if (filter === "") {
            tabelMuncul(lastClicked);
        }
        else {
            // tempat yang mau dicari datanya
            td = [];
            for (i = 1; i < {{$no}}; i++) {
                tr = document.getElementById("muncul-"+i);
                var inTr = tr.getElementsByTagName("td");

                // hanya ambil yang kolom nama buku
                for (var j = 1; j <= inTr.length; j++) {
                    if (parseInt(inTr[j].id + 0) > 0) {
                        td.push(inTr[j]);
                        break;   
                    }   
                } 
            }

            for (i = 0; i < td.length; i++) {
                a = td[i].getElementsByTagName("a")[0];
                if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    $("#muncul-"+td[i].id).show();
                } else {
                    $("#muncul-"+td[i].id).hide();
                }
            }

        }

    }


    $(document).ready(function(){

        $("#addToCarts").hide();
        tombolMuncul();
        tabelMuncul();

        @for ($i = 1; $i <= $varbaru; $i++) 
            $("#tombol-{{$i}}").click(function(){;
                tombolMuncul({{$i}});
                tabelMuncul({{$i}});
                lastClicked = {{$i}};
                $("#tombol-"+(lastClicked)).siblings().removeClass('active');
            });
        @endfor

        @foreach($books as $book)
            $("#pinjam_btn-{{$book->id}}").click(function(){
                $("#addToCarts").show();
            });
        @endforeach

        $("#prev").click(function(){
            if (lastClicked > 1) {
                $("#tombol-"+(lastClicked-1)).siblings().removeClass('active');
                $("#tombol-"+(lastClicked-1)).addClass('active');
                tombolMuncul(lastClicked-1);
                tabelMuncul(lastClicked-1);
                lastClicked--;
            }
        });

        $("#next").click(function(){
            if (lastClicked < {{$varbaru-1}}) {
                $("#tombol-"+(lastClicked+1)).siblings().removeClass('active');
                $("#tombol-"+(lastClicked+1)).addClass('active');
                tombolMuncul((lastClicked+1));
                tabelMuncul((lastClicked+1));
                lastClicked++;
            }
        });

        $("#addToCarts-hide").click(function(){
            $("#addToCarts").hide();      
        });

    });

    </script> 

@endsection


<!--         function tombolMuncul() {
            <?php $urutan2 = 1 ?>
            @while ($urutan2 <= $varbaru)
                $("#tombol-{{$urutan2}}").click(function(){
                    $("#tombol-{{$urutan2}}").siblings().hide();
                    @for ($i = -2; $i < 3; $i++)
                        $("#tombol-{{$urutan2-$i}}").show();
                    @endfor
                });
                <?php $urutan2++ ?>
            @endwhile
        } -->


<!--    
        $("#muncul-1").siblings().hide();     
        <?php $urutan = 1 ?>
            @while ($urutan <= $varbaru)
            $("#tombol-{{$urutan}}").click(function(){
                $("#muncul-{{$urutan}}").show();
                $("#muncul-{{$urutan}}").siblings().hide();
            });
            <?php $urutan++ ?>
        @endwhile -->