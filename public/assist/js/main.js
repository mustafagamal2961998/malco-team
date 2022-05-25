/*
// $(document).ready(function(){

//     $("#user_registertion").submit(function(e){
//         e.preventDefault();
//     });
//     $('#user_registertion_btn').on('click',function(){
        
//             var fname    = $("#fname").val();
//             var lname    = $("#lname").val();
//             var email    = $("#email").val();
//             var password = $("#password").val();
//             var password_confirmation =$("#password_confirmation").val()

//             var date     = $("#date").val();
//             $.ajax({
//                 url:'/user_registertion',
//                 dataType: "json",
//                 type:'GET',
//                 data:{
//                     'fname':fname,
//                     'lname':lname,
//                     'email':email,
//                     'password':password,
//                     'password_confirmation':password_confirmation,
//                     'date':date,
//                 },
//                 success:function (data){
                   
//                     $('.alert').text(data);
                    
//                 }
//         });

//     });

// });
*/


// Login & Sign up Forms
$(document).ready(function(){
    $('#create_new_account').on('click',function(){
        $('.login-form-box').hide();
        $('.signup-form-box').show();
    })
});
$(document).ready(function(){
    $('#show_login_form').on('click',function(){
        $('.signup-form-box').hide();
        $('.login-form-box').show();
    
    })
});
