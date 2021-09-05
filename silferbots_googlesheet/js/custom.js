$(function(){
    let product_kind = $('#product_kind').val()
    let product_name = $('#product_name').val()
    let product_price = $('#product_price').val()
    let province_flag = true;
    let member_check_flag = true;
    $("#wizard").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,
        enablePagination: false,
        onStepChanging: function (event, currentIndex, newIndex)
        {
            if(currentIndex == 0){
                $('#wizard').validate({
                    // ignore: null,
                    rules: {
                        user_fname: {
                            required: true,
                        },
                        user_lname: {
                            required: true,
                        },
                        dni: {
                            required: true,
                            digits: true,
                            minlength: 7,
                            maxlength: 8,
                        },
                        birthday: {
                            required: true,
                            minlength: 10
                        },
                        user_email: {
                            required: true,
                        },
                        area_code: {
                            digits: true,
                            minlength: 2,
                            maxlength: 4,
                        },
                        phone_numnber: {
                            digits: true,
                            minlength: 6,
                            maxlength: 8,
                        },
                        card_number: {
                            // digits: true,
                            minlength: function(){
                                if($('#bank_card').val() == 'American Express' || $('#bank_card').val() == 'Diners Club'){                                    
                                    return 16;
                                }else{
                                    return 19;
                                }
                            },
                        },
                        cbu_number: {
                            minlength: 22,
                        },
                        postal_code: {
                            digits: true,
                            minlength: 4,
                            maxlength: 4,
                        },
                        // province: {
                        //     required: true,
                        // },
                    }
                })
                if($('#wizard').valid()){
                    fbq('track', 'InitiateCheckout', {
                    content_name: 'datos del titular',	
                    content_category: 'SA',
                    content_ids: ['Sancor', 'SSM'],
                    content_type: product_name,
		            com_recurrente: product_price * 0.2,
                    value: product_price * 2,
                    currency: 'ARS'	
                    });
                }
            }else if(currentIndex == 1){
                if ($('#province').val() == '') {
                    province_flag = false;
                    $('#province + span').addClass('error')
                }else{
                    province_flag = true;
                    $('#province + span').removeClass('error')
                }
                $('#wizard').validate({
                    rules: {
                        number: {
                            required: true,
                        },
                        location: {
                            required: true,
                        },
                        // province: {
                        //     required: true,
                        // },
                        postal_code: {
                            required: true,
                        },
                    }
                })

                if($('#wizard').valid()){
                    fbq('trackCustom', 'Checkout_domicilio', {		
                    content_name: 'datos del domicilio',		
                    content_category: 'SA',		
                    content_ids: ['Sancor', 'SSM'],		
                    content_type: product_name,	
		            com_recurrente: product_price * 0.2,	
                    value: product_price * 2,		
                    currency: 'ARS'		
                    });
                }
                console.log('hey, this is domicilio')

            }else if(currentIndex == 2 && product_kind !== 'individual'){
                console.log('hey, here is beneficiarios')
                fbq('trackCustom', 'Checkout_beneficiarios', {		
                content_name: 'datos del domicilio',		
                content_category: 'SA',		
                content_ids: ['Sancor', 'SSM'],		
                content_type: product_name,
		        com_recurrente: product_price * 0.2,		
                value: product_price * 2,		
                currency: 'ARS'
                });	
                	
                if ($('#benefi_fname').val() !== "" || $('#benefi_lname').val() !== "") {
                    member_check_flag = false;
                    $('#pass_check').removeClass('display_none')
                }else{
                    member_check_flag = true;
                    $('#pass_check').addClass('display_none')
                }
            }
            if ($('#wizard').valid() && province_flag && member_check_flag) {
                console.log('Valid')
                let index = newIndex +1;
                $('.wizard > .steps li:nth-child('+ index +')').addClass('checked');
                $('.wizard > .steps li:nth-child('+ index +')').prevAll().addClass('checked');
                $('.wizard > .steps li:nth-child('+ index +')').nextAll().removeClass('checked');
                if (product_kind !== 'individual') {
                    if (index == 3) {
                        $('#add_someone').removeClass('display_none')
                    }else{
                        $('#add_someone').addClass('display_none')
                    }
                    if(index == 4){
                        $('#form_finish').removeClass('display_none')
                        $('#form_finish').addClass('final_button')
                        $('#form_next').addClass('display_none')
                    }else{
                        $('#form_finish').removeClass('final_button')
                        $('#form_next').removeClass('display_none')
                    }
                }else{
                    if(index == 3){
                        $('#form_finish').removeClass('display_none')
                        $('#form_finish').addClass('final_button')
                        $('#form_next').addClass('display_none')
                    }else{
                        $('#form_finish').removeClass('final_button')
                        $('#form_next').removeClass('display_none')
                    }
                }

            }
            return $('#wizard').valid() && province_flag && member_check_flag;
        },
        
        onFinishing: function (event, currentIndex)
        {
            
            console.log('finished')
            $('#wizard').validate({
                rules: {
                    bank_card: {
                        required: {
                            depends: function(element) {
                                return $("#indivi").is(":checked");
                            }
                        },
                    },
                    card_number: {
                        required: {
                            depends: function(element) {
                                return $("#indivi").is(":checked");
                            }
                        },
                        
                    },
                    finish_month: {
                        required: {
                            depends: function(element) {
                                return $("#indivi").is(":checked");
                            }
                        },
                    },
                    finish_year: {
                        required: {
                            depends: function(element) {
                                return $("#indivi").is(":checked");
                            }
                        },
                    },
                    cbu_number: {
                        required: {
                            depends: function(element) {
                                return $("#matrim").is(":checked");
                            }
                        },
                    },
                }
            });
            fbq('trackCustom', 'AddPaymentInfo', {
                content_name: 'datos del domicilio',
                content_category: 'SA',
                content_ids: ['Sancor', 'SSM'],
                content_type: product_name,
	 	        com_recurrente: product_price * 0.2,
                value: product_price * 2,		
                currency: 'ARS'
            });
            return $('#wizard').valid();
        },
        onFinished: function (event, currentIndex)
        {
            let data = $('#wizard').serializeArray()
            if(member_list.length > 0){
                for (let i = 0; i < member_list.length; i++) {
                    data.push({
                        name: 'fname'+i,
                        value: member_list[i].fname
                    });
                    data.push({
                        name: 'lname'+i,
                        value: member_list[i].lname
                    });
                    data.push({
                        name: 'dni'+i,
                        value: member_list[i].dni
                    });
                    data.push({
                        name: 'birthday'+i,
                        value: member_list[i].birthday
                    });
                }
            }
            let payment_type = $('input[name="radio1"]:checked').val();
            if(payment_type == 'credit'){
                data.push({
                    name: 'payment_type',
                    value: $('#bank_card').val()
                })
            }else if(payment_type == 'debit'){
                data.push({
                    name: 'payment_type',
                    value: 'CBU'
                })
            }else if(payment_type == 'cash'){
                data.push({
                    name: 'payment_type',
                    value: 'Efectivo'
                })
            }
            fbq('track', 'Purchase', {
                content_name: 'venta digital',
                content_category: 'SA',
                content_ids: ['Sancor', 'SSM', $("input[name='radio1']:checked").attr('class')],
                content_type: product_name,
		        com_recurrente: product_price * 0.2,
                value: product_price * 2,
                currency: 'ARS'
            });
            $('#modal_eamil').text($('#user_email').val())
            $.ajax({
                url: '/ssmweb/api.php',
                data: $.param(data),
                type: 'post',
                beforeSend: function() {
                    $('#wait').removeClass('display_none')
                    $('#form_finish').val('Procesando...')
                },
                success: function(data){
                    $('#form_madal').modal({backdrop: "static"})
                }
            })
            
        }
    });
    function to_unix(date){
        let day = date.slice(0,2)
        let month = date.slice(3,5)
        let year = date.slice(6)
        let full = year + '-' + month + '-' + day;
        return new Date(full).getTime() / 1000;
    }
    $('#bank_card').change(function(){
        if($(this).val() !== ""){
            $('select#bank_card + label').removeClass('error');
        }else{
            $('select#bank_card + label').addClass('error');
        }
    })

    if(product_kind == "individual"){
        $('.wizard > .steps li:nth-child(1) a').append('<span>Titular&nbsp;</span>')
        $('.wizard > .steps li:nth-child(2) a').append('<span>Domicilio&nbsp;</span>')
        $('.wizard > .steps li:nth-child(3) a').append('<span>Pagos&nbsp;</span>')
        $('.wizard > .steps li:nth-child(3) a span:last-child').css('margin-left', '-10px')
    }else{
        $('.wizard > .steps li:nth-child(1) a').append('<span>Titular&nbsp;</span>')
        $('.wizard > .steps li:nth-child(2) a').append('<span>Domicilio&nbsp;</span>')
        $('.wizard > .steps li:nth-child(3) a').append('<span>Beneficiarios&nbsp;</span>')
        $('.wizard > .steps li:nth-child(4) a').append('<span>Pagos&nbsp;</span>')

    }
    

    $('#form_next').click(function(){
        $("#wizard").steps('next');
    })
    $('#form_finish').click(function(){
        $("#wizard").steps('finish');	    
        return false;
    })
    
    let full_year = new Date().getFullYear();
    full_year = full_year.toString().slice(2);
    
    new Cleave('#birthday', {
        date: true,
        dateMax: '2050-01-01',
        datePattern: ['d', 'm', 'Y']
    });
    if(product_kind !== 'individual'){
        new Cleave('#benefi_dni', {
            
        });
        new Cleave('#benefi_birth', {
            date: true,
            dateMax: '2050-01-01',
            datePattern: ['d', 'm', 'Y']
        });
    }
    new Cleave('#finish_month', {
        date: true,
        datePattern: ['m']
    });

    $("body").on('click',".kind",function (e){
        e.stopPropagation();
        let value = $(this).attr('id')
        $('.card_info').addClass('display_none')
        if (value == 'credit_card') {
            $('.credit').removeClass('display_none')
        } else if(value == 'debit_card'){
            $('.debit').removeClass('display_none')
        } else if(value == 'cash'){
            $('.cash').removeClass('display_none')
        }
    });
    
    let options =  {
        onKeyPress: function(cep, event, currentField, options){
            if(cep.length == 2){
                if(cep < 20){
                    currentField.val(full_year)
                }else if(cep > 45){
                    currentField.val(45)
                }
            }
        },
    };
    $('#finish_year').mask('00', options)
    $('#bank_card').change(function(){
        let value = $(this).val()
        $('#card_number').val('')
        if(value == ''){
            $('#card_number').attr('disabled', 'disabled')
        }else if (value == 'American Express' || value == 'Diners Club') {
            $('#card_number').removeAttr('disabled')
            $('#card_number').mask('0000 000000 0000')
        }else{
            $('#card_number').removeAttr('disabled')
            $('#card_number').mask('0000 0000 0000 0000')
        }
    })
    $('#cbu_number').mask('0000000000000000000000')

    // ------------- Member List -------------------

    var member_list = [];
    let member_edit_flag = false;
    let member_edit_index = NaN
    let member_flag = true;
    let partner_flag = true;
    if(product_kind == 'individual'){
        member_flag = false;
    }
    $('#add_someone').click(function(){
        $('#pass_check').addClass('display_none')
        $('#max_error').addClass('display_none')
        $('#family_error').addClass('display_none')
        if(!member_flag && !member_edit_flag){
            $('#max_error').removeClass('display_none')
            return;
        }
        if(!partner_flag && $('#relation').val() == 'partner'){
            $('#family_error').removeClass('display_none');
            $('#relation').addClass('error')
            return;
        }
        if ($('#benefi_fname').val() == '') {
            $('#benefi_fname').addClass('error')
            return;
        }else{
            $('#benefi_fname').removeClass('error')
        }
        if ($('#benefi_lname').val() == '') {
            $('#benefi_lname').addClass('error')
            return;
        }else{
            $('#benefi_lname').removeClass('error')
        }
        if ($('#benefi_dni').val() == '') {
            $('#benefi_dni').addClass('error')
            return;
        }else if($('#benefi_dni').val().length < 7 || $('#benefi_dni').val().length > 8){
            $('#benefi_dni').addClass('error')
            return;
        }else{
            $('#benefi_dni').removeClass('error')
        }
        if ($('#benefi_birth').val() == '') {
            $('#benefi_birth').addClass('error')
            return;
        }else if($('#benefi_birth').val().length !== 10){
            $('#benefi_birth').addClass('error')
            return;
        }else{
            $('#benefi_birth').removeClass('error')
        }
        if ($('#relation').val() == '') {
            $('#relation').addClass('error')
            return;
        }else{
            if(product_kind == 'familiar'){
                if($('#relation').val() == 'partner'){
                    partner_flag = false;
                }
            }
            $('#relation').removeClass('error')
            $('#family_error').addClass('display_none');
        }
        if(!member_edit_flag){
            member_edit_flag = false
            let member = {
                fname: $('#benefi_fname').val(),
                lname: $('#benefi_lname').val(),
                dni: $('#benefi_dni').val(),
                birthday: $('#benefi_birth').val(),
                relation: $('#relation').val(),
            }
            member_list.push(member);
            $('.benefi ul').append(`
                <li>
                    <span class="display_name">${member.fname}&nbsp${member.lname}</span>&nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa fa-pencil member_edit"></i></span>&nbsp;&nbsp;&nbsp;&nbsp;<span><i class="fa fa-times-circle-o member_del"></i></span>
                </li>
            `)
        }else{
            member_edit_flag = false;
            member_list[member_edit_index].fname = $('#benefi_fname').val()
            member_list[member_edit_index].lname = $('#benefi_lname').val()
            member_list[member_edit_index].dni = $('#benefi_dni').val()
            member_list[member_edit_index].birthday = $('#benefi_birth').val()
            member_list[member_edit_index].relation = $('#relation').val()
            $('.benefi ul li:nth-child('+ (member_edit_index + 1) +') span.display_name').text($('#benefi_fname').val() + ' ' + $('#benefi_lname').val())

            member_edit_index = NaN;

        }
        $('#benefi_fname').val('')
        $('#benefi_lname').val('')
        $('#benefi_dni').val('')
        $('#benefi_birth').val('')
        $('#relation').val('').trigger('change');
        console.log(member_list)
        if(product_kind == 'matrimonial'){
            if (member_list.length >= 1) {
                member_flag = false;
            }
        }
        if(product_kind == 'familiar'){
            if (member_list.length >= 9) {
                member_flag = false;
            }
        }
    })
    
    $('body').on('click', '.member_del', function(){
        let current_index = $(this).parent().parent().index()
        $(this).parent().parent().remove()
        member_list.splice(current_index, 1)
        if(product_kind == 'familiar'){
            if (member_list.length < 9) {
                member_flag = true;
                $('#max_error').addClass('display_none')
            }
        }
        console.log(member_list)
    })
    $('body').on('click', '.member_edit', function(){
        member_edit_flag = true;
        let current_index = $(this).parent().parent().index()
        let current_member = member_list[current_index]
        $('#benefi_fname').val(current_member.fname)
        $('#benefi_lname').val(current_member.lname)
        $('#benefi_dni').val(current_member.dni)
        $('#benefi_birth').val(current_member.birthday)
        $('#relation').val(current_member.relation).trigger('change');
        member_edit_index = current_index
    })
    
    $('#bank_card').select2({
        shouldFocusInput: function() {
        return true;
      }
    })
    $('#province').select2({
        shouldFocusInput: function() {
        return true;
      }
    })
    if (product_kind !== 'individual') {
        $('#relation').select2({
            minimumResultsForSearch: -1
        })
    }
    $('.select2').click(function(){
        $('.select2-search__field').focus()
      })


    // if (localStorage.getItem("user_email") !== null) {
    //     $('#user_email').val(localStorage.getItem("user_email"))
    // }
    // if (localStorage.getItem("user_id") !== null) {
    //     $('#user_id').val(localStorage.getItem("user_id"))
    // }

})