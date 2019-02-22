$(document).ready(function () {
    
    function jnotice(msg,timeout){
        timeout = timeout ===undefined?3000:timeout;
        if(jQuery('#jbnotice').length){
            jQuery('#jbnotice').remove();
        }
        var html =
    '<div id="jbnotice" ' +
              'style="text-align:center;font-size:20px;border: 1px solid #ccc;background: rgb(18, 100, 232);color:white;position:fixed;width:300px;top:50%;left:50%;margin-left:-150px;magrin-top:-20px;line-height:40px;padding:10px;">'
      +msg+
    '</div>';
        jQuery('body').append(html);
        jQuery('#jbnotice').fadeOut(timeout);

    }

$("#submit").on("click",function (event) {
        event.preventDefault();
        var name = $("form").find("input[name='name']").val();
        var email = $("form").find("input[name='email']").val();
        var city = $("form").find("input[name='city']").val();
        var phone_number = $("form").find("input[name='phone_number']").val();

  $.ajax({
    url:"actions.php",
            type: 'post',
            dataType:'text',
            data: {
        name:name,
                email:email,
                city:city,
                phone_number:phone_number,
      submit:"submit"
    },
            success: function(res){
                jnotice(' Thành công',5000);
                $("form")[0].reset();
            }
  })
    })
})
