javascript:(function(){
  var script = document.createElement('script');
  script.src="https://cdn.jsdelivr.net/npm/eruda";
  document.body.append(script);
  script.onload = function(){
    eruda.init();
  }
})();

$(document).ready(function(){
  // AJAX for login
  $("#submit").click(function(e){
    e.preventDefault();

    const email = $("#email").val();

    $.ajax({
      url: "/submit-login",
      type: "POST",
      data: {email:email},
      sucess: function(data){
        alert(data);
      }
    });
  });

  // AJAX for register 
  $("#register").click(function(e){
    e.preventDefault();

    const name = $("#name").val();
    const email = $("#email").val();

    $.ajax({
      url: "/submit-register",
      type: "POST",
      data: {name:name, email:email},
      sucess: function(data){
        alert(data);
      }
    });
  });


});
