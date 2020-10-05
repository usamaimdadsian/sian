<script src={{asset('assets/javascript/jquery.validate.js')}}></script>
<script src={{asset('assets/javascript/validate.min.js')}}></script>
<script type="text/javascript">
    if ($(".student-form").length > 0) {
        $(".student-form").validate({
            validateHiddenInputs: true,
            ignore: "",
            rules: {
                first_name: {
                    required: true,
                }, 
                last_name: {
                    required: true,
                }, 
                serial: {
                    required: true,
                },
                roll_no: {
                    required: true,
                },
                father_name: {
                    required: true,
                },
                father_profession: {
                    required: true,
                },
                caste: {
                    required: true,
                },
                cell_no: {
                    required: true,
                },
                gender: {
                    required: true,
                },
                relegion: {
                    required: true,
                },
                cnic: {
                    required: true,
                },
                father_cnic: {
                    required: true,
                },
                date_of_birth: {
                    required: true,
                },
                address: {
                    required: true,
                },
                clas_id:{
                    required: true
                }
            },
            messages: {
                first_name: {
                    required: "Please enter your First Name",
                },
                last_name: {
                    required: "Please enter your Last Name",
                },
                serial: {
                    required: "Please enter the serial.",
                },
                roll_no: {
                    required: "Please enter the Roll No.",
                },
                father_name: {
                    required: "Please enter the Father Name.",
                },
                father_profession: {
                    required: "Please enter the Father Profession.",
                },
                caste: {
                    required: "Please enter the Caste.",
                },
                cell_no: {
                    required: "Please enter the Cell No.",
                },
                gender: {
                    required: "Please enter the Gender.",
                },
                relegion: {
                    required: "Please enter the Relegion.",
                },
                cnic: {
                    required: "Please enter the CNIC.",
                },
                father_cnic: {
                    required: "Please enter the Father CNIC.",
                },
                date_of_birth: {
                    required: "Please enter the Date of Birth.",
                },
                address: {
                    required: "Please enter the Address.",
                },
                clas_id:{
                    required: "Please select the class"
                }
            },
        })
    }         
</script>
<script>
    var addresses = {!!json_encode($addresses ?? '')!!}
    var classes = {!! json_encode($classes) !!}
    var classesF = {!! json_encode($classesF) !!}
    var sections = {!! json_encode($sections) !!}
    console.log('what is this')
    setSections()
    $("#tf11").change(setSections)
    function setSections(){
        class_id = parseInt($("#tf11").val());
        html = ''
        $.each(classesF,function(k,v){
            if(v.id == class_id)
            {
                $("#tf20").val(v.fee);
            }
        });
        // $.each(classesF, function(class){
        // });
        $.each(sections,function(key,name){
            if(key == class_id)
            {
                html += '<option value="'+key+'">'+name+'</option>'
            }
        });
        $("#tf12").html(html);
    }
    $("#tf13").autocomplete({
        source: addresses
    });

</script>