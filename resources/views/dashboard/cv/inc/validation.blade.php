<script src={{asset('assets/javascript/jquery.validate.js')}}></script>
<script src={{asset('assets/javascript/validate.min.js')}}></script>
<script type="text/javascript">
    if ($(".cv-form").length > 0) {
        $(".cv-form").validate({
            validateHiddenInputs: true,
            ignore: "",
            rules: {
                title: {
                    required: true,
                }, 
                cv_addr: {
                    required: true,
                }, 
            },
            messages: {
                title: {
                    required: "Please enter your title.",
                },
                cv_addr: {
                    required: "Please select cv.",
                }
            },
        })
    }         
</script>