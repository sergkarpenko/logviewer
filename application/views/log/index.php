<!DOCTYPE html>
<html>
<head>
<title>Log</title>
<?php echo HTML::script('static/js/jquery-1.6.2.js') ?>
<?php echo HTML::script('static/js/jquery.tmpl.js') ?>
<script type="text/javascript">
$(function(){
    var settings = {
        logUrl: '<?php echo URL::site('log/get') ?>'
    };
    $.getJSON(settings.logUrl, function(data){
        console.log(data.test);
    });
});
</script>
</head>
<body>
<a href="#"></a>
</body>
</html>