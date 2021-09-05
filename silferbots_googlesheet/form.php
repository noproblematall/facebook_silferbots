<?php
    $product_name = '';
    $price = '';
    $kind = '';
    $email = '';
    $user_id = '';
    if (isset($_GET['userid']) && !empty($_GET['userid'])){
        $user_id = $_GET['userid'];
        if (isset($_GET['product_name']) && !empty($_GET['product_name'])) {
            $product_name = $_GET['product_name'];
            switch ($product_name) {
                case "plan5_indi":
                    $product_name = 'Plan 5 B Individual';
                    $price = '701';
                    $kind = 'individual';
                break;
                case "plan6_indi":
                    $product_name = 'Plan 6 B Individual';
                    $price = '825';
                    $kind = 'individual';
                break;
                case "plan100_indi":
                    $product_name = 'Plan 100 B Individual';
                    $price = '1385';
                    $kind = 'individual';
                break;
                case "plan5_matr":
                    $product_name = 'Plan 5 B Matrimonial';
                    $price = '1279';
                    $kind = 'matrimonial';
                break;
                case "plan6_matr":
                    $product_name = 'Plan 6 B Matrimonial';
                    $price = '1504';
                    $kind = 'matrimonial';
                break;
                case "plan100_matr":
                    $product_name = 'Plan 100 B Matrimonial';
                    $price = '2521';
                    $kind = 'matrimonial';
                break;
                case "plan5_fami":
                    $product_name = 'Plan 5 B Familiar';
                    $price = '1900';
                    $kind = 'familiar';
                break;
                case "plan6_fami":
                    $product_name = 'Plan 6 B Familiar';
                    $price = '2234';
                    $kind = 'familiar';
                break;
                case "plan100_fami":
                    $product_name = 'Plan 100 B Familiar';
                    $price = '3746';
                    $kind = 'familiar';
                break;
                default:
                //   header("Location: /");
            }
        }else{
            // header("Location: /");
        }

        if (isset($_GET['email']) && !empty($_GET['email'])){
            $email = $_GET['email'];
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Completá los datos</title>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/jquery-ui.min.css">
    <link rel="stylesheet" href="./css/select2.min.css">
    <link rel="stylesheet" href="./jquery_toast/jquery.toast.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./css/adminlte.min.css">
    <link rel="stylesheet" href="./css/form.css">

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
<body>    
    <div class="container custom_container">
        <input type="hidden" id="product_kind" value="<?php echo $kind; ?>">
        <!-- <div>
            <h5 class="title">Datos del Titular</h5>
            <h5 class="float-right listo">Listo</h5>
        </div>
        <div class="clearfix"></div> -->
        <div class="form_container">
            <form action="" id="wizard">
                <input type="hidden" name="user_id" id="user_id"  value="<?php echo $user_id; ?>">
                <input type="hidden" name="product_name" id="product_name" value="<?php echo $product_name; ?>">
                <input type="hidden" name="product_price" id="product_price" value="<?php echo $price; ?>">
                <h2></h2>
                <section class="section1">
                    <div class="form-group">
                        <label for="user_fname">Nombres</label>
                        <input type="text" class="form-control" id="user_fname" name="user_fname" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="user_lname">Apellido</label>
                        <input type="text" class="form-control" id="user_lname" name="user_lname" required autocomplete="off">
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="dni">DNI</label>
                            <input type="tel" class="form-control" id="dni" name="dni" required autocomplete="off">
                        </div>
                        <div class="form-group col">
                            <label for="birthday">Fecha de nacimiento</label>
                            <input type="tel" class="form-control" id="birthday" name="birthday" placeholder="dd/mm/yyyy" required autocomplete="off" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user_email">Email(para recibir tu seguro de salud)</label>
                        <input type="email" class="form-control" id="user_email" name="user_email" value="<?php echo $email; ?>" required autocomplete="off">
                    </div>
                    <!-- <div class="form-row">
                        <div class="form-group col">
                            <label for="area_code">Cod.de Área</label>
                            <input type="tel" class="form-control" name="area_code" id="area_code" required>
                        </div>
                        <div class="form-group col">
                            <label for="phone_number">Teléfono celular</label>
                            <input type="tel" class="form-control" name="phone_number" id="phone_number" required>
                        </div>
                    </div> -->
                    <div class="form-row">
                        <div class="form-group col-5">
                            <label for="area_code">Cod. de Área</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">0</span>
                                </div>
                                <input type="tel" class="form-control" name="area_code" id="area_code" required autocomplete="off">
                            </div>                            
                        </div>
                        <div class="form-group col-7">
                            <label for="phone_numnber">Teléfono celular</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" style="padding-left: 8px;padding-right: 8px;">15</span>
                                </div>
                                <input type="tel" class="form-control" name="phone_numnber" id="phone_numnber" required autocomplete="off">
                            </div>   
                        </div>
                    </div>
                </section>
                <h2></h2>
                <section>
                    <div class="form-group">
                        <label for="street">Calle</label>
                        <input type="text" class="form-control" name="street" id="street" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="number">Número</label>
                        <input type="text" class="form-control" name="number" id="number" required autocomplete="off">
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="floor">Piso</label>
                            <input type="text" class="form-control" name="floor" id="floor" autocomplete="off">
                        </div>
                        <div class="form-group col">
                            <label for="department">Departamento</label>
                            <input type="text" class="form-control" name="department" id="department" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="location">Localidad</label>
                        <input type="text" class="form-control" name="location" id="location" required autocomplete="off">
                    </div>
                    
                    <div class="input-group mb-3">
                        <label for="province">Provincia</label>
                        <select class="form-control select2" name="province" id="province" style="width: 100%;">
                            <option value=""></option>
                            <option value="Buenos Aires">Buenos Aires</option>
                            <option value="Córdoba">Córdoba</option>
                            <option value="Catamara">Catamarca</option>
                            <option value="Chaco">Chaco</option>
                            <option value="Chubut">Chubut</option>
                            <option value="Ciudad Autónoma de Buenos Aires">Ciudad Autónoma de Buenos Aires</option>
                            <option value="Corrientes">Corrientes</option>
                            <option value="Entre Ríos">Entre Ríos</option>
                            <option value="Formosa">Formosa</option>
                            <option value="Jujuy">Jujuy</option>
                            <option value="La Pampa">La Pampa</option>
                            <option value="La Rioja">La Rioja</option>
                            <option value="Mendoza">Mendoza</option>
                            <option value="Misiones">Misiones</option>
                            <option value="Neuquén">Neuquén</option>
                            <option value="Río Negro">Río Negro</option>
                            <option value="Salta">Salta</option>
                            <option value="San Juan">San Juan</option>
                            <option value="San Luis">San Luis</option>
                            <option value="Santa Cruz">Santa Cruz</option>
                            <option value="Santa Fe">Santa Fe</option>
                            <option value="Santiago del Estero">Santiago del Estero</option>
                            <option value="Tierra del Fuego">Tierra del Fuego</option>
                            <option value="Tucumán">Tucumán</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="postal_code">Código Postal</label>
                        <input type="tel" class="form-control" id="postal_code" name="postal_code" required autocomplete="off">
                    </div>
                </section>
                <?php if($kind !== 'individual'):?>
                <h2></h2>
                <section>
                    <p id="family_error" class="display_none">Ya ha seleccionado un cónyuge o conviviente.</p>
                    <p id="max_error" class="display_none">Este es el máximo número de beneficiarios admitidos en este medio</p>
                    <p id="pass_check" class="display_none">Para sumar un beneficiario, complete todos los campos y presione "Agregar beneficiario"</p>
                    <div class="benefi">
                        <ul>
                            
                        </ul>
                    </div>
                    <div class="form-group">
                        <label for="benefi_fname">Nombres</label>
                        <input type="text" class="form-control" id="benefi_fname" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="benefi_lname">Apellido</label>
                        <input type="text" class="form-control" id="benefi_lname" autocomplete="off">
                    </div>                    
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="benefi_dni">DNI</label>
                            <input type="tel" class="form-control" id="benefi_dni" placeholder="" autocomplete="off">
                        </div>
                        <div class="form-group col">
                            <label for="benefi_birth">Fecha de nacimiento</label>
                            <input type="tel" class="form-control" id="benefi_birth" placeholder="dd/mm/yyyy" autocomplete="off">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <label for="relation">Relación con el titular</label>
                        <select name="" class="form-control select2" style="width: 100%;" id="relation">
                            <?php if($kind == 'familiar'): ?>
                            <option value=""></option>
                            <?php endif;?>
                            <option value="partner">Cónyuge/conviviente</option>
                            <?php if($kind == 'familiar'): ?>
                            <option value="son">Hija/hijo</option>
                            <?php endif; ?>
                        </select>
                    </div>
                    
                </section>
                <?php endif; ?>
                <h2></h2>
                <section>
                    <div class="form-group">
                        <label for="indivi" id="credit_card" class="kind">
                            <input id="indivi" type="radio" name="radio1" value="credit" class="Tarjeta de crédito" checked="" autocomplete="off">
                            <span class="checkmark"></span>
                            <p>Tarjeta de crédito</p>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="matrim" id="debit_card" class="kind">
                            <input id="matrim" type="radio" value="debit" name="radio1" class="CBU" autocomplete="off">
                            <span class="checkmark"></span>
                            <p>Débito en cuenta - CBU</p>
                        </label>
                    </div>
                    <div hidden class="form-group">
                        <label for="famil" id="cash" class="kind">
                            <input id="famil" type="radio" value="cash" name="radio1" class="Efectivo" autocomplete="off">
                            <span class="checkmark"></span>
                            <p>Efectivo (Pago Fácil y otros)</p>
                        </label>
                    </div>
                    <div class="credit card_info">
                        <div class="input-group mb-3">
                            <label for="bank_card">Tarjeta</label>
                            <select name="bank_card" class="form-control select2" id="bank_card" style="width: 100%;" required>
                                <option value=""></option>
                                <option value="Visa">Visa</option>
                                <option value="Mastercard">Mastercard</option>
                                <option value="American Express">American Express</option>
                                <option value="Tarjeta Naranja">Tarjeta Naranja</option>
                                <option value="Cabal">Cabal</option>
                                <option value="Carta Franca">Carta Franca</option>
                                <option value="Diners Club">Diners Club</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="card_number">Número de tarjeta</label>
                            <input type="tel" class="form-control" id="card_number" name="card_number" required disabled autocomplete="off">
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="finish_month">Mes vencimiento</label>
                                <input type="tel" class="form-control" id="finish_month" name="finish_month" placeholder="mm" required autocomplete="off">
                            </div>
                            <div class="form-group col">
                                <label for="finish_year">Año vencimiento</label>
                                <input type="tel" class="form-control" id="finish_year" name="finish_year" placeholder="yy" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="debit card_info display_none">
                        <div class="form-group">
                            <label for="cbu_number">Número de CBU</label>
                            <input type="tel" class="form-control" id="cbu_number" name="cbu_number" required autocomplete="off" autocomplete="off">
                        </div>
                    </div>
                    <div class="cash card_info display_none">
                        <h5>Importante</h5>
                        <p>El titular y los beneficiarios mantendrán esta cobertura solo si los pagos se encuentran al día. La forma más simple de asegurar el pago en cada vencimiento es mediante medios de pago automáticos. Por ello te recomendamos que, si es posible, selecciones como medio de pago tarjeta de crédito o CBU.</p>
                    </div>
                </section>
                <?php if($kind !== 'individual'): ?>
                <div class="text-center">
                    <input type="button" id="add_someone" class="btn custom_button3 display_none" value="Agregar beneficiario">
                </div>
                <?php endif; ?>
                <div class="text-center">
                    <input type="button" id="form_next" class="btn custom_button1" value="Continuar">
                </div>
                <div class="text-center">
                    <input type="button" id="form_finish" class="btn custom_button2 display_none" value="Finalizar">
                </div>
            </form>
            <p class="" id="copy_right">&copy; 2020 Mi Seguro .AR</p>
        </div>
    </div>
    <div id="wait" class="wait display_none"></div>

    <div class="modal fade" id="form_madal">
        <div class="modal-dialog modal-sm modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
            <!-- Modal body -->
                <div class="modal-body">
                    <h3 class="text-center">Enviaremos una confirmación al email <span id="modal_eamil"></span> a la brevedad.</h3>
                    <div class="text-center">                        
                    <a href="https://www.miseguro.ar" class="btn custom_button2">Cerrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="./js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <!-- <script src="./js/bootstrap.bundle.min.js"></script> -->
    <script src="./js/jquery.validate.min.js"></script>
    <script src="./js/jquery.steps.js"></script>
    <script src="./js/cleave.min.js"></script>
    <script src="./js/jquery.mask.min.js"></script>
    <script src="./js/select2.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/custom.js"></script>
    
</body>
</html>