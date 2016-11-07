$(function(){
    // Validate login form
    $("form[name='loginForm']").validate({
        rules: {
            username: {
                required: true,
                maxlength: 20
            },
            password: {
                required: true,
                maxlength: 50
            }
        }, 

        messages: {
            username: {
                required: "<br/> Username required",
                maxlength: "<br/> Username too long"
            },
            password: {
                required: "<br/> Password required",
                maxlength: "<br/> Password too long"
            }
        }
    });

    // Valid register form
    $("form[name='registerForm']").validate({
        rules: {
            username: {
                required: true,
                maxlength: 20
            },
            password: {
                required: true,
                maxlength: 50
            },
            email: {
                required: true,
                email: true, 
                maxlength: 30
            },
            firstname: {
                required: true,
                maxlength: 20
            },
            lastname: {
                required: true,
                maxlength: 20
            },
        },

        messages: {
            username: {
                required: "<br/> Username required",
                maxlength: "<br/> Username too long"
            },
            password: {
                required: "<br/> Password required",
                maxlength: "<br/> Password too long"
            },
            email: {
                required: "<br/> Email required",
                email: "<br/> Invalid email",
                maxlength: "<br/> Email too long"
            },
            firstname: {
                required: "<br/> First name required",
                maxlength: "<br/> First name too long"
            },
            lastname:{
                required: "<br/> Last name required",
                maxlength: "<br/> Last name too long" 
            }
        }
    });
});