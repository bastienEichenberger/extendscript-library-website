/**
 * This file is part of the JsFormValidationBundle.
 *
 * (c) Abhoryo <abhoryo@free.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


if (jsfv == undefined) {
    var jsfv = [];
}

jsfv['fos_user_registration_form'] = new function () {
    var self = this;
    function getComputeMessage(key, placeholders, number) {
        Translator.placeHolderPrefix = '{{ ';
        Translator.placeHolderSuffix = ' }}';
        // Default translations
        if (!Translator.has('validators:'+key)) {
            Translator.add('validators:'+key, key);
        }

        return Translator.get('validators:'+key, placeholders, number) ||
               Translator.get('validators:'+key, placeholders);
    }

    function isNotDefined(value) {
        return (typeof(value) == 'undefined' || null === value || '' === value);
    }

    function checkError(field, checkFunction, parameters, value) { 
        
        field = self.id(field);
        // Remove old errors of the field
        self.removeErrors(field);        // Check the value
        errorMessage = checkFunction((value === undefined ? field : value), parameters);
        
        if (errorMessage != true) {
        self.addError(field, errorMessage);
            return false;
        }

        return true;
    }



function NotBlank(field, params)
{
    var value = field && field.nodeName ? $(field).val() : field;

    if (isNotDefined(value)) {
        return getComputeMessage(params.message);
    }

    return true;
}

function Email(field, params)
{
    var value = field && field.nodeName ? $(field).val() : field;

    if (isNotDefined(value)) {
        return true;
    }

    value = String(value);
    var pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})$/;

    if ( pattern.test(value) ) {
        if (params && params.checkMX && field.nodeName) {
            //TODO This part is compartible only with jquery
            var cache, cacheindex = 'm' + value + '';
            cache = $(field).data('_checkMXCache');
            if (!cache) cache = {};
            if (cache[cacheindex] != undefined) {
                if (cache[cacheindex] === false) {
                    return getComputeMessage(params.message);
                } else return true;
            }
            $.ajax({
                type: 'POST',
                url: Routing.generate('jlfa_js_form_validation_checkmx', { '_locale' : 'fr' } ),
                data: {address: value.replace(new RegExp("^.*@"), "")},
                success: function(data, textStatus) {
                    if (data.status && data.status == 'ok') {
                        cache[cacheindex] = data.result;
                        $(field).data('_checkMXCache', cache);
                        if (!cache[cacheindex]) {
                            checkError($(field).attr('id'), Email, params);
                        }
                    }
                    },
                dataType: 'json'
            });
            }
        return true;
    }

    return getComputeMessage(params.message);
}

/**
 * @author   Vitaliy Demidov   <zend@i.ua>
 */
function UniqueEntity(field, params)
{
    var cache;
    var value = field && field.nodeName ? $(field).val() : field; 
    var cacheindex = 'm' + value + '';
    var locale = Translator.locale;
    
    
    var url = Routing.generate(
                'jlfa_js_form_validation_unique_entity', 
                { '_locale' : locale }
            );
    
    if (params && params.fields && field.nodeName) {
        //TODO This part is compartible only with jquery
        cache = $(field).data('_uniqueEntityCache');
        if (!cache) cache = {};
        if (cache[cacheindex] !== undefined) {
            if (cache[cacheindex] === false) {
                return getComputeMessage(params.message);
            } else return true;
        }
        
        $.ajax({
            type: 'POST',
            url:  url,
            data: {
                'entity': params.entity,
                'target': params.fields,
                'value': value,
                'ignore': params.identifier_field_id ? self.id(params.identifier_field_id).value : ''
            },
            success: function(data, textStatus) {
                if (data.status && data.status == 'ok') {
                    cache[cacheindex] = data.isUnique;
                    $(field).data('_uniqueEntityCache', cache);
                    if (!cache[cacheindex]) {
                        checkError($(field).attr('id'), UniqueEntity, params);
                    }
                }
            },
            dataType: 'json'
       });
    }
    return true;
}

function IsAdresseValid(field, params)
{
    var value = field && field.nodeName ? $(field).val() : field;
    
    var cache, cacheindex = 'm' + value + '';
    if (params && field.nodeName) {
            cache = $(field).data('_adresseValidCache');
            if (!cache) cache = {};
            
            if (cache[cacheindex] !== undefined) {
                if (cache[cacheindex] === false) {
                    return getComputeMessage(params.message);
                } else {
                    return true;
                }
            }

        $(field).trigger("geocode");
        
        
        // improve this part
        // @todo
        // set to error
        $(field).bind("geocode:error", function(event, result) {
            if (!cache) cache = {};
            
            if (cache[cacheindex] != undefined) {
                if (cache[cacheindex] === false) {
                    return getComputeMessage(params.message);
                } else return true;
            }
            cache[cacheindex] = false;
            $(field).data('_adresseValidCache', cache);
            checkError($(field).attr('id'), IsAdresseValid, params);
        });
        // set to ok
        $(field).bind("geocode:result", function(event, result) {
            if (!cache) cache = {};
            
            if (cache[cacheindex] != undefined) {
                if (cache[cacheindex] === false) {
                    return getComputeMessage(params.message);
                } else return true;
            }
            cache[cacheindex] = true;
            $(field).data('_adresseValidCache', cache);
            checkError($(field).attr('id'), IsAdresseValid, params);
        });
    }
    return true;
}

function Repeated(field, params)
{
    var value = field && field.nodeName ? $(field).val() : field;

    first = document.getElementById(params.first_name).value;
    second = document.getElementById(params.second_name).value;

    if (first !== second) {
        return getComputeMessage(params.invalid_message, params.invalid_message_parameters);
    }

    return true;
}


    this.id = function (id) {
        return document.getElementById(id);
    };
    this.removeErrors = function (field) {
        // override rules
        $(field).closest('.control-group').removeClass('has-error').addClass('has-success');
        
        if ($(field).next().is('.input-group-btn')) {
            $(field).parent().siblings('label.error').remove();
        } else {
            $(field).siblings('label.error').remove();
        }
    };
    this.addError = function (field, errorMessage) {
        // override rules
        var error_label = $('<label generated="true" class="error">'+ errorMessage +'</label>');
        // button with span after input
        if ($(field).next().is('.input-group-btn')) {
            error_label.insertAfter($(field).parent());
        } else {
            error_label.insertAfter($(field));
        }
        $(field).closest('.control-group').removeClass('has-success').addClass('has-error');
    };
    this.onEvent = function (field, eventType, handler) {
        if (typeof(field) == 'string') {
            field = self.id(field);
        }
        $(field).bind(eventType, handler);
    };
    this.check_fos_user_registration_form_email = function() {
        var gv;
        result = true;
        result = result && checkError('fos_user_registration_form_email', NotBlank, {message:"fos_user.email.blank"} );
        result = result && checkError('fos_user_registration_form_email', Email, {message:"fos_user.email.invalid", checkMX:false, checkHost:false} );
        result = result && checkError('fos_user_registration_form_email', UniqueEntity, {entity:"Sdz\\UserBundle\\Entity\\User", identifier_field_id:"fos_user_registration_form_jsfv_identifier", message:"fos_user.email.already_used", service:"doctrine.orm.validator.unique", em:null, repositoryMethod:"findBy", fields:"email", errorPath:null, ignoreNull:true} );
        return result;
    };
    this.check_fos_user_registration_form_username = function() {
        var gv;
        result = true;
        result = result && checkError('fos_user_registration_form_username', NotBlank, {message:"fos_user.username.blank"} );
        result = result && checkError('fos_user_registration_form_username', UniqueEntity, {entity:"Sdz\\UserBundle\\Entity\\User", identifier_field_id:"fos_user_registration_form_jsfv_identifier", message:"fos_user.username.already_used", service:"doctrine.orm.validator.unique", em:null, repositoryMethod:"findBy", fields:"username", errorPath:null, ignoreNull:true} );
        return result;
    };
    this.check_fos_user_registration_form_plainPassword_first = function() {
        var gv;
        result = true;
        result = result && checkError('fos_user_registration_form_plainPassword_first', NotBlank, {message:"fos_user.password.blank"} );
        return result;
    };
    this.check_fos_user_registration_form_plainPassword_second = function() {
        var gv;
        result = true;
        result = result && checkError('fos_user_registration_form_plainPassword_second', Repeated, {first_name: 'fos_user_registration_form_plainPassword_first', second_name: 'fos_user_registration_form_plainPassword_second', invalid_message: 'fos_user.password.mismatch', invalid_message_parameters: null} );
        return result;
    };
    this.check_fos_user_registration_form_adresse = function() {
        var gv;
        result = true;
        result = result && checkError('fos_user_registration_form_location_adresse', NotBlank, {message:"fos_user.adresse.blank"} );
        result = result && checkError('fos_user_registration_form_location_adresse', IsAdresseValid, {message:"fos_user.adresse.not_valid"} );
        return result;
    };
    this.submit = function() {
        var gv, submitForm = true;
        submitForm = self.check_fos_user_registration_form_email() && submitForm;
        submitForm = self.check_fos_user_registration_form_username() && submitForm;
        submitForm = self.check_fos_user_registration_form_plainPassword_first() && submitForm;
        submitForm = self.check_fos_user_registration_form_plainPassword_second() && submitForm;
        submitForm = self.check_fos_user_registration_form_adresse() && submitForm;
        
        if(!submitForm){
            var form = self.id('fos_user_registration_form');
            alert('il y a une erreur');
            $(form).removeClass('btn-primary').addClass('btn-danger')
        }
        return submitForm;
    };
    this.onReady = function() {
        // On submit checks
        var form = self.id('fos_user_registration_form');

        // Form exists ?
        if (form) {
            // Get the form
            if ( form.nodeName.toLowerCase() != 'form') {
                form = self.id('fos_user_registration_form__token').form;
            }

            self.onEvent(form, 'submit', self.submit);
        }

        // On blur checks
        self.onEvent('fos_user_registration_form_email', 'blur', self.check_fos_user_registration_form_email);
        self.onEvent('fos_user_registration_form_username', 'blur', self.check_fos_user_registration_form_username);
        self.onEvent('fos_user_registration_form_plainPassword_first', 'blur', self.check_fos_user_registration_form_plainPassword_first);
        self.onEvent('fos_user_registration_form_plainPassword_second', 'blur', self.check_fos_user_registration_form_plainPassword_second);
        self.onEvent('fos_user_registration_form_location_adresse', 'blur', self.check_fos_user_registration_form_adresse);
    };
}

$(jsfv['fos_user_registration_form'].onReady);

