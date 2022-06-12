$(function(){
    var $feedbackForm = $("#feedback");
    $.validator.addMethod("noSpaces", function(value, element){
        return value == '' || value.trim().length != 0
    }, "Spaces is not Allowed")
    if($feedbackForm.length){
        $feedbackForm.validate({
            rules:{
                name: {
                    required: true
                },
                service_num: {
                    required: true,
                    noSpaces: true
                },
                phone: {
                    required: true
                },

            },
            messages:{
                name: {
                    required: "name please"
                },
                service_num: {
                    required: "Service Number is mandatroy"
                },
                phone: {
                    required: "Phone is mandatroy"
                }
            }
        })
    }
})