
$("input:checkbox").on('click', function() {
    var $box = $(this);
    if ($box.is(":checked")) {
      var group = "input:checkbox[class='radio']";
      $(group).prop("checked", false);
      $box.prop("checked", true);
    } else {
      $box.prop("checked", false);
    }
  });
  
  function checkPassword() {
    var checker=0;
      if (document.getElementById("password1").value==document.getElementById("password2").value) {
          document.getElementById("passwordsMatch").style="display: none;";
          checker++;
      }else{
          document.getElementById("passwordsMatch").style="display: block;";
      }
      if(document.getElementById("password1").value.length>7){ 
            document.getElementById("minPassLength").style="display: none;";
            checker++;
        }else{
          document.getElementById("minPassLength").style="display: block;";
      }
      if(document.getElementById("username").value.length>3){ 
            document.getElementById("minUsernameLength").style="display: none;";
            checker++;
        }else{
          document.getElementById("minUsernameLength").style="display: block;";
      }
      if ((document.getElementById("checkbox1").checked==true)||(document.getElementById("checkbox2").checked==true)) {
              document.getElementById("checkWhether").style="display: none;";
              checker++;
          }else{
              document.getElementById("checkWhether").style="display: block;";
      }
      if (checker==4) {
        return true;
      }else{
        return false;
      }
    }