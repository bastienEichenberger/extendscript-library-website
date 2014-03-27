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

jsfv['sdz_blogbundle_articleedittype'] = new function () {
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
        /*//  */

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
    this.check_sdz_blogbundle_articleedittype_titre = function() {
        var gv;
        result = true;
        result = result && checkError('sdz_blogbundle_articleedittype_titre', NotBlank, {message:"sdz_blog.title.blank"} );
        return result;
    };
    this.check_sdz_blogbundle_articleedittype_contenu = function() {
        var gv;
        result = true;
        result = result && checkError('sdz_blogbundle_articleedittype_contenu', NotBlank, {message:"sdz_blog.content.blank"} );
        return result;
    };
    this.submit = function() {
        var gv, submitForm = true;
        submitForm = self.check_sdz_blogbundle_articleedittype_titre() && submitForm;
        submitForm = self.check_sdz_blogbundle_articleedittype_contenu() && submitForm;
                        if(!submitForm){
            var form = self.id('sdz_blogbundle_articleedittype');
            alert('il y a une erreur');
            $(form).removeClass('btn-primary').addClass('btn-danger')
        }
        return submitForm;
    };
    this.onReady = function() {
        // On submit checks
        var form = self.id('sdz_blogbundle_articleedittype');

        // Form exists ?
        if (form) {
            // Get the form
            if ( form.nodeName.toLowerCase() != 'form') {
                form = self.id('sdz_blogbundle_articleedittype__token').form;
            }

            self.onEvent(form, 'submit', self.submit);
        }

        // On blur checks
        self.onEvent('sdz_blogbundle_articleedittype_titre', 'blur', self.check_sdz_blogbundle_articleedittype_titre);
        self.onEvent('sdz_blogbundle_articleedittype_contenu', 'blur', self.check_sdz_blogbundle_articleedittype_contenu);

    };
}

$(jsfv['sdz_blogbundle_articleedittype'].onReady);

