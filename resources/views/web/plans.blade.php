@extends('layouts.web')
@section('content')

    <section style="background: #FFFFFF; min-height: 100px !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class=""><img  style="fill: #444444; margin-right: 20px" class="rounded mx-auto d-block hvr-icon-float" src="{{url('/images/icon-term.svg')}}" alt="Generic placeholder " width="50" height="50"> TODOS LOS PLANES Incluyen 1 decodificador <b>HD</b> <a href="{{url('/info-decos-hd-modal')}}" data-toggle="modal" data-target="#miraModal">Mas Informacion</a></h4>
                </div>
            </div>
        </div>
    </section>
    <section class="content-plan p-base" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-2">
                        <span class="icon-plans icon-base"></span>
                        <h1 class="color-base pull-left" ><span>Plan</span> <br> BASE</h1>
                    </div>
                    <div class="col-lg-4" style="border-left: 2px solid #444444; padding-left: 20px">
                        <h2><span style="color:#52B1BF;font-weight: 800" >153</span> Canales de TV.</h2>
                        <ul>
                            <li>10 Canales Nacionales Standar (SD)</li>
                            <li>80 Canales Standar (SD)</li>
                            <li>06 Canales Nacionales en Alta Definición (HD)</li>
                            <li>57 Canales Nacionales en Altas Definición (HD)</li>
                        </ul>
                        <a class="btn btn-default" style="background: transparent;color:#52B1BF; border-color:#52B1BF " href="{{url('/plan/1/channels')}}" role="button" data-toggle="modal" data-target="#miraModal">Ver Canales</a>
                    </div>
                    <div class="col-lg-3" style="border-left: 2px solid #444444; padding-left: 20px">
                        <h3><span style="color:#52B1BF;font-weight: 800" >Decodificadores</span> </h3>
                        <ul>
                            <li>INCLUYE 1 Decodificador</li>
                        </ul>
                        <div class="col-lg-12" style="padding: 2px"><span class="label label-default pull-left selectDeco" style="padding: 10px; width: 100%; margin-bottom: 3px"> ¿Desea agregar + Decos a tu plan? </span></div>
                        <div class="col-lg-6" style="padding: 2px">
                            <span class="label label-default pull-left selectDeco unique" style="width: 100%; padding: 7px"> <i class="fa fa-plus"></i><i class="icon-deco"></i> 2 Deco </span>
                            <span class="label label-default pull-left selectDeco unique-all" data-value="2500" data-detail="2 Decos / Base + Base " style="width: 100%; padding: 7px; margin-top: 3px"> Base + Base </span>

                        </div>
                        <div class="col-lg-6" style="padding: 2px">
                            <span class="label label-default pull-left selectDeco unique" style="width: 100%; padding: 7px"> <i class="fa fa-plus"></i><i class="icon-deco"></i> 3 Deco </span>
                            <span class="label label-default pull-left selectDeco unique-all" data-value="5000" data-detail="3 Decos / Base + Base + Base" style="width: 100%; padding: 7px; margin-top: 3px "> Base + Base + Base </span>

                        </div>
                    </div>
                    <div class="col-lg-3" style="border-left: 2px solid #444444; padding-left: 50px">
                        <p>Detalle Solicitado:</p>
                        <p class="detail"><b>1</b> Deco / Base</p>

                        <h1 class="price" data-value="14500">$14.500</h1>
                        <a class="btn btn-lg btn-default" style="width: 200px;height: 70px;font-size: 30px; background: #212121; color: #FFFFFF;" href="{{url('/plan/1/hire')}}" role="button" data-toggle="modal" data-target="#miraModal">Contratar</a>
                        <br>
                        <a href="{{url('/info-plan-modal')}}" data-toggle="modal" data-target="#miraModal">Mas Informacion</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="content-plan p-futbol">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-2">
                        <span class="icon-plans icon-futbol"></span>
                        <h1 class="color-futbol pull-left"><span>Plan</span> <br> FÚTBOL</h1>
                    </div>
                    <div class="col-lg-4" style="border-left: 2px solid #444444; padding-left: 20px">
                        <h2><span style="color:#FFAD20;font-weight: 800">160</span> Canales de TV.</h2>
                        <ul>
                            <li>10 Canales Nacionales Standar (SD)</li>
                            <li>80 Canales Standar (SD)</li>
                            <li>06 Canales Nacionales en Alta Definición (HD)</li>
                            <li>57 Canales Nacionales en Altas Definición (HD)</li>
                        </ul>
                        <a class="btn btn-default" style="background: transparent;color:#FFAD20; border-color:#FFAD20 " href="{{url('/plan/2/channels')}}" role="button" data-toggle="modal" data-target="#miraModal">Ver Canales</a>
                    </div>
                    <div class="col-lg-3" style="border-left: 2px solid #444444; padding-left: 20px">
                        <h3><span style="color:#FFAD20;font-weight: 800" >Decodificadores</span> </h3>
                        <ul>
                            <li>INCLUYE 1 Decodificador Fútbol</li>
                        </ul>
                        <div class="col-lg-12" style="padding: 2px"><span class="label label-default pull-left selectDeco" style="padding: 10px; width: 100%; margin-bottom: 3px"> ¿Desea agregar + Decos a tu plan? </span></div>
                        <div class="col-lg-6" style="padding: 2px">
                            <span class="label label-default pull-left selectDeco unique" style="width: 100%; padding: 7px"> <i class="fa fa-plus"></i><i class="icon-deco"></i> 2 Deco </span>

                            <span class="label label-default pull-left selectDeco unique-all" data-value="2500" data-detail="2 Decos / Base + Fútbol" style="width: 100%; padding: 7px; margin-top: 3px"> Base + Fútbol </span>
                            <span class="label label-default pull-left selectDeco unique-all" data-value="3500" data-detail="2 Decos / Fútbol + Fútbol" style="width: 100%; padding: 7px; margin-top: 3px"> Fútbol + Fútbol </span>

                        </div>
                        <div class="col-lg-6" style="padding: 2px">
                            <span class="label label-default pull-left selectDeco unique" style="width: 100%; padding: 7px"> <i class="fa fa-plus"></i><i class="icon-deco"></i> 3 Deco </span>

                            <span class="label label-default pull-left selectDeco unique-all" data-value="5000" data-detail="3 Decos / Base + Base + Fútbol" style="width: 100%; padding: 7px; margin-top: 3px "> Base + Base + Fútbol </span>
                            <span class="label label-default pull-left selectDeco unique-all" data-value="7000" data-detail="3 Decos / Base + Fútbol + Fútbol" style="width: 100%; padding: 7px; margin-top: 3px "> Base + Fútbol + Fútbol </span>
                            <span class="label label-default pull-left selectDeco unique-all" data-value="10500" data-detail="3 Decos / Fútbol + Fútbol + Fútbol" style="width: 100%; padding: 7px; margin-top: 3px "> Fútbol + Fútbol + Fútbol </span>


                        </div>

                    </div>
                    <div class="col-lg-3" style="border-left: 2px solid #444444; padding-left: 50px">
                        <p>Detalle Solicitado:</p>
                        <p class="detail"><b>1</b> Deco / Fútbol</p>

                        <h1 class="price" data-value="21000">$21.000</h1>
                        <a class="btn btn-lg btn-default" style="width: 200px;height: 70px;font-size: 30px; background: #212121; color: #FFFFFF;" href="{{url('/plan/2/hire')}}" role="button" data-toggle="modal" data-target="#miraModal">Contratar</a>
                        <br>
                        <a href="{{url('/info-plan-modal')}}" data-toggle="modal" data-target="#miraModal">Mas Informacion</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="content-plan p-cine" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-2">
                        <span class="icon-plans icon-cine"></span>
                        <h1 class="color-cine pull-left"><span>Plan</span> <br> CINE</h1>
                    </div>
                    <div class="col-lg-4" style="border-left: 2px solid #444444; padding-left: 20px">
                        <h2><span style="color:#E91D62;font-weight: 800" >175</span> Canales de TV.</h2>
                        <ul>
                            <li>10 Canales Nacionales Standar (SD)</li>
                            <li>80 Canales Standar (SD)</li>
                            <li>06 Canales Nacionales en Alta Definición (HD)</li>
                            <li>57 Canales Nacionales en Altas Definición (HD)</li>
                        </ul>
                        <a class="btn btn-default" style="background: transparent;color:#E91D62; border-color:#E91D62 " href="{{url('/plan/3/channels')}}" role="button" data-toggle="modal" data-target="#miraModal">Ver Canales</a>

                    </div>
                    <div class="col-lg-3" style="border-left: 2px solid #444444; padding-left: 20px">
                        <h3><span style="color:#E91D62;font-weight: 800" >Decodificadores</span> </h3>
                        <ul>
                            <li>INCLUYE 1 Decodificador Cine</li>
                        </ul>
                        <div class="col-lg-12" style="padding: 2px"><span class="label label-default pull-left selectDeco" style="padding: 10px; width: 100%; margin-bottom: 3px"> ¿Desea agregar + Decos a tu plan? </span></div>

                        <div class="col-lg-6" style="padding: 2px">
                            <span class="label label-default pull-left selectDeco unique" style="width: 100%; padding: 7px"> <i class="fa fa-plus"></i><i class="icon-deco"></i> 2 Deco </span>

                            <span class="label label-default pull-left selectDeco unique-all" data-value="2500" data-detail="2 Decos / Base + Cine"  style="width: 100%; padding: 7px; margin-top: 3px"> Base + Cine </span>
                            <span class="label label-default pull-left selectDeco unique-all" data-value="3500" data-detail="2 Decos / Cine + Cine"  style="width: 100%; padding: 7px; margin-top: 3px"> Cine + Cine </span>


                        </div>
                        <div class="col-lg-6" style="padding: 2px">
                            <span class="label label-default pull-left selectDeco unique" style="width: 100%; padding: 7px"> <i class="fa fa-plus"></i><i class="icon-deco"></i> 3 Deco </span>

                            <span class="label label-default pull-left selectDeco unique-all"  data-value="5000" data-detail="3 Decos / Base + Base + Cine" style="width: 100%; padding: 7px; margin-top: 3px "> Base + Base + Base </span>
                            <span class="label label-default pull-left selectDeco unique-all"  data-value="7000" data-detail="3 Decos / Base + Cine + Cine" style="width: 100%; padding: 7px; margin-top: 3px "> Base + Base + Cine </span>
                            <span class="label label-default pull-left selectDeco  unique-all"  data-value="10500" data-detail="3 Decos / Cine + Cine + Cine" style="width: 100%; padding: 7px; margin-top: 3px "> Cine + Cine + Cine </span>


                        </div>

                    </div>
                    <div class="col-lg-3" style="border-left: 2px solid #444444; padding-left: 50px">
                        <p>Detalle Solicitado:</p>
                        <p class="detail"><b>1</b> Deco / Cine</p>

                        <h1 class="price" data-value="20000">$20.000</h1>
                        <a class="btn btn-lg btn-default" style="width: 200px;height: 70px;font-size: 30px; background: #212121; color: #FFFFFF;" href="{{url('/plan/3/hire')}}" role="button" data-toggle="modal" data-target="#miraModal">Contratar</a>
                        <br>
                        <a href="{{url('/info-plan-modal')}}" data-toggle="modal" data-target="#miraModal">Mas Informacion</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="content-plan p-total" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-2">
                        <span class="icon-plans icon-total"></span>
                        <h1 class="color-total pull-left"><span>Plan</span> <br> TOTAL</h1>
                    </div>
                    <div class="col-lg-4" style="border-left: 2px solid #444444; padding-left: 20px">
                        <h2><span style="color:#47AA71;font-weight: 800" >182</span> Canales de TV.</h2>
                        <ul>
                            <li>10 Canales Nacionales Standar (SD)</li>
                            <li>80 Canales Standar (SD)</li>
                            <li>06 Canales Nacionales en Alta Definición (HD)</li>
                            <li>57 Canales Nacionales en Altas Definición (HD)</li>
                        </ul>
                        <a class="btn btn-default" style="background: transparent;color:#47AA71; border-color:#47AA71 " href="{{url('/plan/4/channels')}}" role="button" data-toggle="modal" data-target="#miraModal">Ver Canales</a>
                    </div>
                    <div class="col-lg-3" style="border-left: 2px solid #444444; padding-left: 20px">
                        <h3><span style="color:#47AA71;font-weight: 800" >Decodificadores</span> </h3>
                        <ul>
                            <li>INCLUYE 1 Decodificador Total</li>
                        </ul>
                        <div class="col-lg-12" style="padding: 2px"><span class="label label-default pull-left selectDeco" style="padding: 10px; width: 100%; margin-bottom: 3px"> ¿Desea agregar + Decos a tu plan? </span></div>

                        <div class="col-lg-6" style="padding: 2px">

                            <span class="label label-default pull-left selectDeco unique"  style="width: 100%; padding: 7px"> <i class="fa fa-plus"></i><i class="icon-deco"></i> 2 Deco </span>
                            <span class="label label-default pull-left selectDeco unique-all" data-value="2500" data-detail="2 Decos / Base + Total"  style="width: 100%; padding: 7px; margin-top: 3px"> Base + Total </span>
                            <span class="label label-default pull-left selectDeco unique-all" data-value="5000" data-detail="2 Decos / Total + Total"  style="width: 100%; padding: 7px; margin-top: 3px"> Total + Total </span>


                        </div>
                        <div class="col-lg-6" style="padding: 2px">
                            <span class="label label-default pull-left selectDeco unique" style="width: 100%; padding: 7px"> <i class="fa fa-plus"></i><i class="icon-deco"></i> 3 Deco </span>

                            <span class="label label-default pull-left selectDeco unique-all" data-value="5000" data-detail="3 Decos / Base + Base + Total" style="width: 100%; padding: 7px; margin-top: 3px "> Base + Base + Total </span>
                            <span class="label label-default pull-left selectDeco unique-all" data-value="7000" data-detail="3 Decos / Base + Total + Total" style="width: 100%; padding: 7px; margin-top: 3px "> Base + Total + Total </span>
                            <span class="label label-default pull-left selectDeco unique-all" data-value="10500" data-detail="3 Decos / Total + Total + Total" style="width: 100%; padding: 7px; margin-top: 3px "> Total + Total + Total </span>


                        </div>


                    </div>
                    <div class="col-lg-3" style="border-left: 2px solid #444444; padding-left: 50px">
                        <p>Detalle Solicitado:</p>
                        <p class="detail"><b>1</b> Deco / Total</p>

                        <h1 class="price" data-value="25000">$25.000</h1>
                        <a class="btn btn-lg btn-default" style="width: 200px;height: 70px;font-size: 30px; background: #212121; color: #FFFFFF;" href="{{url('/plan/4/hire')}}" role="button" data-toggle="modal" data-target="#miraModal">Contratar</a>
                        <br>
                        <a href="{{url('/info-plan-modal')}}" data-toggle="modal" data-target="#miraModal">Mas Informacion</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <br>

@endsection