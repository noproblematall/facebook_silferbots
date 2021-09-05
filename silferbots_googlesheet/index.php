<?php
$site_url = "localhost/";
$userid = '3344584002326645';
$fname = 'Hola';
$userpic = './images/avatar05.png';
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="facebook-domain-verification" content="8s362ezg9uuw2qgchyaygfsunujpxz" />
  <link rel="icon" href="./images/Miseguro.ar icon.png" type="image/gif" sizes="16x16">

    <title>Seleccioná tu plan</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="./css/all.min.css">
  <link rel="stylesheet" href="./css/jquery-ui.min.css">
  <link rel="stylesheet" href="./jquery_toast/jquery.toast.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="./css/adminlte.min.css">
  <link rel="stylesheet" href="./css/custom.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- Facebook Pixel Code -->					
  <script>					
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?					
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};					
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';					
  n.queue=[];t=b.createElement(e);t.async=!0;					
  t.src=v;s=b.getElementsByTagName(e)[0];					
  s.parentNode.insertBefore(t,s)}(window, document,'script',					
  'https://connect.facebook.net/en_US/fbevents.js');					
  fbq('init', '362935884856506');					
  fbq('track', 'PageView');					
  </script>					
  <noscript>					
  <img height="1" width="1" style="display:none"					
  src="https://www.facebook.com/tr?id=362935884856506&ev=PageView&noscript=1"/>					
  </noscript>					
  <!-- End Facebook Pixel Code -->
  

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="task-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="text-center logo">
          <img src="./images/Logo salud Segura max.png" alt="LOGO">
        </div>        
      </div>
      <!-- /.content-header -->
  
      <div class="container">
        <input type="hidden" value="<?php echo $site_url; ?>" id="site_url">
        <input type="hidden" value="<?php echo $userid; ?>" id="user_id">
        <div class="row">
          <div class="col-md-12">
            <div class="user_avatar">
              <div class="avatar_wrapper"><img src="<?php echo $userpic; ?>" alt="User Image"></div>
              <div>
                <p class="title"><?php echo $fname; ?>, seleccioná aquí el tipo de cobertura que necesitás:</p>
                <div class="form-group">
                    <label for="indivi" id="individual" class="form-check-label label_check1">
                      <input id="indivi" value="individual" class="form-check-input" type="radio" name="radio1" checked="">
                      <span class="checkmark"></span>
                      <p>Individual</p>
                    </label>
                    <label for="matrim" id="matrimonial" class="form-check-label">
                      <input id="matrim" value="matrimonial" class="form-check-input" type="radio" name="radio1">
                      <span class="checkmark"></span>
                      <p>Matrimonial</p>
                    </label>
                    <label for="famil" id="familiar" class="form-check-label">
                      <input id="famil" value="familiar" class="form-check-input" type="radio" name="radio1">
                      <span class="checkmark"></span>
                      <p>Familiar</p>
                    </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row section1">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th><img src="./images/PLAN-5.png" alt="PLAN 5"></th>
                  <th><img src="./images/PLAN-6.png" alt="PLAN 6"></th>
                  <th><img src="./images/PLAN-100.png" alt="PLAN 100"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="font14">Cuota mensual</td>
                  <td>&nbsp;</td>
                  <td id="plan_5">$701</td>
                  <td id="plan_6">$825</td>
                  <td id="plan_100">$1.385</td>
                </tr>
                <tr>
                  <td class="font14">Indemnizaciones del plan</td>
                  <td><i class="custom_tooltip fa fa-question-circle" aria-hidden="true" title="Cuanto más completa está la figura, más altas son las sumas de las indemnizaciones. Podés ver ejemplos de sumas más abajo."></i></td>
                  <td><img src="./images/basicas.png" alt="Basicas"><span>Básicas</span></td>
                  <td><img src="./images/moderadas.png" alt="Moderadas"><span>Moderadas</span></td>
                  <td><img src="./images/Extendidas.png" alt="Extendidas"><span>Extendidas</span></td>
                </tr>
                <tr>
                  <td class="font14">Descuentos en medicamentos</td>
                  <td><i class="custom_tooltip fa fa-question-circle" aria-hidden="true" title="Miles de farmacias adheridas en todo el país. Descuentos en más de 2.000 medicamentos de primeras marcas."></i></td>
                  <td class="color2">50%</td>
                  <td class="color2">50%</td>
                  <td class="color2">50%</td>
                </tr>
                <tr>
                  <td class="font14">
                    Consultorio médico virtual
                  </td>
                  <td><i class="custom_tooltip fa fa-question-circle" aria-hidden="true" title="Podés atenderte sin traslados ni esperas con médicos clínicos, pediatras, ginecólogos y obstetras, a través de una app"></i></td>
                  <td class="color2"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                  <td class="color2"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                  <td class="color2"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                </tr>
                <tr>
                  <td class="color7 font14">
                    <table>
                      <tbody>
                        <tr>
                          <td class="color7" style="font-weight:bold;">CLICK PARA CONTRATAR</td>
                          <td style="font-size: 20px;vertical-align: middle;"><i class="fa fa-play color7"></i></td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                  <td></td>
                  <td><a id="plan5_url" href="#"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></td>
                  <td><a id="plan6_url" href="#"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></td>
                  <td><a id="plan100_url" href="#"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row section2">
          <div class="col-md-12">
            <div id="accordion">
              <div class="custom_card">
                <div class="card_header">
                  <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                    <i class="fa fa-plus-circle"></i>
                    Ver más servicios incluidos
                  </a>
                </div>
                <div id="collapseOne" class="collapse" data-parent="#accordion">
                  <div class="card_body">
                    <table class="table table-striped">                      
                      <tbody>
                        <tr>
                          <td>Segunda opinión médica</td>
                          <td><i class="custom_tooltip1 fa fa-question-circle" aria-hidden="true" title="Confirmá diagnósticos importantes con especialistas de alto nivel en Argentina y el exterior."></i></td>
                          <td class="color2"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                          <td class="color2"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                          <td class="color2"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                        </tr>
                        <tr class="check1">
                          <td>Asistencia en viajes</td>
                          <td><i class="custom_tooltip1 fa fa-question-circle" aria-hidden="true" title="Asistencia médica y farmacológica para vos y tu familia cuando están a más de 30 km del hogar."></i></td>
                          <td class="color2"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                          <td class="color2"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                          <td class="color2"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                        </tr>
                        <tr class="check1">
                          <td>Entrega gratuita drogas oncológicas</td>
                          <td><i class="custom_tooltip1 fa fa-question-circle" aria-hidden="true" title="Entregamos en forma gratuita las drogas en las presentaciones y dosis indicadas por el oncólogo"></i></td>
                          <td class="color2"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                          <td class="color2"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                          <td class="color2"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                        </tr>
                        <tr hidden> 
                          <td>Línea médica 24 horas</td>
                          <td><i class="custom_tooltip1 fa fa-question-circle" aria-hidden="true" title="Lorem ipsum dolor sit amet, consectetur xtres adipiscing elit, sed do eiusmod tempor"></i></td>
                          <td class="color2"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                          <td class="color2"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                          <td class="color2"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="custom_card">
                <div class="card_header">
                  <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                    <i class="fa fa-plus-circle"></i>
                    Ver indemnizaciones por internación
                  </a>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                  <div class="card_body">
                    <table class="table table-striped">                      
                      <tbody>
                        <tr>
                          <td>Internación en sala común (por día)</td>
                          <td></td>
                          <td class="color2">$3.920</td>
                          <td class="color2">$4.630</td>
                          <td class="color2">$7.790</td>
                        </tr>
                        <tr>
                          <td>Terapia Intensiva (por día)</td>
                          <td></td>
                          <td class="color2">$7.820</td>
                          <td class="color2">$9.240</td>
                          <td class="color2">$15.530</td>
                        </tr>                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="custom_card">
                <div class="card_header">
                  <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                    <i class="fa fa-plus-circle"></i>
                    Ver indemnizaciones por cirugías (ejemplos)
                  </a>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                  <div class="card_body">
                    <table class="table table-striped">                      
                      <tbody>
                        <tr>
                          <td>Cirugía de rodilla</td>
                          <td></td>
                          <td class="color2">$41.680</td>
                          <td class="color2">$49.250</td>
                          <td class="color2">$82.780</td>
                        </tr>
                        <tr>
                          <td>Cirugía de corazón</td>
                          <td></td>
                          <td class="color2">$273.680</td>
                          <td class="color2">$323.610</td>
                          <td class="color2">$543.850</td>
                        </tr>
                        <tr>
                          <td>Laparoscópica de vesícula</td>
                          <td></td>
                          <td class="color2">$35.560</td>
                          <td class="color2">$42.020</td>
                          <td class="color2">$70.620</td>
                        </tr>
                        <tr>
                          <td>Cirugía cesárea clásica</td>
                          <td></td>
                          <td class="color2">$23.810</td>
                          <td class="color2">$28.140</td>
                          <td class="color2">$47.290</td>
                        </tr>                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="custom_card">
                <div class="card_header">                  
                  <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour">
                    <i class="fa fa-plus-circle"></i>
                    Ver reintegros por prótesis (ejemplos)
                  </a>
                </div>
                <div id="collapseFour" class="collapse" data-parent="#accordion">
                  <div class="card_body">
                    <table class="table table-striped">                      
                      <tbody>
                        <tr>
                          <td>Prótesis de cadera</td>
                          <td></td>
                          <td class="color2">$43.040</td>
                          <td class="color2">$50.860</td>
                          <td class="color2">$85.480</td>
                        </tr>
                        <tr>
                          <td>Prótesis valvular cardíaca</td>
                          <td></td>
                          <td class="color2">$97.810</td>
                          <td class="color2">$115.580</td>
                          <td class="color2">$194.250</td>
                        </tr>
                        <tr>
                          <td>Prótesis stent digestivo</td>
                          <td></td>
                          <td class="color2">$48.900</td>
                          <td class="color2">$57.790</td>
                          <td class="color2">$97.120</td>
                        </tr>                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="custom_card">
                <div class="card_header">                  
                  <a class="card-link collapsed" data-toggle="collapse" href="#collapseFive">
                    <i class="fa fa-plus-circle"></i>
                    Ver indemnizaciones por trasplantes (ejemplos)
                  </a>
                </div>
                <div id="collapseFive" class="collapse" data-parent="#accordion">
                  <div class="card_body">
                    <table class="table table-striped">                      
                      <tbody>
                        <tr>
                          <td>Trasplante de corazón</td>
                          <td></td>
                          <td class="color2">$835.310</td>
                          <td class="color2">$1.020.930</td>
                          <td class="color2">$1.726.310</td>
                        </tr>
                        <tr>
                          <td>Trasplante de riñón</td>
                          <td></td>
                          <td class="color2">$334.120</td>
                          <td class="color2">$408.370</td>
                          <td class="color2">$690.520</td>
                        </tr>
                        <tr>
                          <td>Trasplante de hígado</td>
                          <td></td>
                          <td class="color2">$974.530</td>
                          <td class="color2">$1.191.090</td>
                          <td class="color2">$2.014.030</td>
                        </tr>                        
                        <tr>
                          <td>Trasplante de córnea</td>
                          <td></td>
                          <td class="color2">$125.290</td>
                          <td class="color2">$153.140</td>
                          <td class="color2">$258.940</td>
                        </tr>                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row section3 text-center">
          <div class="col-md-12">
            <input type="button" id="show_modal" class="btn custom_button1" value="Ver condiciones">
          </div>          
        </div>
        <div class="row section4 text-center">
          <div class="col-md-12">
            <a href="https://calendly.com/msar-especialistas/asesor-seguro-de-salud" class="btn custom_button2">Hablar con un asesor</a>
          </div>
        </div>
        <div class="row section4 text-left mt-3">
          <div class="col-md-12">
            <p class="pl-3 font14">&copy; 2020 Mi Seguro .AR</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-wrapper -->

</div>

<div id="wait" class="wait display_none"></div>
<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-sm modal-dialog-scrollable">
    <div class="modal-content">
      <!-- Modal body -->
      <div class="modal-body">
        <h6>Enfermedades preexistentes</h6>
        <p>Son las enfermedades conocidas o diagnosticadas y/o tratadas con anterioridad al inicio de vigencia de la cobertura. Las enfermedades preexistentes y sus derivaciones no están cubiertas en los beneficios.</p>
        <h6>Período de carencia</h6>
        <p>El período de carencia es un plazo de tiempo inicial en el que algunos beneficios no estarán cubiertos. Algunos de los plazos más relevantes son:</br>
          - Cirugías: 60 días iniciales</br>
          - Trasplantes: 120 días iniciales</br>
          - Prótesis: 60 días iniciales</br>
          Estos plazos no aplican si la cirugía, el trasplante o la prótesis se requieren a consecuencia de un accidente.
          Otros beneficios se prestan a partir de los 300 días de vigencia de la cobertura, por ejemplo: operaciones obstétricas, cirugías bariátricas, algunas cirugías cardiovasculares, etc.</p>
        <h6>Renta diaria por internación</h6>
        <p>Esta cobertura indemniza hasta 90 días por año en habitación normal o en terapia intensiva, a partir del tercer día de internación clínica no quirúrgica. Cuando ésta supera los siete días, dicha franquicia de tres días desaparece y se incluye en la indemnización.</p></br>
        <h6>Quiero recibir en mi Email las condiciones de Salud Segura Max para acceder a la lista completa y detallada de riesgos no cubiertos, exclusiones y carencias:</h6>
        <div class="text-center">
          <div class="form-group w-75 text-left">
            <label for="user_email">Ingresar Email</label>
            <input type="email" class="form-control" id="user_email">
          </div>
          <input type="button" class="btn custom_button1 mt-3" value="Continuar" id="modal_close">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="./js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script>

  $(document).ready(function(){
    let user_id = $('#user_id').val()
    let site_url = $('#site_url').val()
    $('#modal_close').click(function(e){
      e.preventDefault()
      let user_email = $('#user_email').val()
      
      if (user_email !== '' && user_id !== '') {
        $.ajax({
          url: './new_flow.php',
          data: {user_email: user_email, user_id: user_id},
          type: 'post',
          beforeSend: function() {
            $('#wait').removeClass('display_none')
          },
          success: function(data){
            $('#wait').addClass('display_none')
            console.log(data)
            $('#myModal').modal('hide');
          }
        })
      }else{
        $('#myModal').modal('hide');
      }
	    
    })
    if($("input[name='radio1']:checked").val() == "individual"){
      $('#plan5_url').attr('href', 'form.php?product_name=plan5_indi&userid='+user_id)
      $('#plan6_url').attr('href', 'form.php?product_name=plan6_indi&userid='+user_id)
      $('#plan100_url').attr('href', 'form.php?product_name=plan100_indi&userid='+user_id)
    }
    if($("input[name='radio1']:checked").val() == "matrimonial"){
      $('#plan5_url').attr('href', 'form.php?product_name=plan5_matr&userid='+user_id)
      $('#plan6_url').attr('href', 'form.php?product_name=plan6_matr&userid='+user_id)
      $('#plan100_url').attr('href', 'form.php?product_name=plan100_matr&userid='+user_id)
    }
    if($("input[name='radio1']:checked").val() == "familiar"){
      $('#plan5_url').attr('href', 'form.php?product_name=plan5_fami&userid='+user_id)
      $('#plan6_url').attr('href', 'form.php?product_name=plan6_fami&userid='+user_id)
      $('#plan100_url').attr('href', 'form.php?product_name=plan100_fami&userid='+user_id)
    }
    let individual_price = ['$701', '$825', '$1.385']
    let matrimonial_price = ['$1.279', '$1.504', '$2.521']
    let familiar_price = ['$1.900', '$2.234', '$3.746']

    $('#plan5_url').click(function(){
      let url = $(this).attr('href');
      if (url.indexOf('plan5_indi') > -1) {
        fbq('track', 'AddToCart', {				
          content_name: 'Sancor',
          content_category: 'SA',
          content_ids: ['Salud Segura Max'],
          content_type: 'Plan 5 B Individual',
          value: 701,
          currency: 'ARS'
        });
      }else if(url.indexOf('plan5_matr') > -1){
        fbq('track', 'AddToCart', {				
          content_name: 'Sancor',
          content_category: 'SA',
          content_ids: ['Salud Segura Max'],
          content_type: 'Plan 5 B Matrimonial',
          value: 1279,
          currency: 'ARS'
        });
      }else if(url.indexOf('plan5_fami') > -1){
        fbq('track', 'AddToCart', {				
          content_name: 'Sancor',
          content_category: 'SA',
          content_ids: ['Salud Segura Max'],
          content_type: 'Plan 5 B Familiar',
          value: 1900,
          currency: 'ARS'
        });
      }
    })
    $('#plan6_url').click(function(){
      let url = $(this).attr('href');
      if (url.indexOf('plan6_indi') > -1) {
        fbq('track', 'AddToCart', {				
          content_name: 'Sancor',
          content_category: 'SA',
          content_ids: ['Salud Segura Max'],
          content_type: 'Plan 6 B Individual',
          value: 825,
          currency: 'ARS'
        });
      }else if(url.indexOf('plan6_matr') > -1){
        fbq('track', 'AddToCart', {				
          content_name: 'Sancor',
          content_category: 'SA',
          content_ids: ['Salud Segura Max'],
          content_type: 'Plan 6 B Matrimonial',
          value: 1504,
          currency: 'ARS'
        });
      }else if(url.indexOf('plan6_fami') > -1){
        fbq('track', 'AddToCart', {				
          content_name: 'Sancor',
          content_category: 'SA',
          content_ids: ['Salud Segura Max'],
          content_type: 'Plan 6 B Familiar',
          value: 2234,
          currency: 'ARS'
        });
      }
      
      
    })
    $('#plan100_url').click(function(){
      
      let url = $(this).attr('href');
      if (url.indexOf('plan100_indi') > -1) {
        fbq('track', 'AddToCart', {				
          content_name: 'Sancor',
          content_category: 'SA',
          content_ids: ['Salud Segura Max'],
          content_type: 'Plan 100 B Individual',
          value: 1385,
          currency: 'ARS'
        });
      }else if(url.indexOf('plan100_matr') > -1){
        fbq('track', 'AddToCart', {				
          content_name: 'Sancor',
          content_category: 'SA',
          content_ids: ['Salud Segura Max'],
          content_type: 'Plan 100 B Matrimonial',
          value: 2521,
          currency: 'ARS'
        });
      }else if(url.indexOf('plan100_fami') > -1){
        fbq('track', 'AddToCart', {				
          content_name: 'Sancor',
          content_category: 'SA',
          content_ids: ['Salud Segura Max'],
          content_type: 'Plan 100 B Familiar',
          value: 3746,
          currency: 'ARS'
        });
      }
      
    })


    var width = ($(window).width() - 250)/2;
    
    let double_flag = true;
    $('.task-wrapper .section2 .card_header a').click(function(){
      let current = $(this)
      if (double_flag) {
        double_flag = false
        $('.task-wrapper .section2 .card_header a').each(function(index, ele){
          $(ele).children().removeClass('fa-minus-circle').addClass('fa-plus-circle')
        })
        if (current.hasClass('collapsed')) {
          current.children().removeClass('fa-plus-circle').addClass('fa-minus-circle')
        }else{
          current.children().removeClass('fa-minus-circle').addClass('fa-plus-circle')
        }
      }
      setTimeout(function(){
        double_flag = true
      }, 300)
    })
    $('#show_modal').click(function(){
      $('#myModal').modal({backdrop: "static"})
      fbq('track', 'ViewContent', {		
      content_name: 'Condiciones SSM',		
      content_category: 'SA',		
      });
    })
    $('.custom_tooltip').on('click', function(){
      $(this).tooltip({ 
        // items: ".custom_tooltip",
        position: {
          my: "center top+40",
          at: "center+75 top",
          using: function( position, feedback ) {
            $( this ).css( position );
            $( "<div>" )
              .addClass( "arrow mark" )
              .addClass( feedback.vertical )
              .addClass( feedback.horizontal )
              .appendTo( this );
          }
        }
        });
      $(this).tooltip("open");
    })
    $('.custom_tooltip1').on('click', function(){
      $(this).tooltip({ 
        // items: ".custom_tooltip",
        position: {
          my: "center top+37",
          at: "center+80 top",
          using: function( position, feedback ) {
            $( this ).css( position );
            $( "<div>" )
              .addClass( "arrow" )
              .addClass( feedback.vertical )
              .addClass( feedback.horizontal )
              .appendTo( this );
          }
        }
        });
      $(this).tooltip("open");
    })
    let check_flag = [true, true, true]
    $('#individual').click(function(){
      $('#plan_5').text(individual_price[0])
      $('#plan_6').text(individual_price[1])
      $('#plan_100').text(individual_price[2])
      $('#plan5_url').attr('href', 'form.php?product_name=plan5_indi&userid='+user_id)
      $('#plan6_url').attr('href', 'form.php?product_name=plan6_indi&userid='+user_id)
      $('#plan100_url').attr('href', 'form.php?product_name=plan100_indi&userid='+user_id)
      if (check_flag[0]) {
        check_flag = [false, true, true]
        fbq('track', 'ViewContent', {	
        content_name: 'Sancor',	
        content_category: 'SA',	
        content_ids: ['Salud Segura Max'],
        content_type: 'Plan Individual',
        });
        
      }

    })
    $('#matrimonial').click(function(){
      $('#plan_5').text(matrimonial_price[0])
      $('#plan_6').text(matrimonial_price[1])
      $('#plan_100').text(matrimonial_price[2])
      $('#plan5_url').attr('href', 'form.php?product_name=plan5_matr&userid='+user_id)
      $('#plan6_url').attr('href', 'form.php?product_name=plan6_matr&userid='+user_id)
      $('#plan100_url').attr('href', 'form.php?product_name=plan100_matr&userid='+user_id)
      if(check_flag[1]) {
        check_flag = [true, false, true]
        fbq('track', 'ViewContent', {	
        content_name: 'Sancor',	
        content_category: 'SA',	
        content_ids: ['Salud Segura Max'],
        content_type: 'Plan Matrimonial',
        });

      }

    })
    $('#familiar').click(function(){
      $('#plan_5').text(familiar_price[0])
      $('#plan_6').text(familiar_price[1])
      $('#plan_100').text(familiar_price[2])
      $('#plan5_url').attr('href', 'form.php?product_name=plan5_fami&userid='+user_id)
      $('#plan6_url').attr('href', 'form.php?product_name=plan6_fami&userid='+user_id)
      $('#plan100_url').attr('href', 'form.php?product_name=plan100_fami&userid='+user_id)
      if(check_flag[2]) {
        check_flag = [true, true, false]
        fbq('track', 'ViewContent', {	
        content_name: 'Sancor',	
        content_category: 'SA',	
        content_ids: ['Salud Segura Max'],
        content_type: 'Terceros Familiar',
        });	
      }
    })

  })
</script>

</body>
</html>
