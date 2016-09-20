// // Wait for the DOM to be ready
// $(function() {
//     // Initialize form validation on the registration form.
//     // It has the name attribute "registration"
//     $("form[name='registration']").validate({
//         // Specify validation rules
//         rules: {
//             // The key name on the left side is the name attribute
//             // of an input field. Validation rules are defined
//             // on the right side
//             firstname: "required",
//             lastname: "required",
//             email: {
//                 required: true,
//                 // Specify that email should be validated
//                 // by the built-in "email" rule
//                 email: true
//             },
//             password: {
//                 required: true,
//                 minlength: 5
//             }
//         },
//         // Specify validation error messages
//         messages: {
//             firstname: "Please enter your firstname",
//             lastname: "Please enter your lastname",
//             password: {
//                 required: "Please provide a password",
//                 minlength: "Your password must be at least 5 characters long"
//             },
//             email: "Please enter a valid email address"
//         },
//         // Make sure the form is submitted to the destination defined
//         // in the "action" attribute of the form when valid
//         submitHandler: function(form) {
//             form.submit();
//         }
//     });
// });

// Wait for the DOM to be ready
$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='collector']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            name: "required",
            password: {
                required: true,
                minlength: 6
            }
        },
        // Specify validation error messages
        messages: {
            name: "Please enter name",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long"
            },
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });

    // create user validation

    $("form[name='createUser']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            username: "required",
            password: {
                required: true,
                minlength: 6
            },
            name: "required",
            Father: "required",
            Mother: "required",
            Company: "required",
            gender: "required",
            dob: "required",
            PresentAddress: "required",
            PermanentAddress: "required",
            connectedFrom: "required",
            phone: "required",
            bill: "required",
            dataScheme: "required",
        },
        // Specify validation error messages
        messages: {
            username: "Please enter username",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long"
            },
            name: "please enter full name",
            Father: "please enter father's name",
            Mother: "please enter mother's name",
            Company: "please enter occupation",
            gender: "please select a gender",
            dob: "please enter birth date",
            PresentAddress: "please enter PresentAddress",
            PermanentAddress: "please enter PermanentAddress",
            PermanentAddress: "please enter PermanentAddress",
            ConnectedFrom: "ConnectedFrom",
            phone: "please enter phone number",
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });

    // bill receive
    $("form[name='bill']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            receipt: "required",
            billentrydate: "required",
        },
        // Specify validation error messages
        messages: {
            receipt: "Please enter receipt No.",
            billentrydate: "Please select a the bill entry date.",
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });

});