$("#form").validate({

    rules: {
        name: {
            required: true
        },
        lastName: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
        phone: {
            required: true,
            minlength: 10,
            maxlength: 20,
            digits: true
        },
        startDate: {
            required: true
        },
        endDate: {
            required: true
        },
        message: {
            required: true,
            minlength: 5
        }
    },
    errorPlacement: function (error, element) {
        // Don't show error text
    },
    highlight: function (element) {
        // Find the label within the same container and add red color
        $(element).closest('div.md\\:mb-\\[24px\\], div.mb-\\[10px\\]').find('label').addClass('text-red-500');
    },
    unhighlight: function (element) {
        $(element).closest('div.md\\:mb-\\[24px\\], div.mb-\\[10px\\]').find('label').removeClass('text-red-500');
    },

    submitHandler: function (form) {
        var button = $(form).find('button');
        var button_text = button.html();

        button.prop('disabled', true).html('Processing...');

        form.submit();
    }
});

// $("#form2").validate({

//     rules: {
//         firstName: {
//             required: true
//         },
//         lastName: {
//             required: true
//         },
//         email: {
//             required: true,
//             email: true
//         },
//         phone: {
//             required: true,
//             minlength: 10,
//             maxlength: 20,
//             digits: true
//         },
//         startDate: {
//             required: true
//         },
//         endDate: {
//             required: true
//         },
//         message: {
//             required: true,
//             minlength: 5
//         }
//     },
//     errorPlacement: function (error, element) {
//         // Don't show error text
//     },
//     highlight: function (element) {
//         // Find the label within the same container and add red color
//         $(element).closest('div.md\\:mb-\\[24px\\], div.mb-\\[10px\\]').find('label').addClass('text-red-500');
//     },
//     unhighlight: function (element) {
//         $(element).closest('div.md\\:mb-\\[24px\\], div.mb-\\[10px\\]').find('label').removeClass('text-red-500');
//     },
//     submitHandler: function (form) {
//         var button = $(form).find('button');
//         var button_text = button.html();

//         button.prop('disabled', true).html('Processing...');

//         form.submit();
//     }
// });