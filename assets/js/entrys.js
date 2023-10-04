$(document).ready(function () {
     $("body").on("click",".upload-image",function(e){
        $(this).parents("form").ajaxForm(options);



          // $.ajax({  
          //      url:base_url+'entrys/uploads',   
          //      method:"POST",  
          //      data:new FormData(this),  
          //      contentType: false,  
          //      cache: false,  
          //      processData:false,  
          //      success:function(data)  
          //      {  
          //        console.log(data);
          //        //    $('#uploaded_image').html(data); 
          //      }  
          // });  
          
         });
   
   
        var options = { 
          complete: function(response) 
          {
            if($.isEmptyObject(response.responseJSON.error)){
               alert('Image Upload Successfully.');
              //  $(".preview").css("display","block");
              //  $(".preview").find("img").attr("src","/uploads/"+response.responseJSON.success);
            }else{
               alert('Image Upload Error.');
            }
          }
        };

        
            
    // $('#btn-submited').on('click',function(data) { 

    //     var fd = new FormData();
    //     var files = $('#pathp_t')[0].files[0];
    //    console.log($('#pathp_t').prop('files'));
        
    //     $.ajax({
    //         type: "POST",
    //         url: base_url+"entrys/input",
    //         data: {
    //             'noreg' : $('#noreg_t').val(),
    //             'nama' : $('#nama_t').val(),
    //             'tempat' : $('#tempat_t').val(),
    //             'dob' : $('#dob_t').val(),
    //             'jenis' : $('#sel_jenis').val(),
    //             'alat' : $('#sel_alat').val(),
    //             'klasifikasi' : $('#sel_klasifikasi').val(),
    //             'kelas' : $('#sel_kelas').val(),
    //             'exp' : $('#exp_t').val(),
    //             'file':  $('#pathp_t').prop('files'),
    //         },
    //         dataType: "json",
    //         success: function (data) {
    //             console.log(data);

    //             if(data){
    //                 $('#form_entrys')[0].reset();
    //                 alert('Register Personel Succesfully');
    //             }
    //             else{

    //                 alert('Register Personel Failed !');
    //             }

    //         }
    //     });

        
    // })
});