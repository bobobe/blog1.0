
$(document).ready(function(){
        var $loading = $('');
        $(document).ajaxStart(function(){
            $loading.show();
        });

        $(document).ajaxStop(function(){
            $loading.hide();
        });

        //提交表单
        $('form').submit(function(event){
            event.preventDefault();
            var formvalues = $(this).serialize();
            $.post('http://localhost/projects/blog2.0/controller/login.php',formvalues,function(data){
                if(data=='ok')
                {
                    window.location.href="http://localhost/projects/blog2.0/controller/home.php";
                }
                else {
                    $('div.panel-body').html('<div class="alert alert-danger" role="alert"></div>');
                    $('div.alert').html(data);
                }
            });
        });
});



