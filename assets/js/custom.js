(function($ ){
    $(document).ready(function(){



        //staff img load
        $('input#staff_photo').change(function(e){
           let file_url =  URl.createdObjectURL(e.target.files[0]);
            $('img#staff_photo_load').attr('src', file_url);
            $('img#image_loder').hide();
            $('a#remove_photo').show();

        });
        // update image
        $('input#staff_photo_update').change(function(e){
            let file_url =  URl.createdObjectURL(e.target.files[0]);
             $('img#staff_photo_load').attr('src', file_url);
             $('img#image_loder').hide();
             $('a#remove_photo').show();
 
         });


        //remove photos
        $(document).on('click', 'a#remove_photo', function(e){
            e.preventDefault();
            $('img#staff_photo_load').attr('src', '');
            $('img#image_loder').show();
            $('a#remove_photo').hide();
        });

        // staff validation
        $(document).on('submit', 'form#staff-form', function(e){
            e.preventDefault();

            let name = $('form#staff-form input[name ="name"]').val();
            let email = $('form#staff-form input[name ="email"]').val();
            let cell = $('form#staff-form input[name ="cell"]').val();

            if(name == '' || email == '' || cell== ''){
                $('.modal-msg').html('<p class="alert alert-danger" > All fileds are required! <button class ="close" data-dismiss="alert">&times;</button></p>');
            }else{
                $.ajax({
                    url : 'ajax_template/staff_add.php',
                    method : "POST",
                    data : new FormData(this),
                    contentType : false,
                    processData : false,
                    success : function(data){
                      $('.modal-msg').html(data);
                      $('form#staff-form')[0].reset();
                      $('img#staff_photo_load').attr('src', '');
                      $('img#image_loder').show();
                      $('a#remove_photo').hide();
                      allStaff();
                    }
                });
            }


        });


        /**
         * All staff load
         */
         allStaff();
        function allStaff(){
            $.ajax({
                url : 'ajax_template/staff_all.php',
                success : function(data){
                   $('tbody#staff_all').html(data);
                }
            });
        }


        //delete staff
        $(document).on('click', 'a#delete_data', function(e){
            e.preventDefault();
            let user_id =$(this).attr('del_id');

            let con = confirm('Are you sure!');

            if(con == false){
                return false;
            }else{
                $.ajax({
                    url : 'ajax_template/staff_delete.php',
                    method : "POST",
                    data : {id : user_id},
                    success : function(data){
                        allStaff();
                        $('.mess').html(data);
                    }
                });
            }

        });


        // staff single view
        $(document).on('click', 'a#staff_view_modal', function(e){
            e.preventDefault();
            let user_id = $(this).attr('show_id');

            $.ajax({
                url : 'ajax_template/staff_show.php',
                method : "POST",
                data : {id : user_id},
                success : function(data){
                    let single_staff = JSON.parse(data);
                    alert(single_staff.name);
                    $('.staff-single-data img').attr('src', 'photos/staff/' + single_staff.photo );
                    $('.staff-single-data h2').html(single_staff.name );
                    $('.staff-single-data h4').html(single_staff.cell );
                    $('.staff-single-data table td#name').html(single_staff.name );
                    $('.staff-single-data table td#email').html(single_staff.email );
                    $('.staff-single-data table td#cell').html(single_staff.cell );
                    $('#staff_view').modal('show');
                }
            });

        });



        // update
        $(document).on('click', 'a#staff_update_modal', function(e){
            e.preventDefault();
            let user_id = $(this).attr('edit_id');
            $.ajax({
                url : 'ajax_template/staff_edit.php',
                method : "POST",
                data : {id : user_id},
                success : function(data){

                    let edit_data =  JSON.parse(data);

                    $('#staff-modal_update input[name="name"] ').val(edit_data.name);
                    $('#staff-modal_update input[name="id"] ').val(edit_data.id);
                    $('#staff-modal_update input[name="email"] ').val(edit_data.email);
                    $('#staff-modal_update input[name="cell"] ').val(edit_data.cell);
                    $('#staff-modal_update input[name="old_photo"] ').val(edit_data.photo);
                    $('#staff-modal_update img#staff_photo_load').attr('src', 'photos/staff/' , edit_data.photp);

                    $('#staff-modal_update').modal('show');
                } 
            });
        
        
        });


        // staff update
        $(document).on('submit', 'form#staff-update-form', function(e){
            e.preventDefault();
            

            $.ajax({
                url : 'ajax_template/staff_update.php',
                method : 'POST',
                data : new FormData(this),
                contentType : false,
                processData : false,
                success : function(data){   
                    $('.mess').html(data);
                    allStaff();
                    $('#staff-modal_update').modal('hide');
                }
            });
        });



        //email validate system by keyup
        $(document).on('keyup', 'input#email_validate', function(){
            let email =$(this).val();
          


            $.ajax({
                url : 'ajax_template/staff_email_check.php',
                data : {email : email },
                method : 'POST',
                success : function(data){
                    $('span#email_check').html(data);
                }
            });
        });







    });
})(jQuery)